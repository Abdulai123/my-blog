<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthControllers extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function processLogin(Request $request)
    {
        // Validate the form data
        $inpputs = $request->validate([
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
        $inpputs = $request->validate([
            'name' => ['Required', 'min:3', 'max:30'],
            'email' => ['Required', 'email'],
            'password' => ['Required', 'password', 'min:8', 'max128'],
        ]);

        // Create user logic here...

        // Redirect to a success page or return a response
    }
}
