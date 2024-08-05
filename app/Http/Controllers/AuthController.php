<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Parse\ParseException;
use Parse\ParseUser;
use Illuminate\Support\Facades\Password;

class AuthController extends Controller
{
    public function signup(){
        return view('auth.signup');
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $user = new ParseUser();
        $user->set("username", $request->input('name'));
        $user->set("name", $request->input('name'));
        $user->set("email", $request->input('email'));
        $user->set("password", $request->input('password'));
        $user->set("role", 'user');

        try {
            $user->signUp();
            return redirect()->route('signin')->with('success', 'Registration successful. Please log in.');
        } catch (ParseException $e) {
            return redirect()->back()->withInput()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function signin(){
        return view('auth.login');
    }

     public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        try {
            $user = ParseUser::logIn($credentials['username'], $credentials['password']);
            // Assuming $userObject is the ParseUser object
            $userdata = [
                'id' => $user->getObjectId(),
                'name' => $user->get('name'),
                'role' => $user->get('role'),
            ];

            session(['user' => $userdata]);
            return redirect()->route('home')->with('success', 'Login successful.');
        } catch (ParseException $e) {
            throw ValidationException::withMessages(['error' => 'Invalid username or password.']);
        }
    }

    public function logout()
    {
        ParseUser::logOut();
        session(['user' => null]);
        return redirect()->route('signin')->with('success', 'You have been logged out.');
    }

}
