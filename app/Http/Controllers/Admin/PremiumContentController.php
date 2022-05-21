<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StorePremiumContentRequest;
use App\Http\Requests\UpdatePremiumContentRequest;
use App\Models\CatPremium;
use App\Models\PremiumContent;
use App\Models\Tags;
use App\Models\User;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Hashids\Hashids;
use Illuminate\Support\Facades\DB;

class PremiumContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $search = '';
        $hashids = new Hashids('', 10);
        if (request('category')) {
            $category = CatPremium::firstWhere('slug', request('category'));
            $title = ' iner ' . $category->name;
        }

        if (request('user')) {
            $user = User::firstWhere('username', request('user'));
            $title = ' by ' . $user->username;
        }

        $contents = PremiumContent::latest()->with(['category', 'user'])->filter(request(['search', 'user', 'category']))->paginate(10)->withQueryString();
        $kinanda = PremiumContent::join("premium_views", "premium_views.id_post", "=", "premium_contents.id")
            ->where("premium_views.created_at", ">=", date("Y-m-d H:i:s", strtotime('-24 hours', time())))
            ->groupBy("premium_contents.id")
            ->groupBy("premium_contents.title")
            ->groupBy("premium_contents.captions")
            ->groupBy("premium_contents.slug")
            ->groupBy("premium_contents.uid_user")
            ->groupBy("premium_contents.uid_user_2")
            ->groupBy("premium_contents.image")
            ->groupBy("premium_contents.thumbnail")
            ->groupBy("premium_contents.category_id")
            ->groupBy("premium_contents.tags_id")
            ->groupBy("premium_contents.subdesc")
            ->groupBy("premium_contents.description")
            ->groupBy("premium_contents.link_audio")
            ->groupBy("premium_contents.link")
            ->groupBy("premium_contents.status")
            ->groupBy("premium_contents.created_at")
            ->groupBy("premium_contents.updated_at")
            ->groupBy("premium_contents.type")
            ->orderBy(DB::raw('COUNT(premium_contents.id)', 'desc'), 'desc')
            ->get(array(DB::raw('COUNT(premium_contents.id) as total_views'), 'premium_contents.*'));

        $taggers = Tags::all();
        return view('admin.premiumcontent', [
            'page' => 'Administrator',
            'contents' => $contents,
            'views' => $kinanda,
            'tages' => $taggers,
            'hashids' => $hashids
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create-premium', [
            'page' => 'Administrator',
            'categories' => CatPremium::where("parent", 0)->get(),
            'tags' => Tags::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePremiumContentRequest  $request
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
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-image');
            $validatedData['video'] = '-';
            $validatedData['thumbnail'] = '-';
            $validatedData['type'] = 'image';
            $validatedData['captions'] = $request->captions;
            $validatedData['link'] = '-';
            $validatedData['link_audio'] = "-";
        }
        // if ($request->hasFile('video')) {
        //     $validatedData['video'] = $request->file('video')->store('post-video');
        //     $validatedData['thumbnail'] = $request->file('thumbnail')->store('post-image');
        //     $validatedData['image'] = '-';
        //     $validatedData['link'] = $request->link;
        // }
        // Video
        if ($request->link) {
            // $validatedData['video'] = $request->file('video')->store('post-video');
            $validatedData['thumbnail'] = $request->file('thumbnails')->store('post-image');
            $validatedData['image'] = '-';
            $validatedData['captions'] = '-';
            $validatedData['type'] = 'video';
            $validatedData['link'] = $request->link;
            $validatedData['link_audio'] = "-";
        }
        // Audio
        if ($request->audios) {
            // $validatedData['video'] = $request->file('video')->store('post-video');
            $validatedData['thumbnail'] = $request->file('thumbnailt')->store('post-image');
            $validatedData['image'] = '-';
            $validatedData['captions'] = '-';
            $validatedData['type'] = 'audio';
            $validatedData['link'] = '-';
            $validatedData['link_audio'] = $request->audios;
        }

        $slug = SlugService::createSlug(PremiumContent::class, 'slug', $request->title);

        $validatedData['uid_user'] = auth()->user()->id;
        $validatedData['uid_user_2'] = "Not Edited";
        $validatedData['slug'] = $slug;
        $validatedData['created_at'] = $request->created_at ? $request->created_at : Carbon::now();
        $validatedData['tags_id'] = implode(",", $validatedData['tags_id']);
        $taglessBody = strip_tags($validatedData['description']);
        $validatedData['subdesc'] = $taglessBody;
        PremiumContent::create($validatedData);
        return redirect('/administrator/premiumcontent')->with('success', 'New post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PremiumContent  $premiumContent
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PremiumContent  $premiumContent
     * @return \Illuminate\Http\Response
     */
    public function edit(PremiumContent $premiumContent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePremiumContentRequest  $request
     * @param  \App\Models\PremiumContent  $premiumContent
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePremiumContentRequest $request, PremiumContent $premiumContent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PremiumContent  $premiumContent
     * @return \Illuminate\Http\Response
     */
    public function destroy(PremiumContent $premiumContent)
    {
        //
    }
}
