<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin() {
        return view('login');
    }


   public function login(Request $request)
{
    $credentials = $request->only('email', 'password');
      
    if (Auth::attempt($credentials)) {
        return redirect('/')->with('success', 'Giriş başarılı!');
    }

    return back()->with('error', 'Bilgiler yanlış!');
}


    public function register(Request $request) {
    
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:4'
    ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

         return redirect('/login')->with('success', 'Kayıt başarılı!');
    }

    public function showRegister()
{
    return view('register');
}

    public function logout() {
        Auth::logout();
        return redirect('/');
    }
}