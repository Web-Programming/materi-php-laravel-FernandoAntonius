<?php

namespace App\Http\Controllers\ControllerLatihan;

use App\Http\Controllers\Controller;
use App\Models\Materi;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listmateri = Materi::all();
        return view('latihanLayout.materi.index', ['listmateri' => $listmateri]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('latihanLayout.materi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|min:5|max:50',
            'deskripsi' => 'required|min:5|max:255',
        ]);
        Materi::create($data);
        return redirect()->route('materi.index')->with('status', 'Materi berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $materi = Materi::find($id);
        if (!isset($materi->id)) {
            return redirect()->route('materi.index')->with('failed', 'Materi tidak ditemukan!');
        }
        return view('latihanLayout.materi.detail', compact('materi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $materi = Materi::find($id);
        if (!isset($materi->id)) {
            return redirect()->route('materi.index')->with('failed', 'Materi tidak ditemukan!');
        }
        return view('latihanLayout.materi.edit', compact('materi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'nama' => 'required|min:5|max:50',
            'deskripsi' => 'required|min:5|max:50',
        ]);
        $materi = Materi::find($id);
        $materi->update($data);
        return redirect()->route('materi.index')->with('status', 'Materi berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $materi = Materi::find($id);
        if (isset($materi->id)) {
            $materi->delete();
            return redirect()->route('materi.index')->with('status', 'Materi berhasil dihapus!');
        }
        return redirect()->route('materi.index')->with('failed', 'Materi gagal dihapus!');
    }
}
