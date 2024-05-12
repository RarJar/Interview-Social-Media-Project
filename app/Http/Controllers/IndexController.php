<?php

namespace App\Http\Controllers;

use App\Models\Post;

class IndexController extends Controller
{
    function index(){
        $posts = Post::with('comments')->latest()->get();
        return view('index',compact('posts'));
    }
}
