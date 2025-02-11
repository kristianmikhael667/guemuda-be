<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permission as ModelsPermission;
use App\Models\Role as ModelsRole;
use Spatie\Permission\Exceptions\UnauthorizedException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Hashids\Hashids;

class RoleController extends Controller
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
        if (empty($data['name'][1])) {
            throw UnauthorizedException::forPermissions($data);
        }

        $roles = ModelsRole::orderBy('id', 'DESC')->filter(request(['search']))->paginate(5);
        $hashids = new Hashids('', 10);
        $roleuser = Auth::user()->rolesname;

        return view('admin.role', [
            'page' => $roleuser,
            'roles' => $roles,
            'hashids' => $hashids
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Permission
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", Auth::user()['roles'])
            ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
            ->all();
        $data = array(
            "name" => $rolePermissions
        );
        if (empty($data['name'][2])) {
            throw UnauthorizedException::forPermissions($data);
        }
        $roleuser = Auth::user()->rolesname;

        $permission = ModelsPermission::get();
        return view('admin.create-roles', [
            'page' => $roleuser,
            'permissions' => $permission
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
        // Permission
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", Auth::user()['roles'])
            ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
            ->all();
        $data = array(
            "name" => $rolePermissions
        );
        if (empty($data['name'][2])) {
            throw UnauthorizedException::forPermissions($data);
        }

        $this->validate($request, [
            'name' => 'required|unique:roles,name',
            'permission' => 'required',
        ]);

        $role = ModelsRole::create(['name' => $request->input('name')]);
        $role->syncPermissions($request->input('permission'));
        $roleuser = Auth::user()->rolesname;

        return view('admin.role', [
            'page' => $roleuser,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Permission
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", Auth::user()['roles'])
            ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
            ->all();
        $data = array(
            "name" => $rolePermissions
        );
        if (empty($data['name'][1])) {
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
        // Permission
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", Auth::user()['roles'])
            ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
            ->all();
        $data = array(
            "name" => $rolePermissions
        );
        if (empty($data['name'][3])) {
            throw UnauthorizedException::forPermissions($data);
        }
        $hashids = new Hashids('', 10);
        $id_decode = $hashids->decode($id);
        $role = ModelsRole::find($id_decode[0]);
        $permission = ModelsPermission::get();
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", $id_decode[0])
            ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
            ->all();
        $roleuser = Auth::user()->rolesname;

        return view('admin.role-edit', [
            'page' => $roleuser,
            'role' => $role,
            'permission' => $permission,
            'rolePermissions' => $rolePermissions
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
        // Permission
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", Auth::user()['roles'])
            ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
            ->all();
        $data = array(
            "name" => $rolePermissions
        );
        if (empty($data['name'][3])) {
            throw UnauthorizedException::forPermissions($data);
        }
        $this->validate($request, [
            'name' => 'required',
            'permission' => 'required',
        ]);
        // $hashids = new Hashids('', 10);
        // $id_decode = $hashids->decode($id);
        // dd($id_decode);
        $role = Role::find($id);
        $role->name = $request->input('name');
        $role->save();

        $role->syncPermissions($request->input('permission'));

        return redirect()->route('roles.index')
            ->with('success', 'Role updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Permission
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", Auth::user()['roles'])
            ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
            ->all();
        $data = array(
            "name" => $rolePermissions
        );
        if (empty($data['name'][4])) {
            throw UnauthorizedException::forPermissions($data);
        }
    }
}
