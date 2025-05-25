<?php

namespace App\Http\Controllers\ControllerLatihan;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use App\Models\Prodi;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listmahasiswa = Mahasiswa::all();
        return view('latihanLayout.mahasiswa.index', ['listmahasiswa' => $listmahasiswa]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $prodi = Prodi::all();
        return view('latihanLayout.mahasiswa.create', ['prodi' => $prodi]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|min:5|max:50',
            'prodi_id' => 'required',
            'tanggal_lahir' => 'required|date',
            'tempat_lahir' => 'required|min:3|max:50',
        ]);
        Mahasiswa::create($data);
        return redirect()->route('mhs.index')->with('status', 'Mahasiswa berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $mahasiswa = Mahasiswa::find($id);
        if (!isset($mahasiswa->id)) {
            return redirect()->route('mhs.index')->with('failed', 'Mahasiswa tidak ditemukan!');
        }
        return view('latihanLayout.mahasiswa.detail', compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mahasiswa = Mahasiswa::find($id);
        if (!isset($mahasiswa->id)) {
            return redirect()->route('mhs.index')->with('failed', 'Mahasiswa tidak ditemukan!');
        }
        $prodi = Prodi::all();
        return view('latihanLayout.mahasiswa.edit', compact('mahasiswa', 'prodi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'nama' => 'required|min:5|max:50',
            'prodi_id' => 'required',
            'tanggal_lahir' => 'required|date',
            'tempat_lahir' => 'required|min:3|max:50',
        ]);
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->update($data);
        return redirect()->route('mhs.index')->with('status', 'Mahasiswa berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mahasiswa = Mahasiswa::find($id);
        if (isset($mahasiswa->id)) {
            $mahasiswa->delete();
            return redirect()->route('mhs.index')->with('status', 'Mahasiswa berhasil dihapus!');
        }
        return redirect()->route('mhs.index')->with('failed', 'Mahasiswa gagal dihapus!');
    }
}
