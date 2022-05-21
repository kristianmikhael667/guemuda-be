<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\CatPremium;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryPremiumAPI extends Controller
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
            $content = CatPremium::where('slug', $slug)->first();
            if ($content) {
                return ResponseFormatter::success(
                    $content,
                    'Data Category Premium by slug retrieved successfully'
                );
            } else {
                return ResponseFormatter::error(
                    null,
                    'Data Category Premium is empty'
                );
            }
        }


        return ResponseFormatter::success(
            DB::table('cat_premia')->orderBy('created_at', 'desc')->paginate($limit),
            // $content->paginate($limit),
            'Data Cat Premium retrieved successfully'
        );
    }

    public function categoryparent()
    {
        return ResponseFormatter::success(
            CatPremium::where("parent", 0)->with("posts")->get(),
            'Data Cat Premium retrieved successfully'
        );
    }

    public function subcategories(Request $request)
    {
        if($request->sub){
            $categorys = CatPremium::where('slug', $request->sub)->first();
            
            $category = CatPremium::with(["parent"])->find($categorys->id);
            $parents = [];
            $current = $category->parent;
            while($current!=null){
                $parent = CatPremium::find($current->id);
                array_unshift($parents, $parent);
                $current = $current->parent;
            }
            $category["parent"] = $parents;
            // echo json_encode($category);
            // die;
            return ResponseFormatter::success(
                $category,
                // $content->paginate($limit),
                'Data Premium Content retrieved successfully'
            );
        }
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
