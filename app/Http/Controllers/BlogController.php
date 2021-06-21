<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use File;

class BlogController extends Controller
{

    function index(){
        $posts = Blog::all()->sortByDesc('created');

        return response()->json([
            "msg" => "Todas la noticias",
            "posts" => $posts
        ]);
    }

    function lastThree(){

        $posts = Blog::orderBy("created_at", 'desc')->take(3)->get();

        return response()->json([
            "msg" => "",
            "posts" => $posts
        ]);
    }

    function create(Request $request){
        $this->validate($request, [
            'title' => 'required|string',
            'description' => 'required|string'
        ]);

        if ($request->hasFile('photo')){
            $ext = $request->photo->extension();

            if ($ext !== 'jpg' && $ext !== 'jpeg' && $ext !== 'png' ){
                return response()->json([
                    'msg' => 'Photo no es una imagen'
                ], 422);
            }

            $newBlog = new Blog();
            $newBlog->title = $request->title;
            $newBlog->description = $request->description;
            $newBlog->photo = '';
            $newBlog->save();

            $picName = $newBlog->id.'.'.$ext;

            //Ruta de los photos news
            $path = 'news';

            //Se mueve a la ruta
            $request->photo->move(public_path($path), $picName);
            $url = '/'.$path.'/'.$picName;

            $newBlog->photo = $url;
            $newBlog->save();

            return response()->json([
                'msg' => "New Created!",
                "url" => $url,
                "blog" => $newBlog
            ]);
        }

        return response()->json([
            'msg' => 'Photo not valid',
        ], 422);
    }

    function update(Request $request, Blog $blog){
        $this->validate($request, [
            'title' => 'required|string',
            'description' => 'required|string'
        ]);

        if ($blog){
            if ($request->hasFile('photo')){
                
                $ext = $request->photo->extension();
                
                if ($ext !== 'jpg' && $ext !== 'jpeg' && $ext !== 'png' ){
                    return response()->json([
                        'msg' => 'Photo no es una imagen'
                    ], 422);
                }

                if ($blog->photo){
                    File::delete(public_path($blog->photo));
                }

                $picName = $blog->id.'.'.$ext;
                $url = '/news'.'/'.$picName;
                $request->photo->move(public_path('news'), $picName);

                $blog->photo = $url;
            }

            $blog->title = $request->title;
            $blog->description = $request->description;
            $blog->save();

            return response()->json([
                'msg' => 'Update New',
                "post" => $blog
            ]);
        }

        return response()->json([
            'msg' => 'New Error'
        ], 422);
    }

    function destroy(Blog $blog){
        if ($blog){
            if ($blog->photo){
                File::delete(public_path($blog->photo));
            }

            $blog->delete();

            return response()->json([
                'msg' => 'Destroy New'
            ]);
        }

        return response()->json([
            'msg' => 'New Error',
        ], 422);

    }
}
