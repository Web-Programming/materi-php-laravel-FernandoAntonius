<?php

namespace App\Http\Controllers\ControllerLatihan;

use App\Http\Controllers\Controller;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Email;
use Validator;

class AuthController extends Controller
{
    //
}

function login() {
    return view('latihanLayout.login');
}

function do_login() {

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
