<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Content;
use App\Models\ContentViews;
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

class ContentController extends Controller
{

    public function index()
    {
        $all_roles_except_a_and_b = Role::whereNotIn('name', ['post-edit'])->get();
        foreach ($all_roles_except_a_and_b as $rol) {
            if ($rol->rolesname != Auth::user()['rolesname'] && $rol->rolesname == Auth::user()['rolesname']) {
                abort(403);
            }
        }
        $search = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' iner ' . $category->name;
        }

        if (request('user')) {
            $user = User::firstWhere('username', request('user'));
            $title = ' by ' . $user->username;
        }

        $contents = Content::latest()->with(['category', 'user'])->filter(request(['search', 'user', 'category']))->paginate(10)->withQueryString();
        $kinanda = Content::join("content_views", "content_views.id_post", "=", "contents.id")
            ->where("content_views.created_at", ">=", date("Y-m-d H:i:s", strtotime('-24 hours', time())))
            ->groupBy("contents.slug")
            ->groupBy("contents.id")
            ->groupBy("contents.uid_user")
            ->groupBy("contents.uid_user_2")
            ->groupBy("thumbnail")
            ->groupBy("contents.description")
            ->groupBy("contents.captions")
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
            'tages' => $taggers
        ]);
    }

    public function create()
    {
        $all_roles_except_a_and_b = Role::whereNotIn('name', ['post-create'])->get();
        foreach ($all_roles_except_a_and_b as $rol) {
            if ($rol->rolesname != Auth::user()['rolesname'] && $rol->rolesname == Auth::user()['rolesname']) {
                abort(403);
            }
        }
        $role = User::permission('post-create')->get();
        foreach ($role as $rol) {
            if ($rol->rolesname != Auth::user()['rolesname']) {
                abort(403);
            }
        }
        return view('admin.create-post', [
            'page' => 'Administrator',
            'categories' => Category::where("parent", 0)->get(),
            'tags' => Tags::all()
        ]);
    }

    public function store(Request $request)
    {
        $all_roles_except_a_and_b = Role::whereNotIn('name', ['post-create'])->get();
        foreach ($all_roles_except_a_and_b as $rol) {
            if ($rol->rolesname != Auth::user()['rolesname'] && $rol->rolesname == Auth::user()['rolesname']) {
                abort(403);
            }
        }
        $role = User::permission('post-create')->get();
        foreach ($role as $rol) {
            if ($rol->rolesname != Auth::user()['rolesname']) {
                abort(403);
            }
        }
        $validatedData = $request->validate([
            'title' => 'required',
            'tags_id' => 'required',
            'category_id' => 'required',
            'image' => 'image|file|max:1024',
            'description' => 'required',
            'video' => 'mimes:mp4,x-flv,x-mpegURL,MP2T,3gpp,quicktime,x-msvideo,x-ms-wmv',
        ]);

        // make image true 1 and make video false 0
        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-image');
            $validatedData['video'] = '-';
            $validatedData['thumbnail'] = '-';
            $validatedData['type'] = 1;
            $validatedData['captions'] = $request->captions;
            $validatedData['link'] = '-';
        }
        if ($request->hasFile('video')) {
            $validatedData['video'] = $request->file('video')->store('post-video');
            $validatedData['thumbnail'] = $request->file('thumbnail')->store('post-image');
            $validatedData['image'] = '-';
            $validatedData['link'] = $request->link;
        }
        $slug = SlugService::createSlug(Content::class, 'slug', $request->title);

        $validatedData['uid_user'] = auth()->user()->id;
        $validatedData['uid_user_2'] = "Not Edited";
        $validatedData['slug'] = $slug;
        $validatedData['created_at'] = $request->created_at ? $request->created_at : Carbon::now();
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
        $all_roles_except_a_and_b = Role::whereNotIn('name', ['post-list'])->get();
        foreach ($all_roles_except_a_and_b as $rol) {
            if ($rol->rolesname != Auth::user()['rolesname'] && $rol->rolesname == Auth::user()['rolesname']) {
                abort(403);
            }
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Content $post)
    {
        $all_roles_except_a_and_b = Role::whereNotIn('name', ['post-edit'])->get();
        foreach ($all_roles_except_a_and_b as $rol) {
            if ($rol->rolesname != Auth::user()['rolesname'] && $rol->rolesname == Auth::user()['rolesname']) {
                abort(403);
            }
        }
        return view('admin.content-edit', [
            'page' => 'Administrator',
            'contents' => $post
        ]);
    }

    public function edittitle($id)
    {
        $all_roles_except_a_and_b = Role::whereNotIn('name', ['role-post'])->get();
        foreach ($all_roles_except_a_and_b as $rol) {
            if ($rol->rolesname != Auth::user()['rolesname'] && $rol->rolesname == Auth::user()['rolesname']) {
                abort(403);
            }
        }
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
        $all_roles_except_a_and_b = Role::whereNotIn('name', ['post-edit'])->get();
        foreach ($all_roles_except_a_and_b as $rol) {
            if ($rol->rolesname != Auth::user()['rolesname'] && $rol->rolesname == Auth::user()['rolesname']) {
                abort(403);
            }
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Content $content)
    {
        $all_roles_except_a_and_b = Role::whereNotIn('name', ['post-edit'])->get();
        foreach ($all_roles_except_a_and_b as $rol) {
            if ($rol->rolesname != Auth::user()['rolesname'] && $rol->rolesname == Auth::user()['rolesname']) {
                abort(403);
            }
        }
        if ($content->image) {
            Storage::delete($content->image);
        }
        Content::destroy($content->id);
        return redirect('/administrator/post')->with('success', 'New post has been deleted!');
    }
}
