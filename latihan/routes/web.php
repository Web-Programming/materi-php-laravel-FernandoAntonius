<?php

use App\Http\Controllers\ControllerLatihan\AuthController;
use App\Http\Controllers\ControllerLatihan\MateriController;
use App\Http\Controllers\ControllerLatihan\MahasiswaController;
use App\Http\Controllers\ControllerLatihan\ProdiController;
use App\Http\Controllers\ControllerLatihan\DosenController;
use App\Http\Controllers\ControllerLatihan\FakultasController;
use App\Http\Controllers\ControllerLatihan\UserController;
use App\Http\Controllers\ControllerLatihan\AdminController;
use GuzzleHttp\Middleware;
use App\Http\Middleware\CekLogin;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\RouteAction;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get("/berita/{id}/{title?}", function ($id, $title = NULL) {
    return view('berita', ['id' => $id, 'title' => $title]);
});

Route::get('/total/{angka1?}/{angka2?}/{angka3?}', function ($angka1 = 0, $angka2 = 0, $angka3 = 0) {
    return view('hasil', ['angka1' => $angka1, 'angka2' => $angka2, 'angka3' => $angka3]);
});

Route::get('/fakultas', function () {
    // return view('fakultas.index', ["ilkom" => "Fakultas Ilmu Komputer dan Rekayasa"]);
    // return view('fakultas.index', ["fakultas" => ["Fakultas Ilmu Komputer dan Rekayasa", "Fakultas Ilmu Ekonomi"]]);
    // return view('fakultas.index')->with("fakultas", ["Fakultas Ilmu Komputer dan Rekayasa", "Fakultas Ilmu Ekonomi"]);

    $kampus = "Universitas Multi Data Palembang";
    // $fakultas = [];
    $fakultas = ["Fakultas Ilmu Komputer dan Rekayasa", "Fakultas Ilmu Ekonomi"];

    return view('fakultasContoh.index', compact('fakultas', 'kampus'));
});

Route::get('/materi/index', [MateriController::class,'index']);

# Route::get('/materi/detail/{$id}', [MateriControllerContoh::class, 'detail']);

/*
Route::resource('prodi', ProdiControllerContoh::class);

Route::apiResource('api/mhs', MhsApiController::class);
*/

// Latihan Layout
Route::resource('prodi', ProdiController::class);
Route::resource('materi', MateriController::class);
Route::resource('dosen', DosenController::class);
Route::resource('mhs', MahasiswaController::class);
Route::resource('fakultas', FakultasController::class);

Route::get('/master', function(){
    return view('latihanLayout.master');
});

Route::get('/master', function(){
    return view('latihanLayout.masterisi');
});

Route::get("/login", [AuthController::class, 'login'])->name('login');
Route::post("/login", [AuthController::class, 'do_login']);
Route::get("/register", [AuthController::class, 'register']);
Route::post("/register", [AuthController::class, 'do_register']);
Route::get("/logout", [AuthController::class, 'logout']);

Route::group(['middleware' => ['auth']], function(){
    Route::group(['middleware' => [CekLogin::class.':admin']], function(){
        Route::get("/admin", [AdminController::class, 'index']);
        Route::resource('prodi', ProdiController::class);
        Route::resource('materi', MateriController::class);
        Route::resource('dosen', DosenController::class);
        Route::resource('mhs', MahasiswaController::class);
        Route::resource('fakultas', FakultasController::class);
    });

    Route::group(['middleware' => [CekLogin::class.':user']], function(){
        Route::get("/user", [UserController::class, 'index']);
    });

    /*
    Route::group(['middleware' => [CekLogin::class.':dosen']], function(){
        Route::get("/master", [UserController::class, 'index']);
        Route::resource('materi', MateriController::class);
        Route::resource('mhs', MahasiswaController::class);
    });

    Route::group(['middleware' => [CekLogin::class.':mahasiswa']], function(){
        Route::get("/master", [UserController::class, 'index']);
        Route::resource('materi', MateriController::class);
    }); */
});