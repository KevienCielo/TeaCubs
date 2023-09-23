<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // Show User Registration Form
    public function create()
    {
        return view('users.register');
    }

    // ===================================
    // Create New User
    public function store(Request $request)
    {
        // form validation
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'min:6']
        ]);

        // hash password
        $formFields['password'] = bcrypt($formFields['password']);

        // ===============================================================================
        // create user
        $user = User::create($formFields);

        // logs the newly created user
        auth()->login($user);

        return redirect('/')->with('message', 'User created and logged in!');
        // ===============================================================================
    }

    // ===================================
    // Log User Out
    public function logout(Request $request)
    {
        auth()->logout();

        // invalidate & regenerate user's csrf token
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out!');
    }

    // Show Login Form
    public function login()
    {
        return view('users.login');
    }

    // Authenticate User
    public function authenticate(Request $request)
    {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        // validate user credentials
        if (auth()->attempt($formFields)) {
            //generate new session id for user
            $request->session()->regenerate();
            return redirect('/')->with('message', 'You are now logged in!');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }
}