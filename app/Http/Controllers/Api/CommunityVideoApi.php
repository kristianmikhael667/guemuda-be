<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\CommunityNews;
use App\Models\VideoCommunity;
use App\Models\VideoCommunityViews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use hisorange\BrowserDetect\Parser as Browser;
use Illuminate\Support\Facades\Auth;

class CommunityVideoApi extends Controller
{
    public function popular()
    {
        $posts = VideoCommunity::join("video_community_views", "video_community_views.id_community", "=", "video_communities.id")
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
        if ($posts) {
            return ResponseFormatter::success(
                $posts,
                'Data Community News retrieved successfully'
            );
        }
    }

    public function all(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit', 6);
        $title = $request->input('title');
        $slug = $request->input('slug');

        if ($slug) {
            $content = VideoCommunity::where('slug', $slug)->first();
            // ContentViews::createViewLog($content);
            $browsers = Browser::browserName();
            $browsers_name = preg_replace('/[0-9]+/', '', $browsers);
            $browsers_names = str_replace(".", "", $browsers_name);

            $platforms = Browser::platformName();
            $platforms_name = preg_replace('/[0-9]+/', '', $platforms);
            $platforms_names = str_replace(".", "", $platforms_name);

            VideoCommunityViews::create([
                'id_community' => $content->id,
                'titleslug' => $content->slug,
                'url' => request()->url() . '?slug=' . $content->slug,
                'session_id' => '-',
                'user_id' => Auth::check() == false ? '-' : Auth::id(),
                'ip'  => request()->ip(),
                'agent' => $browsers_names,
                'platform' =>  $platforms_names,
                'device' => Browser::deviceFamily()
            ]);

            if ($content) {
                return ResponseFormatter::success(
                    $content,
                    'Data Community by slug retrieved successfully'
                );
            } else {
                return ResponseFormatter::error(
                    null,
                    'Data Community is empty'
                );
            }
        }

        $content = VideoCommunity::query();

        if ($title) {
            $content->where('title', 'like', '%' . $title . '%');
        }

        return ResponseFormatter::success(
            // DB::table('video_communities')->orderBy('created_at', 'desc')->paginate($limit),
            $content = VideoCommunity::orderBy('created_at', 'desc')->paginate($limit),

            // $content->paginate($limit),
            'Data Community retrieved successfully'
        );
    }

    public function categories(Request $request)
    {
        // var_dump($request->as);
        if ($request->category) {
            $content = CommunityNews::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString();
            if ($content) {
                return ResponseFormatter::success(
                    $content,
                    'Data content by slug retrieved successfully'
                );
            } else {
                return ResponseFormatter::error(
                    null,
                    'Data Content is empty'
                );
            }
        }
    }
}
