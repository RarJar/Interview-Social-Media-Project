<?php

namespace App\Http\Controllers;

use App\Models\User;

class ProfileController extends Controller
{
    public function index(User $user)
    {
        $user->load(['posts' => function ($query) {
            $query->latest()->with('comments');
        }]);
        return view('public.profile.index', compact('user'));
    }
}
