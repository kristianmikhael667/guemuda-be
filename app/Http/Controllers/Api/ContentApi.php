<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Content;
use App\Models\ContentViews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContentApi extends Controller
{
    public function popular()
    {
        $posts = Content::join("content_views", "content_views.id_post", "=", "contents.id")
            ->where("content_views.created_at", ">=", date("Y-m-d H:i:s", strtotime('-24 hours', time())))
            ->groupBy("contents.slug")
            ->groupBy("contents.id")
            ->groupBy("contents.uid_user")
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
            ->orderBy(DB::raw('COUNT(contents.id)', 'desc'), 'desc')
            ->get(array(DB::raw('COUNT(contents.id) as total_views'), 'contents.*'));
        if ($posts) {
            return ResponseFormatter::success(
                $posts,
                'Data Content retrieved successfully'
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
            $content = Content::where('slug', $slug)->first();
            ContentViews::createViewLog($content);

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

        $content = Content::query();

        if ($title) {
            $content->where('title', 'like', '%' . $title . '%');
        }

        return ResponseFormatter::success(
            DB::table('contents')->orderBy('created_at', 'desc')->paginate($limit),
            // $content->paginate($limit),
            'Data Content retrieved successfully'
        );
    }

    public function categories(Request $request)
    {
        // var_dump($request->as);
        if ($request->category) {
            $content = Content::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString();
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

    public function tags(Request $request)
    {
        $category = DB::table('tags')->orderBy('created_at', 'desc')->get();
        return response()->json([
            'success' => 'Data is successfully added',
            'data' => $category
        ]);
    }
}
