<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Exceptions\UnauthorizedException;

class MediaController extends Controller
{
    public function index()
    {
        // Permission
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", Auth::user()['roles'])
            ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
            ->all();
        $data = array(
            "name" => $rolePermissions
        );
        if (empty($data['name'][18])) {
            throw UnauthorizedException::forPermissions($data);
        }
        $path = storage_path('app/post-image');
        $files = scandir($path);
        $roleuser = Auth::user()->rolesname;
        return view('admin/media', [
            'page' => $roleuser,
            'files' => $files
        ]);
    }
}
