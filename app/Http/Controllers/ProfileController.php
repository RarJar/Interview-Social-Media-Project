<?php

namespace App\Http\Controllers;

use App\Models\User;

class ProfileController extends Controller
{
    public function index(User $user)
    {
        return view('public.profile.index',compact('user'));
    }
}
