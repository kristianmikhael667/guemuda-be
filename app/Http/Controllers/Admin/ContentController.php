<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Content;
use App\Models\ContentViews;
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

            $contents = Content::latest()->with(['category', 'user'])->filter(request(['search', 'user', 'category']))->paginate(10)->withQueryString();
            $kinanda = Content::join("content_views", "content_views.id_post", "=", "contents.id")
                ->where("content_views.created_at", ">=", date("Y-m-d H:i:s", strtotime('-24 hours', time())))
                ->groupBy("contents.slug")
                ->groupBy("contents.id")
                ->groupBy("contents.uid_user")
                ->groupBy("contents.uid_user_2")
                ->groupBy("thumbnail")
                ->groupBy("contents.description")
                ->groupBy("contents.link")
                ->groupBy("contents.status")
                ->groupBy("contents.created_at")
                ->groupBy("contents.updated_at")
                ->groupBy("contents.title")
                ->groupBy("contents.subdesc")
                ->groupBy("contents.image")
                ->groupBy("contents.video")
                ->groupBy("contents.category_id")
                ->groupBy("contents.tags_id")
                ->orderBy(DB::raw('COUNT(contents.id)', 'desc'), 'desc')
                ->get(array(DB::raw('COUNT(contents.id) as total_views'), 'contents.*'));
            // foreach ($kinanda as $kinan) {
            // echo json_encode($kinanda);
            // die;
            // }
            $taggers = Tags::all();
            return view('admin.content', [
                'page' => 'Administrator',
                'contents' => $contents,
                'views' => $kinanda,
                'tages' => $taggers
            ]);
        } else {
            return redirect()->back();
        }
    }

    public function create()
    {
        return view('admin.create-post', [
            'page' => 'Administrator',
            'categories' => Category::all(),
            'tags' => Tags::all()
        ]);
    }

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
            $validatedData['thumbnail'] = '-';
        }
        if ($request->hasFile('video')) {
            $validatedData['video'] = $request->file('video')->store('post-video');
            $validatedData['thumbnail'] = $request->file('thumbnail')->store('post-image');
            $validatedData['image'] = '-';
        }
        $slug = SlugService::createSlug(Content::class, 'slug', $request->title);

        $validatedData['uid_user'] = auth()->user()->id;
        $validatedData['uid_user_2'] = "Not Edited";
        $validatedData['slug'] = $slug;
        $validatedData['link'] = '-';
        $validatedData['tags_id'] = implode(",", $validatedData['tags_id']);
        $taglessBody = strip_tags($validatedData['description']);
        $validatedData['subdesc'] = $taglessBody;
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
    public function edit(Content $post)
    {
        return view('admin.content-edit', [
            'page' => 'Administrator',
            'contents' => $post
        ]);
    }

    public function edittitle($id)
    {
        $title = DB::table('contents')->where('slug', $id)->get();
        $title_data = $title[0]->title;
        $slugs = $title[0]->slug;
        return view('admin.content-title', [
            'page' => 'Administrator',
            'contents' => $title_data,
            'slugs' => $slugs
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Content $post)
    {
        if ($request->title) {
            DB::table('contents')->where('slug', $post->slug)->update([
                'title' => $request->title,
                'slug' =>  SlugService::createSlug(Content::class, 'slug', $request->title),
                'uid_user_2' => auth()->user()->username,
                'updated_at' => date('Y-m-d H:i:s')
            ]);
            return redirect('/administrator/post')->with('success', 'Post has been updated!');
        }
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
