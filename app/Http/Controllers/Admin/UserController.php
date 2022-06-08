<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role as ModelsRole;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Exceptions\UnauthorizedException;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = User::orderBy('id', 'DESC')->paginate(10);
        $roleuser = Auth::user()->rolesname;
        return view('admin.users', [
            'page' => $roleuser,
            'users' => $data
        ]);
    }

    public function superadmin()
    {
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", Auth::user()['roles'])
            ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
            ->all();
        $data = array(
            "name" => $rolePermissions
        );
        if (empty($data['name'][24])) {
            throw UnauthorizedException::forPermissions($data);
        }
        $roleuser = Auth::user()->rolesname;
        $data = User::orderBy('id', 'DESC')->where('rolesname', 'superadmin')->filter(request(['search']))->paginate(10);
        return view('admin.users-superadmin', [
            'page' => $roleuser,
            'users' => $data
        ]);
    }

    public function admin()
    {
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", Auth::user()['roles'])
            ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
            ->all();
        $data = array(
            "name" => $rolePermissions
        );
        if (empty($data['name'][25])) {
            throw UnauthorizedException::forPermissions($data);
        }
        $roleuser = Auth::user()->rolesname;
        $data = User::orderBy('id', 'DESC')->where('rolesname', 'admin')->filter(request(['search']))->paginate(10);
        return view('admin.user-admin', [
            'page' => $roleuser,
            'users' => $data
        ]);
    }

    public function admincreate()
    {
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", Auth::user()['roles'])
            ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
            ->all();
        $data = array(
            "name" => $rolePermissions
        );
        if (empty($data['name'][30])) {
            throw UnauthorizedException::forPermissions($data);
        }
        $roleuser = Auth::user()->rolesname;
        $data = ModelsRole::orderBy('id', 'DESC')->where('name', 'admin')->get();
        return view('admin.createadmin', [
            'page' => $roleuser,
            'roles' => $data[0]
        ]);
    }

    public function postadmin(Request $request)
    {
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", Auth::user()['roles'])
            ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
            ->all();
        $data = array(
            "name" => $rolePermissions
        );
        if (empty($data['name'][30])) {
            throw UnauthorizedException::forPermissions($data);
        }
        try {
            $validatedData = $request->validate([
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'username' => 'required|unique:users',
                'email' => 'required|string|max:255|unique:users',
                'phone_number' => 'required',
                'password' => 'required|confirmed',
                'roles' => 'required',
                'rolesname' => 'required',
            ]);
            $validatedData['address'] = '-';
            $validatedData['address'] = '-';
            $validatedData['city'] = '-';
            $validatedData['job'] = '-';
            $validatedData['bio'] = '-';
            $validatedData['date_birth'] = Carbon::today();
            User::create($validatedData);
            return redirect('/administrator/admin')->with('success', 'Success Create Admin');
        } catch (Exception $error) {
            dd($error);
        }
    }

    public function editor()
    {
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", Auth::user()['roles'])
            ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
            ->all();
        $data = array(
            "name" => $rolePermissions
        );
        if (empty($data['name'][26])) {
            throw UnauthorizedException::forPermissions($data);
        }
        $data = User::orderBy('id', 'DESC')->where('rolesname', 'editor')->filter(request(['search']))->paginate(10);
        $roleuser = Auth::user()->rolesname;
        return view('admin.user-editor', [
            'page' => $roleuser,
            'users' => $data
        ]);
    }

    public function editorcreate()
    {
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", Auth::user()['roles'])
            ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
            ->all();
        $data = array(
            "name" => $rolePermissions
        );
        if (empty($data['name'][31])) {
            throw UnauthorizedException::forPermissions($data);
        }
        $data = ModelsRole::orderBy('id', 'DESC')->where('name', 'editor')->get();
        $roleuser = Auth::user()->rolesname;
        return view('admin.createeditor', [
            'page' => $roleuser,
            'roles' => $data[0]
        ]);
    }

    public function posteditor(Request $request)
    {
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", Auth::user()['roles'])
            ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
            ->all();
        $data = array(
            "name" => $rolePermissions
        );
        if (empty($data['name'][31])) {
            throw UnauthorizedException::forPermissions($data);
        }
        try {
            $validatedData = $request->validate([
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'username' => 'required|unique:users',
                'email' => 'required|string|max:255|unique:users',
                'phone_number' => 'required',
                'password' => 'required|confirmed',
                'roles' => 'required',
                'rolesname' => 'required',
            ]);
            $validatedData['address'] = '-';
            $validatedData['address'] = '-';
            $validatedData['city'] = '-';
            $validatedData['job'] = '-';
            $validatedData['bio'] = '-';
            $validatedData['date_birth'] = Carbon::today();
            User::create($validatedData);
            return redirect('/administrator/editor')->with('success', 'Success Create Editor');
        } catch (Exception $error) {
            dd($error);
        }
    }

    public function contributor()
    {
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", Auth::user()['roles'])
            ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
            ->all();
        $data = array(
            "name" => $rolePermissions
        );
        if (empty($data['name'][27])) {
            throw UnauthorizedException::forPermissions($data);
        }
        $data = User::orderBy('id', 'DESC')->where('rolesname', 'contributor')->filter(request(['search']))->paginate(10);
        $roleuser = Auth::user()->rolesname;
        return view('admin.users-contributor', [
            'page' => $roleuser,
            'users' => $data
        ]);
    }

    public function subscribes()
    {
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", Auth::user()['roles'])
            ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
            ->all();
        $data = array(
            "name" => $rolePermissions
        );
        if (empty($data['name'][28])) {
            throw UnauthorizedException::forPermissions($data);
        }
        $data = User::orderBy('id', 'DESC')->where('rolesname', 'subscribe')->filter(request(['search']))->paginate(10);
        $roleuser = Auth::user()->rolesname;
        return view('admin.users-subscribe', [
            'page' => $roleuser,
            'users' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name', 'name')->all();
        $roleuser = Auth::user()->rolesname;
        return view('admin.content', [
            'page' => $roleuser,
            'roles' => $roles
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
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required'
        ]);

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        $user = User::create($input);
        $user->assignRole($request->input('roles'));
        $roleuser = Auth::user()->rolesname;
        return view('admin.users', [
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
        $user = User::find($id);
        $roleuser = Auth::user()->rolesname;
        return view('admin.show-users', [
            'page' => $roleuser,
            'users' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name', 'name')->all();
        $userRole = $user->roles->pluck('name', 'name')->all();
        $roleuser = Auth::user()->rolesname;
        return view('admin.edit-user', [
            'page' => $roleuser,
            'users' => $user,
            'roles' => $roles,
            'userroles' => $userRole
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
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'same:confirm-password',
            'roles' => 'required'
        ]);

        $input = $request->all();
        if (!empty($input['password'])) {
            $input['password'] = Hash::make($input['password']);
        } else {
            $input = Arr::except($input, array('password'));
        }

        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id', $id)->delete();

        $user->assignRole($request->input('roles'));
        $roleuser = Auth::user()->rolesname;
        return view('admin.users', [
            'page' => $roleuser,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        $roleuser = Auth::user()->rolesname;
        return view('admin.users', [
            'page' => $roleuser,
        ]);
    }
}
