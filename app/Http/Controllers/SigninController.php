<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SigninController extends Controller
{
    //Login
    public function signin(){
        return view('layouts.signin');
    }

      //logout

      public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'Logout Successfully');
    }

    //login authentication

    public function authenticate(Request $request){
        $formfield= $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if (auth()->attempt($formfield)){
            $request->session()->regenerate();

            return redirect('/')->with('message','You are now logged in');
        }
            return back()->withErrors(['email' => 'Invalid credentials'])->onlyInput('email');
    }


}


