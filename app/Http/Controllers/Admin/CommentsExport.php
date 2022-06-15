<?php

namespace App\Http\Controllers\Admin;

use App\Exports\CommentExport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class CommentsExport extends Controller
{
    public function export()
    {
        return Excel::download(new CommentExport, 'topcomments.xlsx');
    }
}
