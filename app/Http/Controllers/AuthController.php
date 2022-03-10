<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Rules\Cyrillic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

// Controller for registration and login
class AuthController extends Controller
{
    public function loginGetHandler(Request $request){
        return view('components.login');
    }

    public function loginPostHandler(Request $request){
        $credentials = $request->validate([
            'login'=> ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->route('about');
        } else {
            return back()->withInput()->with("login_error", true);
        }
    }

    public function registerGetHandler(Request $request){
        return view('components.register');
    }

    public function registerPostHandler(Request $request){
        $credentials = $request->validate([
            'name' => ['required', new Cyrillic],
            'surname' => ['required', new Cyrillic],
            'patronymic' => ['nullable', new Cyrillic],
            'login' => ['required', 'unique:users'],
            'email' => ['required', 'unique:users', 'email'],
            'password' => ['required', 'min:6'],
            'password_repeat'=> ['required', 'same:password'],
            'rules' => ['required', 'boolean']
        ]);

        $credentials['password'] = Hash::make($credentials['password']);

        $user = User::create($credentials);
        if ($user) {
            return redirect()->route('about');
        }

        return back()->withInput()->with('register_error', true);
    }
}
