<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (Auth::user()->roles === 'common.admin') {
            // $contents = Content::when($request->has("title"), function ($q) use ($request) {
            //     return $q->where("title", "like", "%" . $request->get("title") . "%");
            // })->paginate(10);
            // if ($request->ajax()) {
            //     return view('admin.content-pagination', [
            //         'page' => 'Administrator',
            //         'contents' => $contents
            //     ]);
            // }
            $contents = Content::orderBy('id', 'DESC')->get();
            return view('admin.content', [
                'page' => 'Administrator',
                'contents' => $contents
            ]);
        } else {
            return redirect()->back();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create-post', [
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
            'title' => 'required',
            'tags' => 'required',
            'image' => 'image|file|max:1024',
            'description' => 'required',
            'video' => 'mimes:mp4,x-flv,x-mpegURL,MP2T,3gpp,quicktime,x-msvideo,x-ms-wmv',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-image');
            $validatedData['video'] = '-';
            $validatedData['voice'] = '-';
        }
        if ($request->hasFile('video')) {
            $validatedData['video'] = $request->file('video')->store('post-video');
            $validatedData['image'] = '-';
        }
        $slug = SlugService::createSlug(Content::class, 'slug', $request->title);

        $validatedData['uid_user'] = auth()->user()->uuid;
        $validatedData['slug'] = $slug;
        $validatedData['link'] = 'gada';
        // $validatedData['excerpt'] = Str::limit(strip_tags($request->body, 200));
        Content::create($validatedData);
        return redirect('/administrator/post')->with('success', 'New post has been added!');
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
