<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class UsersAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        if ($user) {
            return ResponseFormatter::success(
                User::all(),
                'Data Users retrieved successfullys'
            );
        } else {
            return ResponseFormatter::error(
                null,
                'Data Users Not Found'
            );
        }
    }

    public function getprofile(Request $request)
    {
        $user = Auth::user();
        if ($user) {
            return ResponseFormatter::success($user, 'My Profile');
        }
        return ResponseFormatter::error(null, 'Error');
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        $update = DB::table('users')->where('userId', $user->userId)->update([
            'first_name' => $request->first_name ? $request->first_name : $user->first_name,
            'last_name' => $request->last_name ? $request->last_name : $user->last_name,
            'address' => $request->address ? $request->address : $user->address,
            'city' => $request->city ? $request->city : $user->city,
            'job' => $request->job ? $request->job : $user->job,
            'bio' => $request->bio ? $request->bio : $user->bio,
            'date_birth' => $request->date_birth ? $request->date_birth : Carbon::now()
        ]);

        return ResponseFormatter::success($update, 'Profile Updated');
    }

    public function updatePhoto(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'file' => 'required|image|max:2048'
        ]);

        if ($validator->fails()) {
            return ResponseFormatter::error([
                'error' => $validator->errors()
            ], 'Update photo fails', 401);
        }

        if ($request->file('file')) {
            $file = $request->file->store('user-image');

            $user = Auth::user();

            DB::table('users')->where('userId', $user->userId)->update([
                'avatar' => $file,
            ]);
            return ResponseFormatter::success([$file], 'File successfully uploaded');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
