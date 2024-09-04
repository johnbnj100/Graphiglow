<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;

class SignupController extends Controller
{
    public function signup(){
        return view('layouts.signup');
    }

    public function store(Request $request){
        $form = $request->validate([
            'name'=> ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users','email')],
            'password' => 'required|min:6'
        ]);

        $form['password'] = bcrypt($form['password']);

        //Create User

        $user = User::create($form);

        //login
        
        auth()->login($user);

        return redirect('/')->with('message', 'Login Successfully');
    }
}
