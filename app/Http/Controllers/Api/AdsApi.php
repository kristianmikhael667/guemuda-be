<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Ads as ModelsAds;
use Illuminate\Http\Request;

class AdsApi extends Controller
{
    public function getads(Request $request)
    {
        $limit = $request->input('limit', 5);
        $title = $request->input('title');
        $type = $request->input('type');

        if ($type) {
            $content = ModelsAds::where('type', $type)->orderBy('created_at', 'desc')->paginate(6)->onEachSide(1);
            if ($content) {
                return ResponseFormatter::success(
                    $content,
                    'Data Ads by type retrieved successfully'
                );
            } else {
                return ResponseFormatter::error(
                    null,
                    'Data Ads is empty'
                );
            }
        }

        $content = ModelsAds::query();

        if ($title) {
            $content->where('title', 'like', '%' . $title . '%');
        }

        return ResponseFormatter::success(
            $content = ModelsAds::orderBy('created_at', 'desc')->paginate($limit)->onEachSide(1),
            'Data Ads retrieved successfully'
        );
    }
}
