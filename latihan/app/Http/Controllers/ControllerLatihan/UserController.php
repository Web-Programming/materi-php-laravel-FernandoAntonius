<?php

namespace App\Http\Controllers\ControllerLatihan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        return view('latihanLayout.user');
    }
}