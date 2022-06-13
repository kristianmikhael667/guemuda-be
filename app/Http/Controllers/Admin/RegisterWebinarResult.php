<?php

namespace App\Http\Controllers\Admin;

use App\Exports\RegisterWebinarExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterWebinarResult extends Controller
{
    public function registerWebinarExport($webinar_slug)
    {
        return Excel::download(new RegisterWebinarExport($webinar_slug), 'data-pendaftar-' . $webinar_slug . '.xlsx');
    }
}
