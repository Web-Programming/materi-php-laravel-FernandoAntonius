<?php

namespace App\Http\Controllers\ControllerLatihan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserDosenController extends Controller
{
    public function index() {
        return view('latihanLayout.userdosen');
    }
}
