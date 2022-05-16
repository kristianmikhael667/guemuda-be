<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Community_views;
use App\Models\CommunityNews;
use hisorange\BrowserDetect\Parser as Browser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CommunityNewsApi extends Controller
{
    public function popular()
    {
        $posts = CommunityNews::join("community_views", "community_views.id_community", "=", "community_news.id")
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
            $content = CommunityNews::where('slug', $slug)->first();
            // ContentViews::createViewLog($content);
            $browsers = Browser::browserName();
            $browsers_name = preg_replace('/[0-9]+/', '', $browsers);
            $browsers_names = str_replace(".", "", $browsers_name);

            $platforms = Browser::platformName();
            $platforms_name = preg_replace('/[0-9]+/', '', $platforms);
            $platforms_names = str_replace(".", "", $platforms_name);

            $postsViews = new Community_views();
            $postsViews->id_post = $content->id;
            $postsViews->titleslug = $content->slug;
            $postsViews->url = request()->url() . '?slug=' . $content->slug;
            $postsViews->session_id = '-';
            $postsViews->user_id = Auth::check() == false ? '-' : Auth::id();
            $postsViews->ip = request()->ip();
            $postsViews->agent = $browsers_names;
            $postsViews->platform = $platforms_names;
            $postsViews->device = Browser::deviceFamily();

            Community_views::create([
                'id_community' => $content->id,
                'titleslug' => $content->slug,
                'url' => request()->url() . '?slug=' . $content->slug,
                'session_id' => '-',
                'user_id' => Auth::check() == false ? '-' : Auth::id(),
                'ip'  => request()->ip(),
                'category_ids' => $content->category_id,
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

        $content = CommunityNews::query();

        if ($title) {
            $content->where('title', 'like', '%' . $title . '%');
        }

        return ResponseFormatter::success(
            // DB::table('community_news')->orderBy('created_at', 'desc')->paginate($limit),
            $content = CommunityNews::orderBy('created_at', 'desc')->paginate($limit),

            // $content->paginate($limit),
            'Data Community retrieved successfully'
        );
    }

    public function communities(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit', 9);
        $title = $request->input('title');
        $type = $request->input('type');

        if ($type) {
            $content = CommunityNews::where('type', $type)->get();

            if ($content) {
                return ResponseFormatter::success(
                    $content,
                    'Data Community by Type retrieved successfully'
                );
            } else {
                return ResponseFormatter::error(
                    null,
                    'Data Community is empty'
                );
            }
        }

        $content = CommunityNews::query();

        if ($title) {
            $content->where('title', 'like', '%' . $title . '%');
        }

        return ResponseFormatter::success(
            $content = CommunityNews::orderBy('created_at', 'desc')->paginate($limit)->onEachSide(1),
            'Data Community retrieved successfully'
        );
    }
}
