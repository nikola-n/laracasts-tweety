<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProfilesController extends Controller
{
    public function show(User $user)
    {
        return view('profiles.show', [
            'user' => $user,
            'tweets' => $user->tweets()->withLikes()->paginate(50)]);
    }

    public function edit(User $user)
    {
//        abort_if($user->isNot(current_user()), 404);
        return view('profiles.edit', compact('user'));
    }
    public function update(User $user)
    {
        $attributes = request()->validate([
            'username'=>['string','required','max:255','alpha_dash' ,Rule::unique('users')->ignore($user)],
            'name' =>['required','string','max:255'],
            'avatar'=>['file'],
            'email'=>['string','required','email','max:255', Rule::unique('users')->ignore($user)],
            'password'=>['string','required','min:8','max:255','confirmed'],
        ]);

        //it will store a path in the database
        if(request('avatar')) {
        $attributes['avatar'] = request('avatar')->store('avatars');
        }
        $user->update($attributes);

        return redirect($user->path());
    }
}
