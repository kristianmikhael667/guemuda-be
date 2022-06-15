<?php

namespace App\Http\Controllers\Admin;

use App\Exports\LikeExport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class LikesExport extends Controller
{
    public function export()
    {
        return Excel::download(new LikeExport, 'toplike.xlsx');
    }
}
