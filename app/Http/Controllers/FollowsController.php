<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class FollowsController extends Controller
{
    //have the auth user follow the given user
    public function store(User $user)
    {
        auth()->user()->toggleFollow($user);
        return back();
    }
}
