<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CategoryArticle extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->roles === 'common.superadmin') {
            $category = DB::table('categories')->orderBy('created_at', 'desc')->get();

            return view('admin.category-article', [
                'page' => 'Administrator',
                'categories' => $category
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
        if (Auth::user()->roles === 'common.superadmin') {
            return view('admin.create-category-article', [
                'page' => 'Administrator',
                'categories' => Category::all(),
            ]);
        } else {
            return redirect()->back();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function subcat(Request $request)
    {
        if ($request->parent) {
            $categorys = Category::where('id', $request->parent)->first();
            $category = Category::with("parent")->find($categorys->id);
            $parents = [];
            $current = $category->parent;
            while ($current != null) {
                $parent = Category::find($current->id);
                array_unshift($parents, $parent);
                $current = $current->parent;
            }
            $category["parent"] = $parents;

            return response()->json([
                'subcats' => $category,
                'success' => 'Data is successfully added'
            ]);
        }
       
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
        ]);
        $validatedData['parent'] = $request->parent ? $request->parent : 0;
        $slug = SlugService::createSlug(Category::class, 'slug', $request->name);
        $validatedData['slug'] = $slug;
        Category::create($validatedData);
        return redirect('/administrator/category-article')->with('success', 'New Category has been added!');
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
