<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{

    function index(){

    }

    function lastThree(){

        return response()->json([
            "msg" => "test"
        ]);
    }

    function createNotice(){
        return response()->json([
            'msg' => 'aqui'
        ]);
        // $this->validate($request, [
        //     'title' => 'required|string',
        //     'description' => 'required|string'
        // ]);

        // if ($request->hasFile('imagen')){
        //     $newBlog = new Blog();
        //     $newBlog->title = $request->title;
        //     $newBlog->description = $request->description;

        //     return response()->json($newBlog);
        // }

        // return response()->json([
        //     'msg' => 'Imagen not valid',
        // ], 422);
    }

    function update(){

    }

    function destroy(){

    }
}
