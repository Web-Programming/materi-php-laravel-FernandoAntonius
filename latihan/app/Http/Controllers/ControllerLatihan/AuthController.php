<?php

namespace App\Http\Controllers\ControllerLatihan;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    function login(){
        $user = Auth::user();

        //jik user sudah login
        if($user){
            //cek level
            if($user->level == 'admin'){
                return redirect()->intended('admin');
            } else if($user->level == 'user'){
                return redirect()->intended('user');
            } else if($user->level == 'dosen'){
                return redirect()->intended('dosen');
            } else if($user->level == 'mahasiswa'){
                return redirect()->intended('mahasiswa');
            }
        }

        return view("latihanLayout.login");
    }

    function do_login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);
        //menyiapkan variabel cridentials
        $credentials = $request->only('email', 'password');

        //cek cridentials ke tabel users meggunakan Auth
        if(Auth::attempt($credentials)){
            //jika berhasil login
            //cek level user
            $user = Auth::user();
            if($user->level == 'admin'){
                return redirect()->intended('admin');
            } else if($user->level == 'user'){
                return redirect()->intended('user');
            } else if($user->level == 'dosen'){
                return redirect()->intended('dosen');
            } else if($user->level == 'mahasiswa'){
                return redirect()->intended('mahasiswa');
            }
            return redirect()->intended('/');
        }

        //jika login gagal
        return redirect('login')
            ->withErrors([
                'failed' => 'User tidak ditemukan atau password yang anda masukkan salah'
            ])
            ->withInput();
    }

    function register(){
        return view("latihanLayout.register");
    }

    function do_register(Request $request){
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:8',
                'level' => 'required|in:user,admin,dosen,mahasiswa'
            ]
        );
        if($validator->fails()){
            return redirect("register")
            ->withErrors($validator)
            ->withInput();    
        }

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->level = $request->level;
        $user->save();

        return redirect('login');
    }

    function logout(){
        Auth::logout();
        return redirect('login');
    }

}