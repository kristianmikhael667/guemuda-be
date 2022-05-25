<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Content;
use App\Models\ContentViews;
use App\Models\LikeContent;
use App\Models\Tags;
use App\Models\User;
use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use Hashids\Hashids;
use Spatie\Permission\Exceptions\UnauthorizedException;

class ContentController extends Controller
{

    public function index()
    {
        $hashids = new Hashids('', 10);
        // $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", Auth::user()['roles'])
        //     ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
        //     ->all();
        // $data = array(
        //     "name" => $rolePermissions
        // );
        // if (empty($data['name'][20])) {
        //     throw UnauthorizedException::forPermissions($data);
        // }
        $search = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' iner ' . $category->name;
        }

        if (request('user')) {
            $user = User::firstWhere('username', request('user'));
            $title = ' by ' . $user->username;
        }

        $contents = Content::latest()->with(['category', 'user', 'comments'])->filter(request(['search', 'user', 'category', 'comments']))->paginate(10)->withQueryString();

        $kinanda = Content::join("content_views", "content_views.id_post", "=", "contents.id")
            ->where("content_views.created_at", ">=", date("Y-m-d H:i:s", strtotime('-24 hours', time())))
            ->groupBy("contents.slug")
            ->groupBy("contents.id")
            ->groupBy("contents.uid_user")
            ->groupBy("contents.uid_user_2")
            ->groupBy("thumbnail")
            ->groupBy("contents.description")
            ->groupBy("contents.captions")
            ->groupBy("contents.link_audio")
            ->groupBy("contents.type")
            ->groupBy("contents.link")
            ->groupBy("contents.status")
            ->groupBy("contents.created_at")
            ->groupBy("contents.updated_at")
            ->groupBy("contents.title")
            ->groupBy("contents.subdesc")
            ->groupBy("contents.image")
            ->groupBy("contents.video")
            ->groupBy("contents.category_id")
            ->groupBy("contents.tags_id")
            ->orderBy(DB::raw('COUNT(contents.id)', 'desc'), 'desc')
            ->get(array(DB::raw('COUNT(contents.id) as total_views'), 'contents.*'));

