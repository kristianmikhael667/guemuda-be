<?php

namespace App\Http\Controllers\Admin;

use App\Events\SendGlobalNotification;
use App\Http\Controllers\Controller;
use App\Models\CommentCom;
use App\Models\CommunityNews;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Spatie\Permission\Exceptions\UnauthorizedException;

class CommentComController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Permission
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", Auth::user()['roles'])
            ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
            ->all();
        $data = array(
            "name" => $rolePermissions
        );
        if (empty($data['name'][33])) {
            throw UnauthorizedException::forPermissions($data);
        }
        $roleuser = Auth::user()->rolesname;
        $contents = CommunityNews::latest()->with(['category', 'user', 'comments'])->filter(request(['search', 'user', 'category', 'comments']))->paginate(10)->withQueryString();
        return view('admin.commentcom', [
            'page' => $roleuser,
            'contents' => $contents,
        ]);
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
        // Permission
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", Auth::user()['roles'])
            ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
            ->all();
        $data = array(
            "name" => $rolePermissions
        );
        if (empty($data['name'][33])) {
            throw UnauthorizedException::forPermissions($data);
        }
        $checks = CommunityNews::where('slug', $id)->first();
        $comments = CommentCom::where('post_id', $checks->id)->filter(request(['search']))->orderBy('created_at', 'DESC')->paginate(10)->withQueryString();
        $roleuser = Auth::user()->rolesname;

        return view('admin.commentcom-detail', [
            'page' => $roleuser,
            'title' =>  $checks,
            'slug' => $id,
            'comments' => $comments,
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
        // Permission
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", Auth::user()['roles'])
            ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
            ->all();
        $data = array(
            "name" => $rolePermissions
        );
        if (empty($data['name'][33])) {
            throw UnauthorizedException::forPermissions($data);
        }
        
        $comment = CommentCom::where('id', $id)->first();
        DB::table('comment_coms')->where('id', $id)->update([
            'updated_at' => date('Y-m-d H:i:s'),
            'status' => $request->status
        ]);
        $json = [
            'from' => Auth::user()->username,
            'time' => Carbon::now(),
            'message' => $request->status == "accept" ? 'Your Message In Accept' : "Your Message In Reject",
            'field' => $comment->body
        ];

        // event(new SendGlobalNotification($json));

        return Redirect::back()->with('success', 'Comment status has been updated!');
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
