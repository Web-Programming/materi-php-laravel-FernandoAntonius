<?php

namespace App\Http\Controllers\ControllerLatihan;

use App\Http\Controllers\Controller;
use App\Models\Dosen;
use App\Models\Prodi;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listdosen = Dosen::all();
        return view('latihanLayout.dosen.index', ['listdosen' => $listdosen]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $prodi = Prodi::all();
        return view('latihanLayout.dosen.create', ['prodi' => $prodi]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|min:5|max:50',
            'prodi_id' => 'required',
            'status_kerja' => 'required',
            'tanggal_lahir' => 'required|date',
            'tempat_lahir' => 'required|min:3|max:50',
        ]);
        Dosen::create($data);
        return redirect()->route('dosen.index')->with('status', 'Dosen berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $dosen = Dosen::find($id);
        if (!isset($dosen->id)) {
            return redirect()->route('dosen.index')->with('failed', 'Dosen tidak ditemukan!');
        }
        return view('latihanLayout.dosen.detail', compact('dosen'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dosen = Dosen::find($id);
        if (!isset($dosen->id)) {
            return redirect()->route('dosen.index')->with('failed', 'Dosen tidak ditemukan!');
        }
        $prodi = Prodi::all();
        return view('latihanLayout.dosen.edit', compact('dosen', 'prodi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'nama' => 'required|min:5|max:50',
            'prodi_id' => 'required',
            'status_kerja' => 'required',
            'tanggal_lahir' => 'required|date',
            'tempat_lahir' => 'required|min:3|max:50',
        ]);
        $dosen = Dosen::find($id);
        $dosen->update($data);
        return redirect()->route('dosen.index')->with('status', 'Dosen berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dosen = Dosen::find($id);
        if (isset($dosen->id)) {
            $dosen->delete();
            return redirect()->route('dosen.index')->with('status', 'Dosen berhasil dihapus!');
        }
        return redirect()->route('dosen.index')->with('failed', 'Dosen gagal dihapus!');
    }
}
