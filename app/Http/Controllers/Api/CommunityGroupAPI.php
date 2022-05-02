<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\CommunityGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommunityGroupAPI extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit', 6);
        $title = $request->input('title');
        $slug = $request->input('slug');

        if ($slug) {
            $content = CommunityGroup::where('slug', $slug)->first();
            
            if ($content) {
                return ResponseFormatter::success(
                    $content,
                    'Data Community Group by slug retrieved successfully'
                );
            } else {
                return ResponseFormatter::error(
                    null,
                    'Data Community Group is empty'
                );
            }
        }

        $content = CommunityGroup::query();

        if ($title) {
            $content->where('title', 'like', '%' . $title . '%');
        }

        return ResponseFormatter::success(
            DB::table('community_groups')->orderBy('created_at', 'desc')->paginate($limit),
            // $content->paginate($limit),
            'Data Community Group retrieved successfully'
        );
    }
}
