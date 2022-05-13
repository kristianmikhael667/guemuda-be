<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tags;
use App\Models\VideoArticle;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VideoArticleController extends Controller
{
    public function index()
    {
        if(Auth::user()->roles === 'common.superadmin'){
            $video = VideoArticle::latest()->with(['category', 'user'])->paginate(10)->withQueryString();
            $kinanda = VideoArticle::join("view_video_articles", "view_video_articles.id_article", "=", "video_articles.id")
            ->where("view_video_articles.created_at", ">=", date("Y-m-d H:i:s", strtotime('-24 hours', time())))
            ->groupBy("video_articles.slug")
            ->groupBy("video_articles.id")
            ->groupBy("video_articles.uid_user")
            ->groupBy("video_articles.description")
            ->groupBy("video_articles.status")
            ->groupBy("video_articles.created_at")
            ->groupBy("video_articles.updated_at")
            ->groupBy("video_articles.title")
            ->groupBy("video_articles.subdesc")
            ->groupBy("video_articles.thumbnails")
            ->groupBy("video_articles.video")
            ->groupBy("video_articles.link")
            ->groupBy("video_articles.category_id")
            ->groupBy("video_articles.tags_id")
            ->orderBy(DB::raw('COUNT(video_articles.id)', 'desc'), 'desc')
            ->get(array(DB::raw('COUNT(video_articles.id) as total_views'), 'video_articles.*'));
            $taggers = Tags::all();
            return view('admin.video-article',[
                'page' => 'Administrator',
                'videos' => $video,
                'views' => $kinanda,
                'tages' => $taggers
            ]);
        }else{
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
        return view('admin.create-video-article', [
            'page' => 'Administrator',
            'tags' => Tags::all(),
            'categories' => Category::where("parent", 0)->get(),
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
            'thumbnails' => 'image|file|max:2024',
            'description' => 'required',
            'link' => 'required'
            // 'video' => 'mimes:mp4,x-flv,x-mpegURL,MP2T,3gpp,quicktime,x-msvideo,x-ms-wmv',
        ]);

        if ($request->file('thumbnails')) {
            $validatedData['thumbnails'] = $request->file('thumbnails')->store('post-image');
            $validatedData['video'] = '-';
        }

        $slug = SlugService::createSlug(VideoArticle::class, 'slug', $request->title);

        $validatedData['uid_user'] = auth()->user()->id;
        // $validatedData['uid_user_2'] = "Not Edited";
        $validatedData['slug'] = $slug;
        $validatedData['tags_id'] = implode(",", $validatedData['tags_id']);
        $taglessBody = strip_tags($validatedData['description']);
        $validatedData['subdesc'] = $taglessBody;
        VideoArticle::create($validatedData);
        return redirect('/administrator/video-article')->with('success', 'New post has been added!');
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
