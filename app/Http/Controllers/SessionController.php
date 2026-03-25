<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create (){
        return view ('auth.login');
    }

        public function destroy()
    {
        Auth::logout();
        return redirect('/');
    }

    public function store ()
    {
        //dd(request()->all());

        // validate
        $attributes=request()->validate([
                            'email'=>['required'],
                            'password'=>['required'],
        ]);
        // attempt login
        if(! Auth::attempt($attributes)){
            throw ValidationException::withMessages(['email'=>'Sorry invalid user']);
        }
        // regenerate session
        request()->session()->regenerate();
        // redirect
        return redirect ('/jobs');
    }
}
