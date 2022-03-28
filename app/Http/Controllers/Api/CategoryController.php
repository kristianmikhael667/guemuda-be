<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parents = Category::where('parent', 0)->get();
        foreach ($parents as $parent) {
            $childs = Category::where('parent', $parent->id)->get();
            if (count($childs) > 0) {
                $subCat = array();
                $players = array();
                $roster[$parent->name] = $players;
                foreach ($childs as $i => $child) {
                    $subchilds = Category::where('parent', $child->id)->get();
                    if (count($subchilds) > 0) {

                        $roster[$parent->name][$child->name] = $subCat;
                        foreach ($subchilds as $subchild) {

                            $roster[$parent->name][$child->name][] = array(
                                'name' => $subchild->name
                            );
                        }
                    } else {
                        $roster[$parent->name][$child->name] = $players;
                    }
                }
            }
        }
        return $roster;
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
