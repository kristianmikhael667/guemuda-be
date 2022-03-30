<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContentApi extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit', 10);
        $title = $request->input('title');
        $slug = $request->input('slug');
        $status = $request->input('status');

        if ($id) {
            $content = Content::find($id);

            if ($content) {
                return ResponseFormatter::success(
                    $content,
                    '
                   Data content retrieved successfully'
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
}
