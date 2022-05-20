<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreCatPremiumRequest;
use App\Http\Requests\UpdateCatPremiumRequest;
use App\Models\CatPremium;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;

class CatPremiumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = DB::table('cat_premia')->orderBy('created_at', 'desc')->get();

        return view('admin.category-premium', [
            'page' => 'Administrator',
            'categories' => $category
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create-category-premium', [
            'page' => 'Administrator',
            'categories' => CatPremium::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCatPremiumRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
        ]);
        $validatedData['parent'] = $request->parent ? $request->parent : 0;
        $slug = SlugService::createSlug(CatPremium::class, 'slug', $request->name);
        $validatedData['slug'] = $slug;
        CatPremium::create($validatedData);
        return redirect('/administrator/category-premium')->with('success', 'New Category has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CatPremium  $catPremium
     * @return \Illuminate\Http\Response
     */
    public function show(CatPremium $catPremium)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CatPremium  $catPremium
     * @return \Illuminate\Http\Response
     */
    public function edit(CatPremium $catPremium)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCatPremiumRequest  $request
     * @param  \App\Models\CatPremium  $catPremium
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCatPremiumRequest $request, CatPremium $catPremium)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CatPremium  $catPremium
     * @return \Illuminate\Http\Response
     */
    public function destroy(CatPremium $catPremium)
    {
        //
    }
}
