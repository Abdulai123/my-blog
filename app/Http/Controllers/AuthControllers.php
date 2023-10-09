<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthControllers extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function processLogin(Request $request)
    {
        // Validate the form data
        $inputs = $request->validate([
            'email' => ['Required', 'email'],
            'password' => ['Required']
        ]);

        if (auth()->attempt(['email' => $inputs['email'], 'password' => $inputs['password']])) {
            session()->regenerate();
        }

        return redirect('/');
    }

    public function showSignupForm()
    {
        return view('signup');
    }

    public function processSignup(Request $request)
    {
        // Validate the form data
        $inputs = $request->validate([
            'name' => ['Required', 'min:3', 'max:30'],
            'email' => ['Required', 'email'],
            'password' => ['Required', 'min:8', 'max:128']
        ]);

        $inputs['password'] = bcrypt($inputs['password']);

        $user = User::create($inputs);

        if ($user) {
            auth()->login($user);
        }

        return redirect('/');
    }

    public function loggout(){
        auth()->logout();

        return redirect('/');
    }
}