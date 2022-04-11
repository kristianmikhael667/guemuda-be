<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Content;
use App\Models\Tags;
use App\Models\User;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->roles === 'common.admin') {

            $search = '';
            if (request('category')) {
                // $contents = DB::table('contents')
                //     ->where('title', 'like', "%" . $search . "%")
                //     ->paginate();

                // return view('admin.content', [
                //     'page' => 'Administrator',
                //     'contents' => $contents
                // ]);
                $category = Category::firstWhere('slug', request('category'));
                $title = ' iner ' . $category->name;
            }

            if (request('user')) {
                $user = User::firstWhere('username', request('user'));
                $title = ' by ' . $user->username;
            }

            $contents = Content::latest()->filter(request(['search', 'user', 'category']))->paginate(10)->withQueryString();
            $taggers = Tags::all();
            return view('admin.content', [
                'page' => 'Administrator',
                'contents' => $contents,
                'tages' => $taggers
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
            'categories' => Category::all(),
            'tags' => Tags::all()
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
            'tags_id' => 'required',
            'category_id' => 'required',
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

        $validatedData['uid_user'] = auth()->user()->id;
        $validatedData['slug'] = $slug;
        $validatedData['link'] = 'gada';
        $validatedData['tags_id'] = implode(",", $validatedData['tags_id']);

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
    public function destroy(Content $content)
    {
        if ($content->image) {
            Storage::delete($content->image);
        }
        Content::destroy($content->id);
        return redirect('/administrator/post')->with('success', 'New post has been deleted!');
    }
}
