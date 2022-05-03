<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit', 20);
        $title = $request->input('title');
        $slug = $request->input('slug');
        $status = $request->input('status');

        if ($slug) {
            $content = Category::where('slug', $slug)->first();
            if ($content) {
                return ResponseFormatter::success(
                    $content,
                    'Data Category by slug retrieved successfully'
                );
            } else {
                return ResponseFormatter::error(
                    null,
                    'Data Category is empty'
                );
            }
        }


        return ResponseFormatter::success(
            DB::table('categories')->orderBy('created_at', 'desc')->paginate($limit),
            // $content->paginate($limit),
            'Data Content retrieved successfully'
        );
    }

    public function categoryparent()
    {
        return ResponseFormatter::success(
            Category::where("parent", 0)->get(),
            'Data Content retrieved successfully'
        );
    }

    public function subcategories(Request $request)
    {
        if($request->sub){
            $categorys = Category::where('slug', $request->sub)->first();
            $category = Category::with("parent")->find($categorys->id);
            $parents = [];
            $current = $category->parent;
            while($current!=null){
                $parent = Category::find($current->id);
                array_unshift($parents, $parent);
                $current = $current->parent;
            }
            $category["parent"] = $parents;
            // echo json_encode($category);
            // die;
            return ResponseFormatter::success(
                $category,
                // $content->paginate($limit),
                'Data Content retrieved successfully'
            );
        }
        
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
