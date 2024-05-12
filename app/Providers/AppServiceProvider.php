<?php

namespace App\Providers;

use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        Gate::define('post-manage',function(User $user,Post $post){
            return $user->id == $post->user_id;
        });

        Gate::define('comment-update',function(User $user,Comment $comment){
            return $user->id == $comment->user_id;
        });

        Gate::define('comment-destroy',function(User $user,Comment $comment,Post $post){
            return $user->id == $comment->user_id || $user->id == $post->user_id;
        });
    }
}
