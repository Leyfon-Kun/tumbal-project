<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function registrasi()
    {
        return view('register');
    }

    public function registrasicheck(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:users',
            'password' => 'required',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        return redirect('/login')->with('success', 'Registration Succesfull! Please Login');
    }

    public function login()
    {
        return view('login');
    }
    public  function loginCheck(Request $request)
    {
        $request->validate([
            'name' => "required",
            'password' => "required",
        ]);

        $username = $request->name;
        $password = $request->password;

        if (Auth::attempt(['name' => $username, 'password' => $password,])) {
            return redirect('/dashboard');
        } else (dd('data tidak ditemukan'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
