<?php

namespace App\Http\Controllers\ControllerLatihan;

use App\Http\Controllers\Controller;
use Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Email;
use Validator;

class AuthController extends Controller
{
    //
}

function login() {
    return view('latihanLayout.login');

    // Jika user sudah login
    if($user) {
        // Cek level
        if ($user->level == 'admin') {
            return redirect()->intended('admin');
        } 
    }
}

function do_login(Request $request) {
    $request->validate([
        'email'=>'required|email',
        'password'=>'required|min:8'
    ]);
    // Menyiapkan variabel cridentials
    $credentials = $request->only('email', 'password');    
    // Cek cridentials ke tabel user menggunakan Auth
    if (Auth::attempt($credentials)) {
        // Jika berhasil login
        // Cek level user
        $user = Auth::login();
        if ($user->level == 'admin') {
            return redirect()->intended('admin');
        } else if ($user->level == 'user') {
            return redirect()->intended('user');
        }
        return redirect()->intended('/');

        // Jika gagal login
        return redirect('login')
            ->withErrors([
                'failed' => 'User tidak terdaftar atau password tidak mencocoki'
            ])
            ->withInput();
    }
}

function register() {
    return view('latihanLayout.register');
}

function do_register(Request $request) {
    $validator = Validator::make(
        $request->all(),
        [
            'name' => 'required',
            'email' => 'reqiuired|email|unique:users',
            'password' => 'required|min:8'
        ]
        );
        if ($validator->fails()) {
            return redirect("register")
            ->withErrors($validator)
            ->withInput();
        }

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->level = 'user';
        $user->save();

        return redirect('login');
}
