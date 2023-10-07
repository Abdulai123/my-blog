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
            'password' => ['Required', 'password', 'min:8', 'max128'],
        ]);

        // Perform login logic here...
        

        // Redirect to a success page or return a response
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
            'password' => ['Required', 'password', 'min:8', 'max128'],
        ]);

        $inputs['password'] = bcrypt($inputs['password']);

        $user = User::create($inputs);

        if ($user) {
            auth()->id();
        }

        // Redirect to a success page or return a response
        return 'You\'ve loggin';
    }
}
