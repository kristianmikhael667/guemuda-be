<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permission as ModelsPermission;
use App\Models\Role as ModelsRole;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $all_roles_except_a_and_b = Role::whereNotIn('name', ['role-list'])->get();
        foreach ($all_roles_except_a_and_b as $rol) {
            if ($rol->rolesname != Auth::user()['rolesname'] && $rol->rolesname == Auth::user()['rolesname']) {
                abort(403);
            }
        }
        $roles = ModelsRole::orderBy('id', 'DESC')->paginate(5);

        return view('admin.role', [
            'page' => 'Administrator',
            'roles' => $roles
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $all_roles_except_a_and_b = Role::whereNotIn('name', ['role-create'])->get();
        foreach ($all_roles_except_a_and_b as $rol) {
            if ($rol->rolesname != Auth::user()['rolesname'] && $rol->rolesname == Auth::user()['rolesname']) {
                abort(403);
            }
        }
        $permission = ModelsPermission::get();
        return view('admin.create-roles', [
            'page' => 'Administrator',
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
        $all_roles_except_a_and_b = Role::whereNotIn('name', ['role-create'])->get();
        foreach ($all_roles_except_a_and_b as $rol) {
            if ($rol->rolesname != Auth::user()['rolesname'] && $rol->rolesname == Auth::user()['rolesname']) {
                abort(403);
            }
        }
        $this->validate($request, [
            'name' => 'required|unique:roles,name',
            'permission' => 'required',
        ]);

        $role = ModelsRole::create(['name' => $request->input('name')]);
        $role->syncPermissions($request->input('permission'));
        return view('admin.role', [
            'page' => 'Administrator',
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
        $all_roles_except_a_and_b = Role::whereNotIn('name', ['role-list'])->get();
        foreach ($all_roles_except_a_and_b as $rol) {
            if ($rol->rolesname != Auth::user()['rolesname'] && $rol->rolesname == Auth::user()['rolesname']) {
                abort(403);
            }
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
        $all_roles_except_a_and_b = Role::whereNotIn('name', ['role-edit'])->get();
        foreach ($all_roles_except_a_and_b as $rol) {
            if ($rol->rolesname != Auth::user()['rolesname'] && $rol->rolesname == Auth::user()['rolesname']) {
                abort(403);
            }
        }
        $role = ModelsRole::find($id);
        $permission = ModelsPermission::get();
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", $id)
            ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
            ->all();
        return view('admin.role-edit', [
            'page' => 'Administrator',
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
        $all_roles_except_a_and_b = Role::whereNotIn('name', ['role-edit'])->get();
        foreach ($all_roles_except_a_and_b as $rol) {
            if ($rol->rolesname != Auth::user()['rolesname'] && $rol->rolesname == Auth::user()['rolesname']) {
                abort(403);
            }
        }
        $this->validate($request, [
            'name' => 'required',
            'permission' => 'required',
        ]);

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
        $all_roles_except_a_and_b = Role::whereNotIn('name', ['role-delete'])->get();
        foreach ($all_roles_except_a_and_b as $rol) {
            if ($rol->rolesname != Auth::user()['rolesname'] && $rol->rolesname == Auth::user()['rolesname']) {
                abort(403);
            }
        }
    }
}
