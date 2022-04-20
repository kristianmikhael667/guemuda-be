<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Webinar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebinarsApi extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit', 9);
        $title = $request->input('title');
        $slug = $request->input('slug');

        if ($slug) {
            $content = Webinar::where('slug', $slug)->first();

            if ($content) {
                return ResponseFormatter::success(
                    $content,
                    'Data webinars by slug retrieved successfully'
                );
            } else {
                return ResponseFormatter::error(
                    null,
                    'Data Content is empty'
                );
            }
        }

        $content = Webinar::query();

        if ($title) {
            $content->where('title', 'like', '%' . $title . '%');
        }

        return ResponseFormatter::success(
            DB::table('webinars')->orderBy('created_at', 'desc')->paginate($limit),
            // $content->paginate($limit),
            'Data Content retrieved successfully'
        );
    }
}