        $taggers = Tags::all();
        return view('admin.content', [
            'page' => 'Administrator',
            'contents' => $contents,
            'views' => $kinanda,
            'tages' => $taggers,
            'hashids' => $hashids
        ]);
    }

    public function create()
    {
        /* Note */
        // $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", Auth::user()['roles'])
        //     ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
        //     ->all();
        // $data = array(
        //     "name" => $rolePermissions
        // );
        // if (empty($data['name'][21])) {
        //     throw UnauthorizedException::forPermissions($data);
        // }
        return view('admin.create-post', [
            'page' => 'Administrator',
            'categories' => Category::where("parent", 0)->get(),
            'tags' => Tags::all()
        ]);
    }

    public function store(Request $request)
    {
        // $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", Auth::user()['roles'])
        //     ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
        //     ->all();
        // $data = array(
        //     "name" => $rolePermissions
        // );
        // if (empty($data['name'][21])) {
        //     throw UnauthorizedException::forPermissions($data);
        // }
        $validatedData = $request->validate([
            'title' => 'required',
            'tags_id' => 'required',
            'category_id' => 'required',
            'image' => 'image|file|max:1024',
            'description' => 'required',
            'video' => 'mimes:mp4,x-flv,x-mpegURL,MP2T,3gpp,quicktime,x-msvideo,x-ms-wmv',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-image');
            $validatedData['video'] = '-';
            $validatedData['thumbnail'] = '-';
            $validatedData['type'] = 'image';
            $validatedData['captions'] = $request->captions;
            $validatedData['link'] = '-';
            $validatedData['link_audio'] = "-";
        }
        // if ($request->hasFile('video')) {
        //     $validatedData['video'] = $request->file('video')->store('post-video');
        //     $validatedData['thumbnail'] = $request->file('thumbnail')->store('post-image');
        //     $validatedData['image'] = '-';
        //     $validatedData['link'] = $request->link;
        // }
        // Video
        if ($request->link) {
            // $validatedData['video'] = $request->file('video')->store('post-video');
            $validatedData['thumbnail'] = $request->file('thumbnails')->store('post-image');
            $validatedData['image'] = '-';
            $validatedData['captions'] = '-';
            $validatedData['type'] = 'video';
            $validatedData['link'] = $request->link;
            $validatedData['link_audio'] = "-";
        }
        // Audio
        if ($request->audios) {
            // $validatedData['video'] = $request->file('video')->store('post-video');
            $validatedData['thumbnail'] = $request->file('thumbnailt')->store('post-image');
            $validatedData['image'] = '-';
            $validatedData['captions'] = '-';
            $validatedData['type'] = 'audio';
            $validatedData['link'] = '-';
            $validatedData['link_audio'] = $request->audios;
        }

        $slug = SlugService::createSlug(Content::class, 'slug', $request->title);

        $validatedData['uid_user'] = auth()->user()->id;
        $validatedData['uid_user_2'] = "Not Edited";
        $validatedData['slug'] = $slug;
        $validatedData['created_at'] = $request->created_at ? $request->created_at : Carbon::now();
        $validatedData['updated_at'] = $request->created_at ? $request->created_at : Carbon::now();
        $validatedData['tags_id'] = implode(",", $validatedData['tags_id']);
        $taglessBody = strip_tags($validatedData['description']);
        $validatedData['subdesc'] = $taglessBody;
        Content::create($validatedData);
        return redirect('/administrator/post')->with('success', 'New post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", Auth::user()['roles'])
        //     ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
        //     ->all();
        // $data = array(
        //     "name" => $rolePermissions
        // );
        // if (empty($data['name'][20])) {
        //     throw UnauthorizedException::forPermissions($data);
        // }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Content $post)
    {
        // $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", Auth::user()['roles'])
        //     ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
        //     ->all();
        // $data = array(
        //     "name" => $rolePermissions
        // );
        // if (empty($data['name'][22])) {
        //     throw UnauthorizedException::forPermissions($data);
        // }

        $teg = array_map('intval', explode(',', $post->tags_id));
        $category = Category::where('id', '=', $post->category_id)->get();
        $idparent = Category::where('id', '=', $category[0]->parent)->get();
        $idparentarr = array_map('intval', explode(',', $idparent[0]->id));
        $images = substr($post->image, 11);
        return view('admin.content-edit', [
            'page' => 'Administrator',
            'categories' => Category::where("parent", 0)->get(),
            'tags' => Tags::all(),
            'tagsme' => $teg,
            'contents' => $post,
            'category' => $category,
            'parents' => $idparentarr,
            'images' => $images
        ]);
    }

    public function edittitle($id)
    {
        // $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", Auth::user()['roles'])
        //     ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
        //     ->all();
        // $data = array(
        //     "name" => $rolePermissions
        // );
        // if (empty($data['name'][22])) {
        //     throw UnauthorizedException::forPermissions($data);
        // }
        $title = DB::table('contents')->where('slug', $id)->get();
        $title_data = $title[0]->title;
        $slugs = $title[0]->slug;
        return view('admin.content-title', [
            'page' => 'Administrator',
            'contents' => $title_data,
            'slugs' => $slugs
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Content $post)
    {
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", Auth::user()['roles'])
            ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
            ->all();
        $data = array(
            "name" => $rolePermissions
        );
        if (empty($data['name'][22])) {
            throw UnauthorizedException::forPermissions($data);
        }
        if ($request->title) {
            DB::table('contents')->where('slug', $post->slug)->update([
                'title' => $request->title,
                'slug' =>  SlugService::createSlug(Content::class, 'slug', $request->title),
                'uid_user_2' => auth()->user()->username,
                'updated_at' => date('Y-m-d H:i:s')
            ]);
            return redirect('/administrator/post')->with('success', 'Post has been updated!');
        }

        // Full edit without title
        $validatedData = $request->validate([
            'image' => 'image|file|max:2024',
        ]);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('post-image');
        }
        $time = strtotime($request->created_at);
        $newformat = date('Y-m-d', $time);

        // dd($request->category_id);
        DB::table('contents')->where('slug', $post->slug)->update([
            'created_at' => $newformat,
            'updated_at' => date('Y-m-d H:i:s'),
            'category_id' => $request->category_id ? $request->category_id : $post->category_id,
            'description' =>  $request->description ? $request->description : $post->description,
            'subdesc' => $request->description ? strip_tags($request->description) : strip_tags($post->description),
            'uid_user_2' => auth()->user()->uid_user,
            'tags_id' => $request->tags_id ? implode(",", $request->tags_id) : implode(",", $post->tags_id),
            'captions' => $request->captions ? $request->captions : $post->captions,
            'uid_user_2' => 'Not Edited'
        ]);
        $validatedData['uid_user'] = auth()->user()->id;

        Content::where('slug', $post->slug)
            ->update($validatedData);
        return redirect('/administrator/post')->with('success', 'Content has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Content $content)
    {
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", Auth::user()['roles'])
            ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
            ->all();
        $data = array(
            "name" => $rolePermissions
        );
        if (empty($data['name'][23])) {
            throw UnauthorizedException::forPermissions($data);
        }
        if ($content->image) {
            Storage::delete($content->image);
        }
        Content::destroy($content->id);
        return redirect('/administrator/post')->with('success', 'New post has been deleted!');
    }
}
