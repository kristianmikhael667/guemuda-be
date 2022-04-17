<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Analytic extends Controller
{
    public function index()
    {
        return view('admin.analytic', [
            'page' => 'Administrator',
        ]);
    }
}
