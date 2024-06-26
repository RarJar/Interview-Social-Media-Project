<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\CommentRequest;

class CommentController extends Controller
{
    function store(CommentRequest $request, Post $post){
        $post->comments()->create($request->all());
        return back()->with('success', 'Comment Post Success');
    }

    function update(CommentRequest $request,Comment $comment){
        Gate::authorize('comment-update', $comment);
        $comment->update($request->all());
        return back()->with('success', 'Comment Update Success');
    }

    function destroy(Comment $comment){
        Gate::authorize('comment-destroy',[$comment,$comment->post]);
        $comment->delete();
        return back()->with('success', 'Comment Delete Success');
    }
}
