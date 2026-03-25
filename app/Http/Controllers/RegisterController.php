<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    public function create()
    {
        return view ('auth.register');
    }
    public function store()
    {
        // validate
        $attributes=request()->validate([
                            'name'=>['required'],
                            'email'=>['required','email'],
                            'password'=>['required',Password::min(6),'confirmed'],
        ]);
        // create user
        $user=User::create($attributes);
        // login
        Auth::login($user);
        // redirect
        return redirect ('/jobs');
    }
}
