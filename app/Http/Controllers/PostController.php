<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    function create(){
        return view('public.post.create');
    }

    function store(PostRequest $request){
        Post::create($request->all());
        return redirect()->route('index')->with('success', 'Post Create Success');
    }

    function show(Post $post){
        return view('public.post.show',compact('post'));
    }

    function edit(Post $post){
        return view('public.post.edit',compact('post'));
    }

    function update(PostRequest $request,Post $post){
        $post->update($request->all());
        return redirect()->route('index')->with('success', 'Post Update Success');
    }

    function destroy(Post $post){
        $post->delete();
        return back()->with('success', 'Post Delete Success');
    }
}
