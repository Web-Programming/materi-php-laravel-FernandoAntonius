<?php

namespace App\Http\Controllers\ControllerLatihan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return(view('latihanLayout.dosen.index'));
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
        $dosenList = [
            1 => (object)[
                'nama' => 'Sir Mister',
                'program' => 'Sistem Informasi',
                'status' => 'Tetap',
                'tanggal_lahir' => '01-01-1967',
                'tempat_lahir' => 'Inggris'
            ],
            2 => (object)[
                'nama' => 'Davis',
                'program' => 'Informatika',
                'status' => 'Kontrak',
                'tanggal_lahir' => '17-08-1945',
                'tempat_lahir' => 'Palembang'
            ],
        ];

        $dosen = $dosenList[$id];
        return view('latihanLayout.dosen.detail', compact('dosen'));
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
