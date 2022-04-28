<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryCommunity;
use App\Models\TagsCommunity;
use App\Models\VideoCommunity;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CommunityVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->roles === 'common.admin') {
            $community = VideoCommunity::latest()->paginate(10)->withQueryString();
            $kinanda = VideoCommunity::join("video_community_views", "video_community_views.id_community", "=", "video_communities.id")
                ->where("video_community_views.created_at", ">=", date("Y-m-d H:i:s", strtotime('-24 hours', time())))
                ->groupBy("video_communities.slug")
                ->groupBy("video_communities.id")
                ->groupBy("video_communities.uid_user")
                ->groupBy("video_communities.uid_user_2")
                ->groupBy("video_communities.description")
                ->groupBy("video_communities.status")
                ->groupBy("video_communities.created_at")
                ->groupBy("video_communities.updated_at")
                ->groupBy("video_communities.title")
                ->groupBy("video_communities.subdesc")
                ->groupBy("video_communities.thumbnails")
                ->groupBy("video_communities.video")
                ->groupBy("video_communities.link")
                ->groupBy("video_communities.category_id")
                ->groupBy("video_communities.tags_id")
                ->orderBy(DB::raw('COUNT(video_communities.id)', 'desc'), 'desc')
                ->get(array(DB::raw('COUNT(video_communities.id) as total_views'), 'video_communities.*'));
            $taggers = TagsCommunity::all();
            return view('admin.community-video', [
                'page' => 'Administrator',
                'communities' => $community,
                'views' => $kinanda,
                'tages' => $taggers
            ]);
        } else {
            return redirect()->back();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create-community-video', [
            'page' => 'Administrator',
            'tags' => TagsCommunity::all(),
            'categories' => CategoryCommunity::all()
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
        $validatedData = $request->validate([
            'title' => 'required',
            'tags_id' => 'required',
            'category_id' => 'required',
            'thumbnails' => 'image|file|max:1024',
            'description' => 'required',
            'link' => 'required'
            // 'video' => 'mimes:mp4,x-flv,x-mpegURL,MP2T,3gpp,quicktime,x-msvideo,x-ms-wmv',
        ]);

        if ($request->file('thumbnails')) {
            $validatedData['thumbnails'] = $request->file('thumbnails')->store('post-image');
            $validatedData['video'] = '-';
        }

        $slug = SlugService::createSlug(VideoCommunity::class, 'slug', $request->title);

        $validatedData['uid_user'] = auth()->user()->id;
        $validatedData['uid_user_2'] = "Not Edited";
        $validatedData['slug'] = $slug;
        $validatedData['tags_id'] = implode(",", $validatedData['tags_id']);
        $taglessBody = strip_tags($validatedData['description']);
        $validatedData['subdesc'] = $taglessBody;
        VideoCommunity::create($validatedData);
        return redirect('/administrator/community-video')->with('success', 'New post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
