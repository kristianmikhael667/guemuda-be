<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryCommunity;
use App\Models\CommunityGroup;
use App\Models\CommunityNews as ModelsCommunityNews;
use App\Models\TagsCommunity;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Exceptions\UnauthorizedException;
use Illuminate\Support\Facades\Storage;

class CommunityNews extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Permission
        // $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", Auth::user()['roles'])
        //     ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
        //     ->all();
        // $data = array(
        //     "name" => $rolePermissions
        // );
        // if (empty($data['name'][28])) {
        //     throw UnauthorizedException::forPermissions($data);
        // }

        $community = ModelsCommunityNews::latest()->with(['communitygroup', 'user'])->filter(request(['search', 'user', 'communitygroup']))->paginate(10)->withQueryString();

        $kinanda = ModelsCommunityNews::join("community_views", "community_views.id_community", "=", "community_news.id")
            ->where("community_views.created_at", ">=", date("Y-m-d H:i:s", strtotime('-24 hours', time())))
            ->groupBy("community_news.slug")
            ->groupBy("community_news.id")
            ->groupBy("community_news.uid_user")
            ->groupBy("community_news.uid_user_2")
            ->groupBy("community_news.description")
            ->groupBy("community_news.status")
            ->groupBy("community_news.type")
            ->groupBy("community_news.link_video")
            ->groupBy("community_news.thumbnail")
            ->groupBy("community_news.captions")
            ->groupBy("community_news.created_at")
            ->groupBy("community_news.updated_at")
            ->groupBy("community_news.title")
            ->groupBy("community_news.subdesc")
            ->groupBy("community_news.avatar")
            ->groupBy("community_news.category_id")
            ->groupBy("community_news.tags_id")
            ->orderBy(DB::raw('COUNT(community_news.id)', 'desc'), 'desc')
            ->get(array(DB::raw('COUNT(community_news.id) as total_views'), 'community_news.*'));

        $taggers = TagsCommunity::all();

        return view('admin.communnity-news', [
            'page' => 'Administrator',
            'communitys' => $community,
            'views' => $kinanda,
            'tages' => $taggers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Permission
        // $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", Auth::user()['roles'])
        //     ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
        //     ->all();
        // $data = array(
        //     "name" => $rolePermissions
        // );
        // if (empty($data['name'][29])) {
        //     throw UnauthorizedException::forPermissions($data);
        // }
        return view('admin.create-community-news', [
            'page' => 'Administrator',
            'tags' => TagsCommunity::all(),
            'categories' => CommunityGroup::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Permission
        // $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", Auth::user()['roles'])
        //     ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
        //     ->all();
        // $data = array(
        //     "name" => $rolePermissions
        // );
        // if (empty($data['name'][29])) {
        //     throw UnauthorizedException::forPermissions($data);
        // }

        $validatedData = $request->validate([
            'title' => 'required',
            'tags_id' => 'required',
            'category_id' => 'required',
            'avatar' => 'image|file|max:1024',
            'description' => 'required',
        ]);

        if ($request->file('avatar')) {
            $validatedData['avatar'] = $request->file('avatar')->store('post-image');
            $validatedData['link_video'] = "-";
            $validatedData['thumbnail'] = "-";
            $validatedData['captions'] = $request->captions;
        }

        if ($request->link) {
            // $validatedData['video'] = $request->file('video')->store('post-video');
            $validatedData['thumbnail'] = $request->file('thumbnails')->store('post-image');
            $validatedData['avatar'] = '-';
            $validatedData['captions'] = '-';
            $validatedData['type'] = 'video';
            $validatedData['link_video'] = $request->link;
        }

        $slug = SlugService::createSlug(ModelsCommunityNews::class, 'slug', $request->title);

        $validatedData['uid_user'] = auth()->user()->id;
        $validatedData['uid_user_2'] = "Not Edited";
        $validatedData['slug'] = $slug;
        $validatedData['tags_id'] = implode(",", $validatedData['tags_id']);
        $taglessBody = strip_tags($validatedData['description']);
        $validatedData['subdesc'] = $taglessBody;
        ModelsCommunityNews::create($validatedData);
        return redirect('/administrator/community-news')->with('success', 'New post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Permission
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", Auth::user()['roles'])
            ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
            ->all();
        $data = array(
            "name" => $rolePermissions
        );
        if (empty($data['name'][28])) {
            throw UnauthorizedException::forPermissions($data);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Permission
        // $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", Auth::user()['roles'])
        //     ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
        //     ->all();
        // $data = array(
        //     "name" => $rolePermissions
        // );
        // if (empty($data['name'][30])) {
        //     throw UnauthorizedException::forPermissions($data);
        // }

        $editid = DB::table('community_news')->where('slug', $id)->get();

        $teg = array_map('intval', explode(',', $editid[0]->tags_id));

        $category = CommunityGroup::where('id', '=', $editid[0]->category_id)->get();

        $idparentarr = array_map('intval', explode(',', $category[0]->id));

        $images = substr($editid[0]->avatar, 11);
        $thumbnail = substr($editid[0]->thumbnail, 11);

        return view('admin.community-edit', [
            'page' => 'Administrator',
            'categories' => CommunityGroup::all(),
            'tags' => TagsCommunity::all(),
            'tagsme' => $teg,
            'contents' => $editid[0],
            'category' => $category,
            'parents' => $idparentarr,
            'images' => $images,
            'thumbnail' => $thumbnail
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
        // if (empty($data['name'][30])) {
        //     throw UnauthorizedException::forPermissions($data);
        // }
        $title = DB::table('community_news')->where('slug', $id)->get();
        $title_data = $title[0]->title;
        $slugs = $title[0]->slug;
        return view('admin.community-title', [
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
    public function update(Request $request, $id)
    {
        // Permission
        // $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", Auth::user()['roles'])
        //     ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
        //     ->all();
        // $data = array(
        //     "name" => $rolePermissions
        // );
        // if (empty($data['name'][30])) {
        //     throw UnauthorizedException::forPermissions($data);
        // }
        if ($request->title) {
            DB::table('community_news')->where('slug', $id)->update([
                'title' => $request->title,
                'slug' =>  SlugService::createSlug(ModelsCommunityNews::class, 'slug', $request->title),
                'uid_user_2' => auth()->user()->username,
                'updated_at' => date('Y-m-d H:i:s')
            ]);
            return redirect('/administrator/community-news')->with('success', 'Title Community News has been updated!');
        }

        // Full edit without title
        $validatedData = $request->validate([
            'avatar' => 'image|file|max:2024',
            'thumbnail' => 'image|file|max:2024'
        ]);

        if ($request->file('avatar')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['avatar'] = $request->file('avatar')->store('post-image');
        }

        if ($request->file('thumbnail')) {
            if ($request->oldThumbnail) {
                Storage::delete($request->oldThumbnail);
            }
            $validatedData['thumbnail'] = $request->file('thumbnail')->store('post-image');
        }
        // $time = strtotime($request->created_at);
        // $newformat = date('Y-m-d', $time);
        // dd($id);
        DB::table('community_news')->where('slug', $id)->update([
            // 'created_at' => $newformat,
            'updated_at' => date('Y-m-d H:i:s'),
            'category_id' => $request->category_id,
            'description' =>  $request->description,
            'subdesc' => strip_tags($request->description),
            'uid_user_2' => auth()->user()->uid_user,
            'tags_id' => implode(",", $request->tags_id),
            'captions' => $request->captions,
            'uid_user_2' => 'Not Edited',
            'link_video' => $request->link_video ? $request->link_video : '-',
            'captions' => $request->captions ? $request->captions : '-'
        ]);
        $validatedData['uid_user'] = auth()->user()->id;

        ModelsCommunityNews::where('slug', $id)
            ->update($validatedData);
        return redirect('/administrator/community-news')->with('success', 'Community News has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Permission
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", Auth::user()['roles'])
            ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
            ->all();
        $data = array(
            "name" => $rolePermissions
        );
        if (empty($data['name'][31])) {
            throw UnauthorizedException::forPermissions($data);
        }
    }
}
