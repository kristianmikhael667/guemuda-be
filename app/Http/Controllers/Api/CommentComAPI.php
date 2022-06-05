<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\CommentCom;
use Carbon\Exceptions\Exception;
use Illuminate\Http\Request;

class CommentComAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        try {
            $input = $request->all();
            $input['user_id'] = auth()->user()->id;
            $data = CommentCom::create($input);
            if ($data) {
                return ResponseFormatter::success(
                    $data,
                    'Data Comment Community retrieved successfully'
                );
            }
        } catch (Exception $e) {
            return ResponseFormatter::error(
                $e,
                'Error'
            );
        }
    }

    public function reply(Request $request)
    {
        try {
            $input = $request->all();
            $input['user_id'] = auth()->user()->id;
            $data = CommentCom::create($input);
            if ($data) {
                return ResponseFormatter::success(
                    $data,
                    'Data Reply Comment Community retrieved successfully'
                );
            }
        } catch (Exception $e) {
            return ResponseFormatter::error(
                $e,
                'Error'
            );
        }
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
