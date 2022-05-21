<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\PremiumContent;
use App\Models\PremiumView;
use Carbon\Carbon;
use Illuminate\Http\Request;
use hisorange\BrowserDetect\Parser as Browser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PremiumContentAPI extends Controller
{
    public function popular_cat(Request $request)
    {
        $category_ids = $request->input('category_id');
        $posts = PremiumContent::join("content_views", "content_views.id_post", "=", "contents.id")
            ->where("content_views.category_ids", "=", $category_ids)
            ->groupBy("contents.slug")
            ->groupBy("contents.id")
            ->groupBy("contents.uid_user")
            ->groupBy("contents.uid_user_2")
            ->groupBy("contents.thumbnail")
            ->groupBy("contents.description")
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
            ->limit(10)
            ->orderBy(DB::raw('COUNT(contents.id)', 'desc'), 'desc')
            ->get(array(DB::raw('COUNT(contents.id) as total_views'), 'contents.*'));
        if ($posts) {
            return ResponseFormatter::success(
                $posts,
                'Data Content retrieved successfully'
            );
        }
    }

    public function newstoday()
    {
        $limit = 6;
        $posts = PremiumContent::whereDate('created_at', Carbon::today())->orderBy('created_at', 'desc')->paginate($limit);
        if ($posts) {
            return ResponseFormatter::success(
                $posts,
                'Data Content Today retrieved successfully'
            );
        }
    }

    public function popular()
    {
        // Change
        $posts = PremiumContent::join("premium_views", "premium_views.id_post", "=", "premium_contents.id")
            ->where("premium_views.created_at", ">=", date("Y-m-d H:i:s", strtotime('-24 hours', time())))
            ->groupBy("premium_contents.id")
            ->groupBy("premium_contents.title")
            ->groupBy("premium_contents.captions")
            ->groupBy("premium_contents.slug")
            ->groupBy("premium_contents.uid_user")
            ->groupBy("premium_contents.uid_user_2")
            ->groupBy("premium_contents.image")
            ->groupBy("premium_contents.thumbnail")
            ->groupBy("premium_contents.category_id")
            ->groupBy("premium_contents.tags_id")
            ->groupBy("premium_contents.subdesc")
            ->groupBy("premium_contents.description")
            ->groupBy("premium_contents.link_audio")
            ->groupBy("premium_contents.link")
            ->groupBy("premium_contents.status")
            ->groupBy("premium_contents.created_at")
            ->groupBy("premium_contents.updated_at")
            ->groupBy("premium_contents.type")
            ->limit(6)
            ->orderBy(DB::raw('COUNT(premium_contents.id)', 'desc'), 'desc')
            ->get(array(DB::raw('COUNT(premium_contents.id) as total_views'), 'premium_contents.*'));
        if ($posts) {
            return ResponseFormatter::success(
                $posts,
                'Data Premium Content retrieved successfully'
            );
        } else {
            return ResponseFormatter::error(
                null,
                'Data Premium Content not found'
            );
        }
    }

    public function all(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit', 9);
        $title = $request->input('title');
        $slug = $request->input('slug');

        if ($slug) {
            $content = PremiumContent::where('slug', $slug)->first();
            // ContentViews::createViewLog($content);
            $browsers = Browser::browserName();
            $browsers_name = preg_replace('/[0-9]+/', '', $browsers);
            $browsers_names = str_replace(".", "", $browsers_name);

            $platforms = Browser::platformName();
            $platforms_name = preg_replace('/[0-9]+/', '', $platforms);
            $platforms_names = str_replace(".", "", $platforms_name);

            PremiumView::create([
                'id_post' => $content->id,
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
                    'Data Premium Content by slug retrieved successfully'
                );
            } else {
                return ResponseFormatter::error(
                    null,
                    'Data Premium Content is empty'
                );
            }
        }

        $content = PremiumContent::query();

        if ($title) {
            $content->where('title', 'like', '%' . $title . '%');
        }

        return ResponseFormatter::success(
            // DB::table('contents')->orderBy('created_at', 'desc')->paginate($limit)->onEachSide(1),
            $content = PremiumContent::orderBy('created_at', 'desc')->paginate($limit)->onEachSide(1),

            // $content->paginate($limit),
            'Data Premium Content retrieved successfully'
        );
    }

    public function categories(Request $request)
    {
        // var_dump($request->as);
        if ($request->category) {
            $content = PremiumContent::latest()->filter(request(['search', 'category', 'author']))->paginate(5)->withQueryString();

            if ($content) {
                return ResponseFormatter::success(
                    $content,
                    'Data Category Premium Content by slug retrieved successfully'
                );
            } else {
                return ResponseFormatter::error(
                    null,
                    'Data Premium Content is empty'
                );
            }
        }
    }

    public function tags(Request $request)
    {
        $tags = DB::table('tags')->orderBy('created_at', 'desc')->get();
        return response()->json([
            'success' => 'Data is successfully added',
            'data' => $tags
        ]);
    }

    public function article(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit', 6);
        $title = $request->input('title');
        $type = $request->input('type');

        if ($type) {
            $content = PremiumContent::where('type', $type)->orderBy('created_at', 'desc')->paginate($limit);

            if ($content) {
                return ResponseFormatter::success(
                    $content,
                    'Data Premium content by slug retrieved successfully'
                );
            } else {
                return ResponseFormatter::error(
                    null,
                    'Data Premium Content is empty'
                );
            }
        }

        $content = PremiumContent::query();

        if ($title) {
            $content->where('title', 'like', '%' . $title . '%');
        }

        return ResponseFormatter::success(
            $content = PremiumContent::orderBy('created_at', 'desc')->paginate($limit)->onEachSide(1),
            'Data Content retrieved successfully'
        );
    }

    // lupa
    public function popularnews(Request $request)
    {
        $posts = PremiumContent::join("content_views", "content_views.id_post", "=", "contents.id")
            ->where("content_views.created_at", ">=", date("Y-m-d H:i:s", strtotime('-24 hours', time())))
            ->groupBy("contents.slug")
            ->groupBy("contents.id")
            ->groupBy("contents.uid_user")
            ->groupBy("contents.uid_user_2")
            ->groupBy("contents.thumbnail")
            ->groupBy("contents.description")
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
            ->limit(6)
            ->orderBy(DB::raw('COUNT(contents.id)', 'desc'), 'desc')
            ->get(array(DB::raw('COUNT(contents.id) as total_views'), 'contents.*'));
        if ($posts) {
            return ResponseFormatter::success(
                $posts,
                'Data Content retrieved successfully'
            );
        }
    }
}
