<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\CommunityGroup;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Spatie\Permission\Exceptions\UnauthorizedException;

class CommunityGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", Auth::user()['roles'])
            ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
            ->all();
        $data = array(
            "name" => $rolePermissions
        );
        if (empty($data['name'][34])) {
            throw UnauthorizedException::forPermissions($data);
        }
        $roleuser = Auth::user()->rolesname;
        $communitygroup = CommunityGroup::latest()->filter(request(['search']))->get();
        return view('admin.community-group', [
            'page' => $roleuser,
            'groups' => $communitygroup
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", Auth::user()['roles'])
            ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
            ->all();
        $data = array(
            "name" => $rolePermissions
        );
        if (empty($data['name'][35])) {
            throw UnauthorizedException::forPermissions($data);
        }
        $roleuser = Auth::user()->rolesname;

        return view('admin.create-community-group', [
            'page' => $roleuser,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", Auth::user()['roles'])
            ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
            ->all();
        $data = array(
            "name" => $rolePermissions
        );
        if (empty($data['name'][35])) {
            throw UnauthorizedException::forPermissions($data);
        }

        $validatedData = $request->validate([
            'namegroup' => 'required',
            'profile' => 'required',
            'linkwa' => 'required',
            'linktele' => 'required',
            'linktwit' => 'required',
            'linkig' => 'required',
            'desc' => 'required',
        ]);

        if ($request->file('profile')) {
            $validatedData['profile'] = $request->file('profile')->store('post-image');
        }

        $slug = SlugService::createSlug(CommunityGroup::class, 'slug', $request->namegroup);
        $validatedData['slug'] = $slug;
        CommunityGroup::create($validatedData);
        return redirect('/administrator/community-group')->with('success', 'New Community Group has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", Auth::user()['roles'])
            ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
            ->all();
        $data = array(
            "name" => $rolePermissions
        );
        if (empty($data['name'][34])) {
            throw UnauthorizedException::forPermissions($data);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", Auth::user()['roles'])
            ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
            ->all();
        $data = array(
            "name" => $rolePermissions
        );
        if (empty($data['name'][36])) {
            throw UnauthorizedException::forPermissions($data);
        }
        $roleuser = Auth::user()->rolesname;
        $post = CommunityGroup::where('slug', $id)->firstOrFail();
        $images = substr($post->profile, 11);
        return view('admin.comunitygroup-edit', [
            'communities' => $post,
            'images' => $images,
            'page' => $roleuser
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $post)
    {
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", Auth::user()['roles'])
            ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
            ->all();
        $data = array(
            "name" => $rolePermissions
        );
        if (empty($data['name'][36])) {
            throw UnauthorizedException::forPermissions($data);
        }

        $id = CommunityGroup::where('slug', $post)->firstOrFail();

        $rules = [
            'namegroup' => 'required|max:255',
            'linkwa' => 'required',
            'linktele' => 'required',
            'linktwit' => 'required',
            'linkig' => 'required',
            'desc' => 'required',
            'profile' => 'image|file|max:1024',
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('profile')) {
            if ($request->profile) {
                Storage::delete($request->profile);
            }
            $validatedData['profile'] = $request->file('profile')->store('post-image');
        }

        if ($request->namegroup) {
            $validatedData['slug'] = SlugService::createSlug(CommunityGroup::class, 'slug', $request->namegroup);
        }
        CommunityGroup::where('slug', $id->slug)
            ->update($validatedData);
        return redirect('/administrator/communitiesgroup')->with('success', 'Post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", Auth::user()['roles'])
            ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
            ->all();
        $data = array(
            "name" => $rolePermissions
        );
        if (empty($data['name'][37])) {
            throw UnauthorizedException::forPermissions($data);
        }
    }
}
