<?php

namespace App\Http\Controllers\ControllerLatihan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('latihanLayout.mahasiswa.index');
    }

        /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $mahasiswaList = [
            1 => (object)[
                'nama' => 'Budiman Putra Beriman',
                'program' => 'Sistem Informasi',
                'status' => 'Aktif',
                'tanggal_lahir' => '10-10-2006',
                'tempat_lahir' => 'Palembang'
            ],
            2 => (object)[
                'nama' => 'Luther',
                'program' => 'Teknik Elektro',
                'status' => 'Cuti',
                'tanggal_lahir' => '10-03-2006',
                'tempat_lahir' => 'Palembang'
            ],
            3 => (object)[
                'nama' => 'Fernando',
                'program' => 'Informatika',
                'status' => 'Aktif',
                'tanggal_lahir' => '15-02-2007',
                'tempat_lahir' => 'Palembang'
            ],
        ];
        
        $mahasiswa = $mahasiswaList[$id];
        return view('latihanLayout.mahasiswa.detail', compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

