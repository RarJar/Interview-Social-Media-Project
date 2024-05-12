<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;

class CommentController extends Controller
{
    function store(CommentRequest $request, Post $post){
        $post->comments()->create($request->all());
        return back()->with('success', 'Comment Post Success');
    }
}
