<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Content;
use App\Models\ContentViews;
use App\Models\LikeContent; //forgot
use App\Models\Tags;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use hisorange\BrowserDetect\Parser as Browser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class ContentApi extends Controller
{
    public function popular_category()
    {
        $posts = Content::join("content_views", "content_views.id_post", "=", "contents.id")
            ->whereHas('category', function ($q) {
                $q->where('parent', '=', 1)->orWhere('parent', '=', 2)->orWhere('parent', '=', 3)->orWhere('parent', '=', 4)->orWhere('parent', '=', 5);
            })
            ->groupBy("contents.slug")
            ->groupBy("contents.id")
            ->groupBy("contents.uid_user")
            ->groupBy("contents.uid_user_2")
            ->groupBy("contents.thumbnail")
            ->groupBy("contents.description")
            ->groupBy("contents.link")
            ->groupBy("contents.captions")
            ->groupBy("contents.type")
            ->groupBy("contents.link_audio")
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
        } else {
            return ResponseFormatter::error(
                null,
                'No Content'
            );
        }
    }

    public function newstoday()
    {
        $limit = 6;
        $posts = Content::whereDate('created_at', Carbon::today())->orderBy('created_at', 'desc')->paginate($limit)->onEachSide(1);
        if ($posts) {
            return ResponseFormatter::success(
                $posts,
                'Data Content Today retrieved successfully'
            );
        }
    }

    public function popular()
    {
        $posts = Content::join("content_views", "content_views.id_post", "=", "contents.id")
            ->where("content_views.created_at", ">=", date("Y-m-d H:i:s", strtotime('-24 hours', time())))
            ->groupBy("contents.slug")
            ->groupBy("contents.id")
            ->groupBy("contents.uid_user")
            ->groupBy("contents.uid_user_2")
            ->groupBy("contents.thumbnail")
            ->groupBy("contents.description")
            ->groupBy("contents.link")
            ->groupBy("contents.link_audio")
            ->groupBy("contents.captions")
            ->groupBy("contents.type")
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

    public function ceklike(Request $request)
    {
        $slug = $request->input('slug');
        if ($slug) {
            $content = Content::where('slug', $slug)->first();
            $like = LikeContent::where('id_post', $content->id)->where('id_users', auth()->user()->id)->count();
            if ($like) {
                return ResponseFormatter::success(
                    $like,
                    'Liked'
                );
            } else {
                return ResponseFormatter::success(
                    $like,
                    'Null'
                );
            }
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
            $like = LikeContent::where('id_post', $content->id)->count();

            if (Browser::isChrome() || Browser::isOpera() || Browser::isSafari() || Browser::isFirefox() || Browser::isEdge()) {
                $browsers = Browser::browserName();
                $browsers_name = preg_replace('/[0-9]+/', '', $browsers);
                $browsers_names = str_replace(".", "", $browsers_name);
            } else {
                $browsers_names = "Others";
            }

            if (Browser::isDesktop() || Browser::isMobile() || Browser::isTablet()) {
                $platforms = Browser::deviceType();
                $platforms_name = preg_replace('/[0-9]+/', '', $platforms);
                $platforms_names = str_replace(".", "", $platforms_name);
            } else {
                $platforms_names = "Others";
            }

            if (Browser::deviceFamily() == "Apple" || Browser::deviceFamily() == "Samsung" || Browser::deviceFamily() == "Xiaomi" || Browser::deviceFamily() == "OPPO" || Browser::deviceFamily() == "Vivo") {
                $device = Browser::deviceFamily();
                $device_name = preg_replace('/[0-9]+/', '', $device);
                $device_names = str_replace(".", "", $device_name);
            } else {
                $device_names = "Others";
            }

            ContentViews::create([
                'id_post' => $content->id,
                'titleslug' => $content->slug,
                'url' => request()->url() . '?slug=' . $content->slug,
                'session_id' => '-',
                'user_id' => Auth::check() == false ? '-' : Auth::id(),
                'ip'  => request()->ip(),
                'category_ids' => $content->category_id,
                'agent' => $browsers_names,
                'platform' =>  $platforms_names,
                'device' => $device_names
            ]);

            if ($content) {
                return ResponseFormatter::like( //ren
                    $content,
                    'Data content by slug retrieved successfully',
                    $like //kren
                );
            } else {
                return ResponseFormatter::error(
                    null,
                    'Data Content is empty'
                );
            }
        }

        if ($title) {
            $content = DB::table('contents')
                ->join('users', 'contents.uid_user', '=', 'users.id')
                ->join('categories', 'contents.category_id', '=', 'categories.id')
                ->select('users.username', 'contents.title', 'categories.name', 'contents.created_at', 'contents.slug', 'contents.subdesc', 'contents.image')
                ->when(
                    $request->input('title'),
                    function ($query) use ($request) {
                        $query->where('title', 'like', '%' . $request->input('title') . '%');
                    }
                )->paginate(6);

            return ResponseFormatter::success( //ren
                $content,
                'Result Search by Title retrieved successfully',
            );
        }

        return ResponseFormatter::success(
            // DB::table('contents')->orderBy('created_at', 'desc')->paginate($limit)->onEachSide(1),
            $content = Content::orderBy('created_at', 'desc')->paginate($limit)->onEachSide(1),

            // $content->paginate($limit),
            'Data Content retrieved successfully'
        );
    }

    public function categories(Request $request)
    {
        if ($request->category) {
            $categoris = Category::where('uuid', $request->category)->get();
            $content = Content::latest()->whereHas('category', function ($q) use ($categoris) {
                $q->where('parent', $categoris[0]->id);
            })->get();

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

    public function subcategory(Request $request) //ini
    {
        if ($request->category) {
            $content = Content::latest()->filter(request(['search', 'category', 'author']))->paginate(4)->withQueryString();
            if ($content) {
                return ResponseFormatter::success(
                    $content,
                    'Data category by slug retrieved successfully'
                );
            } else {
                return ResponseFormatter::error(
                    null,
                    'Data category is empty'
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
            $content = Content::where('type', $type)->orderBy('created_at', 'desc')->paginate(6)->onEachSide(1);
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
            $content = Content::orderBy('created_at', 'desc')->paginate($limit)->onEachSide(1),
            'Data Content retrieved successfully'
        );
    }

    public function popularnews(Request $request)
    {
        // gg
        $posts = Content::join("like_contents", "like_contents.id_post", "=", "contents.id")
            ->groupBy("contents.slug")
            ->groupBy("contents.id")
            ->groupBy("contents.uid_user")
            ->groupBy("contents.uid_user_2")
            ->groupBy("contents.thumbnail")
            ->groupBy("contents.description")
            ->groupBy("contents.link")
            ->groupBy("contents.captions")
            ->groupBy("contents.type")
            ->groupBy("contents.link_audio")
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
            ->get(array(DB::raw('COUNT(contents.id) as total_like'), 'contents.*')); //gg

        if ($posts) {
            return ResponseFormatter::success(
                $posts,
                'Data Like Content successfully'
            );
        } else {
            return ResponseFormatter::error(
                null,
                'Data Like Content Empty'
            );
        }
    }

    // like
    public function likecontent(Request $request)
    {
        $slug = $request->input('slug');
        if ($slug) {
            $content = Content::where('slug', $slug)->first();
            $like = LikeContent::where('id_post', $content->id)->where('id_users', auth()->user()->id)->first();

            if ($like) {
                return ResponseFormatter::success(
                    null,
                    'Liked'
                );
            } else {
                $likes = LikeContent::create([
                    'id_post' => $content->id,
                    'id_users' => auth()->user()->id
                ]);
                return ResponseFormatter::success(
                    $likes,
                    'Like'
                );
            }
        }
    }
}
