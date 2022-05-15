<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\VideoArticle;
use App\Models\ViewVideoArticle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use hisorange\BrowserDetect\Parser as Browser;
use Illuminate\Support\Facades\Auth;

class VideoArticleAPI extends Controller
{
    // public function popular()
    // {
    //     $posts = VideoArticle::join("view_video_articles", "view_video_articles.id_article", "=", "video_articles.id")
    //         ->where("view_video_articles.created_at", ">=", date("Y-m-d H:i:s", strtotime('-24 hours', time())))
    //         ->groupBy("video_articles.slug")
    //         ->groupBy("video_articles.slug")
    //         ->groupBy("video_articles.id")
    //         ->groupBy("video_articles.uid_user")
    //         ->groupBy("video_articles.description")
    //         ->groupBy("video_articles.status")
    //         ->groupBy("video_articles.created_at")
    //         ->groupBy("video_articles.updated_at")
    //         ->groupBy("video_articles.title")
    //         ->groupBy("video_articles.subdesc")
    //         ->groupBy("video_articles.thumbnails")
    //         ->groupBy("video_articles.video")
    //         ->groupBy("video_articles.link")
    //         ->groupBy("video_articles.category_id")
    //         ->groupBy("video_articles.tags_id")
    //         ->orderBy(DB::raw('COUNT(video_articles.id)', 'desc'), 'desc')
    //         ->get(array(DB::raw('COUNT(video_articles.id) as total_views'), 'video_articles.*'));
    //     if ($posts) {
    //         return ResponseFormatter::success(
    //             $posts,
    //             'Data Video Article retrieved successfully'
    //         );
    //     }
    // }

    // public function all(Request $request)
    // {
    //     $id = $request->input('id');
    //     $limit = $request->input('limit', 6);
    //     $title = $request->input('title');
    //     $slug = $request->input('slug');

    //     if ($slug) {
    //         $content = VideoArticle::where('slug', $slug)->first();
    //         // ContentViews::createViewLog($content);
    //         $browsers = Browser::browserName();
    //         $browsers_name = preg_replace('/[0-9]+/', '', $browsers);
    //         $browsers_names = str_replace(".", "", $browsers_name);

    //         $platforms = Browser::platformName();
    //         $platforms_name = preg_replace('/[0-9]+/', '', $platforms);
    //         $platforms_names = str_replace(".", "", $platforms_name);

    //         ViewVideoArticle::create([
    //             'id_article' => $content->id,
    //             'titleslug' => $content->slug,
    //             'url' => request()->url() . '?slug=' . $content->slug,
    //             'session_id' => '-',
    //             'user_id' => Auth::check() == false ? '-' : Auth::id(),
    //             'ip'  => request()->ip(),
    //             'agent' => $browsers_names,
    //             'platform' =>  $platforms_names,
    //             'device' => Browser::deviceFamily()
    //         ]);

    //         if ($content) {
    //             return ResponseFormatter::success(
    //                 $content,
    //                 'Data Community by slug retrieved successfully'
    //             );
    //         } else {
    //             return ResponseFormatter::error(
    //                 null,
    //                 'Data Community is empty'
    //             );
    //         }
    //     }

    //     $content = VideoArticle::query();

    //     if ($title) {
    //         $content->where('title', 'like', '%' . $title . '%');
    //     }

    //     if ($content) {
    //         return ResponseFormatter::success(
    //             // DB::table('video_articles')->orderBy('created_at', 'desc')->paginate($limit),
    //             $content = VideoArticle::orderBy('created_at', 'desc')->paginate($limit),

    //             // $content->paginate($limit),
    //             'Data Article retrieved successfully'
    //         );
    //     } else {
    //         return ResponseFormatter::error(
    //             null,
    //             // $content->paginate($limit),
    //             'Data Video Article'
    //         );
    //     }
    // }
}
