<?php

namespace App\Http\Controllers\ControllerLatihan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('latihanLayout.materi.index');
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
        $materiList = [
            1 => (object)[
                'nama' => 'Pengenalan Laravel',
                'deskripsi' => 'Materi dasar tentang framework Laravel'
            ],
            2 => (object)[
                'nama' => 'Routing Laravel',
                'deskripsi' => 'Membahas penggunaan route dan controller'
            ],
            3 => (object)[
                'nama' => 'Template',
                'deskripsi' => 'Contoh Template'
            ],
        ];
        
        $materi = $materiList[$id];
        return view('latihanLayout.materi.detail', compact('materi'));
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
