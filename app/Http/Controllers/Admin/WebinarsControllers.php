<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryWebinar;
use App\Models\TagsWebinar;
use App\Models\Webinar;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebinarsControllers extends Controller
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
                // $category = Category::firstWhere('slug', request('category'));
                // $title = ' iner ' . $category->name;
            }

            if (request('user')) {
                // $user = User::firstWhere('username', request('user'));
                // $title = ' by ' . $user->username;
            }

            $webinars = Webinar::latest()->paginate(10)->withQueryString();
            $taggers = TagsWebinar::all();
            return view('admin.webinars', [
                'page' => 'Administrator',
                'webinars' => $webinars,
                // 'views' => $kinanda,
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
        return view('admin.create-webinars', [
            'page' => 'Administrator',
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
        $validatedData = $request->validate([
            'title' => 'required',
            'tags_event' => 'required',
            'category_event' => 'required',
            'avatar' => 'image|file|max:1024',
            'description' => 'required',
            'speaker' => 'required',
            'schedule' => 'required',
            'organizer' => 'required',
            'moderator' => 'required',
            'address' => 'required',
            'links_maps' => 'required'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-image');
        }

        $slug = SlugService::createSlug(Webinar::class, 'slug', $request->title);

        $validatedData['slug'] = $slug;
        $validatedData['latitude'] = '1.2';
        $validatedData['longitude'] = '1.2';
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
