<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function index()
    {
        # code...
        return view('posts', [
            "title" => "Posts",
            "posts" => Post::all() //Post = Models, all = eloquent/collect array
        ]);
    }

    public function show($slug)
    {
        # code...
        return view('post',[
            "title" => "single post",
            "post" => Post::find($slug)
        ]);
    }
}
