<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class MediaController extends Controller
{
    public function index()
    {
        $path = storage_path('app/post-image');
        $files = scandir($path);
        return view('admin/media', [
            'page' => 'Administrator',
            'files' => $files
        ]);
    }
}
