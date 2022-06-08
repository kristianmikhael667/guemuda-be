<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryWebinar;
use App\Models\TagsWebinar;
use App\Models\Webinar;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Exceptions\UnauthorizedException;

class WebinarsControllers extends Controller
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
        if (empty($data['name'][9])) {
            throw UnauthorizedException::forPermissions($data);
        }
        $roleuser = Auth::user()->rolesname;

        $webinars = Webinar::latest()->filter(request(['search']))->paginate(10)->withQueryString();
        $taggers = TagsWebinar::all();
        return view('admin.webinars', [
            'page' => $roleuser,
            'webinars' => $webinars,
            'tages' => $taggers
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
        if (empty($data['name'][10])) {
            throw UnauthorizedException::forPermissions($data);
        }
        $roleuser = Auth::user()->rolesname;
        return view('admin.create-webinars', [
            'page' => $roleuser,
            'categories' => CategoryWebinar::all(),
            'tages' => TagsWebinar::all()
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
        if (empty($data['name'][10])) {
            throw UnauthorizedException::forPermissions($data);
        }

        $validatedData = $request->validate([
            'title' => 'required',
            'tags_event' => 'nullable',
            'category_event' => 'nullable',
            'avatar' => 'image|file|max:2024',
            'description' => 'required',
            'speaker' => 'required',
            'schedule' => 'required',
            'organizer' => 'required',
            'moderator' => 'required',
            'address' => 'required',
            'survey_question1' => 'nullable',
            'survey_question2' => 'nullable',
            'survey_question3' => 'nullable',
            'survey_question4' => 'nullable',
            'survey_question5' => 'nullable',
            'survey_question6' => 'nullable',
            'survey_question7' => 'nullable',
            'survey_question8' => 'nullable',
            'survey_question9' => 'nullable',
            'survey_question10' => 'nullable',
            'links_maps' => 'nullable'
        ]);

        if ($request->file('avatar')) {
            $validatedData['avatar'] = $request->file('avatar')->store('post-image');
        }


        $slug = SlugService::createSlug(Webinar::class, 'slug', $request->title);
        $validatedData['typewebinar'] = $request->typewebinar;
        $validatedData['slug'] = $slug;
        $validatedData['latitude'] = '1.2';
        $validatedData['longitude'] = '1.2';
        $validatedData['speaker_2'] = $request->speaker2 ? $request->speaker2 : Null;
        $validatedData['tags_event'] = implode(",", $validatedData['tags_event']);
        $taglessBody = strip_tags($validatedData['description']);
        $validatedData['subdesc'] = $taglessBody;
        Webinar::create($validatedData);
        return redirect('/administrator/webinars')->with('success', 'New webinars has been added!');
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
        if (empty($data['name'][9])) {
            throw UnauthorizedException::forPermissions($data);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Webinar $webinar)
    {
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", Auth::user()['roles'])
            ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
            ->all();
        $data = array(
            "name" => $rolePermissions
        );
        if (empty($data['name'][11])) {
            throw UnauthorizedException::forPermissions($data);
        }
        $roleuser = Auth::user()->rolesname;

        return view('admin.edit-webinars', [
            'webinar' => $webinar,
            'page' => $roleuser,
            'categories' => CategoryWebinar::all(),
            'tages' => TagsWebinar::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Webinar $webinar)
    {
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", Auth::user()['roles'])
            ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
            ->all();
        $data = array(
            "name" => $rolePermissions
        );
        if (empty($data['name'][11])) {
            throw UnauthorizedException::forPermissions($data);
        }

        // dd($request);
        $validatedData = $request->validate([
            'title' => 'required',
            'tags_event' => 'nullable',
            'category_event',
            'avatar' => 'image|file|max:2024',
            'description' => 'required',
            'speaker' => 'required',
            'schedule' => 'required',
            'organizer' => 'required',
            'moderator' => 'required',
            'address' => 'required',
            'survey_question1' => 'nullable',
            'survey_question2' => 'nullable',
            'survey_question3' => 'nullable',
            'survey_question4' => 'nullable',
            'survey_question5' => 'nullable',
            'survey_question6' => 'nullable',
            'survey_question7' => 'nullable',
            'survey_question8' => 'nullable',
            'survey_question9' => 'nullable',
            'survey_question10' => 'nullable',
            'links_maps' => 'nullable',
        ]);

        if ($request->file('avatar')) {
            $validatedData['avatar'] = $request->file('avatar')->store('post-image');
        }

        if ($request->slug != $webinar->slug) {
            $validatedData['slug'] = $request->slug;
        }
        $validatedData['typewebinar'] = $request->typewebinar;
        $validatedData['latitude'] = '1.2';
        $validatedData['longitude'] = '1.2';
        $validatedData['speaker_2'] = $request->speaker2 ? $request->speaker2 : Null;
        $validatedData['description'] = $request->description;
        $taglessBody = strip_tags($validatedData['description']);
        $validatedData['subdesc'] = $taglessBody;
        Webinar::where('id', $webinar->id)
            ->update($validatedData);
        return redirect('/administrator/webinars')->with('success', 'Webinars has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Webinar $webinar)
    {
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", Auth::user()['roles'])
            ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
            ->all();
        $data = array(
            "name" => $rolePermissions
        );
        if (empty($data['name'][12])) {
            throw UnauthorizedException::forPermissions($data);
        }

        Webinar::destroy($webinar->id);
        return redirect('/administrator/webinars')->with('success', 'New webinars has been added!');
    }
}
