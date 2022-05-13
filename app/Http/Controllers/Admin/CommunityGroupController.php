<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CommunityGroup;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommunityGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->roles === 'common.superadmin') {
            $communitygroup = CommunityGroup::latest()->get();
            return view('admin.community-group',[
                'page' => 'Administrator',
                'groups' => $communitygroup
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create-community-group', [
            'page' => 'Administrator',
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
