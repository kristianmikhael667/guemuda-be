<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $top10views = Content::join("content_views", "content_views.id_post", "=", "contents.id")
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
            ->groupBy("contents.link_audio")
            ->groupBy("contents.title")
            ->groupBy("contents.subdesc")
            ->groupBy("contents.image")
            ->groupBy("contents.captions")
            ->groupBy("contents.type")
            ->groupBy("contents.video")
            ->groupBy("contents.category_id")
            ->groupBy("contents.tags_id")
            ->limit(10)
            ->orderBy(DB::raw('COUNT(contents.id)', 'desc'), 'desc')
            ->get(array(DB::raw('COUNT(contents.id) as total_views'), 'contents.*'));

        // Browser top
        $user_info = DB::table('content_views')
            ->select('agent', DB::raw('count(*) as total'))
            ->groupBy('agent')
            ->get();

        if (count($user_info) === 0) {
            $data['label'][] = 0;
            $data['data'][] = 0;
        } else {
            foreach ($user_info as $row) {
                $data['label'][] = $row->agent;
                $data['data'][] = (int) $row->total;
            }
        }

        // Platform top
        $platform = DB::table('content_views')
            ->select('platform', DB::raw('count(*) as total'))
            ->groupBy('platform')
            ->get();

        if (count($platform) === 0) {
            $datas['label'][] = 0;
            $datas['data'][] = 0;
        } else {
            foreach ($platform as $row) {
                $datas['label'][] = $row->platform;
                $datas['data'][] = (int) $row->total;
            }
        }

        // Device top
        $device = DB::table('content_views')
            ->select('device', DB::raw('count(*) as total'))
            ->groupBy('device')
            ->get();

        if (count($device) === 0) {
            $datass['label'][] = 0;
            $datass['data'][] = 0;
        } else {
            foreach ($device as $row) {
                $datass['label'][] = $row->device;
                $datass['data'][] = (int) $row->total;
            }
        }

        $roleuser = Auth::user()->rolesname;
        // Top Authors
        $authors = User::join("contents", "contents.uid_user", "=", "users.id")
            // ->where("users.created_at", ">=", date("Y-m-d H:i:s", strtotime('-24 hours', time())))
            ->groupBy("users.username")
            ->groupBy("users.first_name")
            ->groupBy("users.last_name")
            ->groupBy("users.address")
            ->groupBy("users.city")
            ->groupBy("users.job")
            ->groupBy("users.rolesname")
            ->groupBy("users.bio")
            ->groupBy("users.phone_number")
            ->groupBy("users.date_birth")
            ->groupBy("users.status")
            ->groupBy("users.email")
            ->groupBy("users.email_verified_at")
            ->groupBy("users.password")
            ->groupBy("users.two_factor_secret")
            ->groupBy("users.two_factor_recovery_codes")
            ->groupBy("users.remember_token")
            ->groupBy("users.current_team_id")
            ->groupBy("users.avatar")
            ->groupBy("users.google_id")
            ->groupBy("users.facebook_id")
            ->groupBy("users.roles")
            ->groupBy("users.deleted_at")
            ->groupBy("users.created_at")
            ->groupBy("users.updated_at")
            ->groupBy("users.id")
            ->groupBy("users.userId")
            ->limit(10)
            ->orderBy(DB::raw('COUNT(users.id)', 'desc'), 'desc')
            ->get(array(DB::raw('COUNT(users.id) as tops'), 'users.*'));

        return view('admin.analytic', [
            'page' => $roleuser,
            'viewer' => $top10views,
            'chart_data' => json_encode($data),
            'platform' => json_encode($datas),
            'device' => json_encode($datass),
            'authors' =>  $authors
        ]);
    }
}
