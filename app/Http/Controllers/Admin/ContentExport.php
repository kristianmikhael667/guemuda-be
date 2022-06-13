<?php

namespace App\Http\Controllers\Admin;

use App\Exports\ContentExport as ExportsContentExport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class ContentExport extends Controller
{
    public function export()
    {
        return Excel::download(new ExportsContentExport, 'articleperdays.xlsx');
    }
}
