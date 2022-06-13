<?php

namespace App\Http\Controllers\Admin;

use App\Exports\UsersExport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class AuthorsExport extends Controller
{
    public function export()
    {
        return Excel::download(new UsersExport, 'authors.xlsx');
    }
}
