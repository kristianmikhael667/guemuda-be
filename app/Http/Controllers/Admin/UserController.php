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
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

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
        return view('admin.users', [
            'page' => 'Administrator',
            'users' => $data
        ]);
    }

    public function superadmin()
    {
        $data = User::orderBy('id', 'DESC')->where('rolesname', 'superadmin')->paginate(10);
        return view('admin.users-superadmin', [
            'page' => 'Administrator',
            'users' => $data
        ]);
    }

    public function admin()
    {
        $data = User::orderBy('id', 'DESC')->where('rolesname', 'admin')->paginate(10);
        return view('admin.user-admin', [
            'page' => 'Administrator',
            'users' => $data
        ]);
    }

    public function admincreate()
    {
        $data = ModelsRole::orderBy('id', 'DESC')->where('name', 'admin')->get();
        return view('admin.createadmin', [
            'page' => 'Administrator',
            'roles' => $data[0]
        ]);
    }

    public function postadmin(Request $request)
    {
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
        $data = User::orderBy('id', 'DESC')->where('rolesname', 'editor')->paginate(10);
        return view('admin.user-editor', [
            'page' => 'Administrator',
            'users' => $data
        ]);
    }

    public function editorcreate()
    {
        $data = ModelsRole::orderBy('id', 'DESC')->where('name', 'editor')->get();
        return view('admin.createeditor', [
            'page' => 'Administrator',
            'roles' => $data[0]
        ]);
    }

    public function posteditor(Request $request)
    {
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
        $data = User::orderBy('id', 'DESC')->where('rolesname', 'contributor')->paginate(10);
        return view('admin.users-contributor', [
            'page' => 'Administrator',
            'users' => $data
        ]);
    }

    public function subscribes()
    {
        $data = User::orderBy('id', 'DESC')->where('rolesname', 'subscribe')->paginate(10);
        return view('admin.users-superadmin', [
            'page' => 'Administrator',
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
        return view('admin.content', [
            'page' => 'Administrator',
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
        return view('admin.users', [
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
        $user = User::find($id);
        return view('admin.show-users', [
            'page' => 'Administrator',
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

        return view('admin.edit-user', [
            'page' => 'Administrator',
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

        return view('admin.users', [
            'page' => 'Administrator',
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
        return view('admin.users', [
            'page' => 'Administrator',
        ]);
    }
}
