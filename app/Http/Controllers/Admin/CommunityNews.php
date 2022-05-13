<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryCommunity;
use App\Models\CommunityNews as ModelsCommunityNews;
use App\Models\TagsCommunity;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CommunityNews extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->roles === 'common.superadmin') {
            $community = ModelsCommunityNews::latest()->with(['category', 'user'])->filter(request(['search', 'user', 'category']))->paginate(10)->withQueryString();
            $kinanda = ModelsCommunityNews::join("community_views", "community_views.id_community", "=", "community_news.id")
                ->where("community_views.created_at", ">=", date("Y-m-d H:i:s", strtotime('-24 hours', time())))
                ->groupBy("community_news.slug")
                ->groupBy("community_news.id")
                ->groupBy("community_news.uid_user")
                ->groupBy("community_news.uid_user_2")
                ->groupBy("community_news.description")
                ->groupBy("community_news.status")
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
        }else {
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
        return view('admin.create-community-news', [
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
            'avatar' => 'image|file|max:1024',
            'description' => 'required',
        ]);

        if ($request->file('avatar')) {
            $validatedData['avatar'] = $request->file('avatar')->store('post-image');
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
