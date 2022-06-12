<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ads;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Exceptions\UnauthorizedException;
use Illuminate\Support\Facades\Storage;

class AdsController extends Controller
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
        if (empty($data['name'][38])) {
            throw UnauthorizedException::forPermissions($data);
        }

        $ads = Ads::latest()->filter(request(['search']))->paginate(10)->withQueryString();
        $roleuser = Auth::user()->rolesname;
        return view('admin.ads', [
            'page' => $roleuser,
            'ads' => $ads,
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
        if (empty($data['name'][39])) {
            throw UnauthorizedException::forPermissions($data);
        }
        $roleuser = Auth::user()->rolesname;
        return view('admin.create-ads', [
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
        if (empty($data['name'][39])) {
            throw UnauthorizedException::forPermissions($data);
        }

        $validatedData = $request->validate([
            'title' => 'required',
            'link' => 'required',
            'type' => 'required',
            'image' => 'image|file|max:2024',
            'desc' => 'required',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-image');
        }

        $validatedData['created_at'] = $request->created_at ? $request->created_at : Carbon::now();
        $validatedData['updated_at'] = $request->created_at ? $request->created_at : Carbon::now();

        Ads::create($validatedData);
        return redirect('/administrator/ads')->with('success', 'New Ads has been added!');
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
        if (empty($data['name'][38])) {
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
        if (empty($data['name'][40])) {
            throw UnauthorizedException::forPermissions($data);
        }
        $adsense = Ads::where('uuid', $id)->first();
        $roleuser = Auth::user()->rolesname;
        $images = substr($adsense->image, 11);

        return view('admin.ads-edit', [
            'page' => $roleuser,
            'ads' => $adsense,
            'images' => $images,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", Auth::user()['roles'])
            ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
            ->all();
        $data = array(
            "name" => $rolePermissions
        );
        if (empty($data['name'][40])) {
            throw UnauthorizedException::forPermissions($data);
        }
        $validatedData = $request->validate([
            'image' => 'image|file|max:2024',
        ]);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('post-image');
        }
        DB::table('ads')->where('uuid', $id)->update([
            'updated_at' => date('Y-m-d H:i:s'),
            'title' =>  $request->title,
            'link' => $request->link,
            'type' => $request->type,
            'desc' => $request->desc,
        ]);

        Ads::where('uuid', $id)
            ->update($validatedData);
        return redirect('/administrator/ads')->with('success', 'Ads has been updated!');
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
        if (empty($data['name'][41])) {
            throw UnauthorizedException::forPermissions($data);
        }

        $ads = DB::table('ads')->where('uuid', $id)->first();
        if ($ads->image) {
            Storage::delete($ads->image);
        }
        DB::table('ads')->where('uuid', $id)->delete();
        return redirect('/administrator/ads')->with('success', 'Ads has been deleted!');
    }
}
