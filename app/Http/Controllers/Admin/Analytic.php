<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Analytic extends Controller
{
    public function index()
    {
        $top10views = Content::join("content_views", "content_views.id_post", "=", "contents.id")
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

        // Browser top
        $user_info = DB::table('content_views')
            ->select('agent', DB::raw('count(*) as total'))
            ->groupBy('agent')
            ->get();

        foreach ($user_info as $row) {
            $data['label'][] = $row->agent;
            $data['data'][] = (int) $row->total;
        }

        // Platform top
        $platform = DB::table('content_views')
            ->select('platform', DB::raw('count(*) as total'))
            ->groupBy('platform')
            ->get();

        foreach ($platform as $row) {
            $datas['label'][] = $row->platform;
            $datas['data'][] = (int) $row->total;
        }

        // Device top
        $device = DB::table('content_views')
            ->select('device', DB::raw('count(*) as total'))
            ->groupBy('device')
            ->get();

        foreach ($device as $row) {
            $datass['label'][] = $row->device;
            $datass['data'][] = (int) $row->total;
        }

        return view('admin.analytic', [
            'page' => 'Administrator',
            'viewer' => $top10views,
            'chart_data' => json_encode($data),
            'platform' => json_encode($datas),
            'device' => json_encode($datass)
        ]);
    }
}
