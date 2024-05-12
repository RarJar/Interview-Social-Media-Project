<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Gate;

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
        $post->load(['comments' => function ($query) {
            $query->latest();
        }]);
        return view('public.post.show',compact('post'));
    }

    function edit(Post $post){
        Gate::authorize('post-manage', $post);
        return view('public.post.edit',compact('post'));
    }

    function update(PostRequest $request,Post $post){
        Gate::authorize('post-manage', $post);
        $post->update($request->all());
        return redirect()->route('index')->with('success', 'Post Update Success');
    }

    function destroy(Post $post){
        Gate::authorize('post-manage', $post);
        $post->delete();
        return back()->with('success', 'Post Delete Success');
    }
}
