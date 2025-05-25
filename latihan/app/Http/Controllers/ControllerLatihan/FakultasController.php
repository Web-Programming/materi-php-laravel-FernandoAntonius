<?php

namespace App\Http\Controllers\ControllerLatihan;

use App\Http\Controllers\Controller;
use App\Models\Fakultas;
use Illuminate\Http\Request;

class FakultasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listfakultas = Fakultas::all(); //select * from fakultas;
        return view("latihanLayout.fakultas.index", 
            ['listfakultas' => $listfakultas]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $fakultas = Fakultas::all();
        return view("latihanLayout.fakultas.create", [
            'fakultas' => $fakultas
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         //Form Validation
        $data = $request->validate([
            'nama' => 'required|min:5|max:50'
        ]);
        Fakultas::create([
            'nama' => $data['nama'],
        ]);
        return redirect()->route('fakultas.index')->with("status", "Fakultas berhasil disimpan!");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $fakultas = Fakultas::find($id);
        if(!isset($fakultas->id)){
            return redirect()->route('fakultas.index')->with("failed", "Fakultas tidak ditemukan!");
        }
        return view('latihanLayout.fakultas.detail', compact('fakultas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $fakultas = Fakultas::find($id);
        if(!isset($fakultas->id)){
            return redirect()->route('fakultas.index')->with("failed", "Fakultas tidak ditemukan!");
        }
        return view('latihanLayout.fakultas.edit', compact('fakultas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'nama' => 'required|min:5|max:50'
        ]);
        $fakultas = Fakultas::find($id);
        $fakultas->update([
            'nama' => $data['nama'],
        ]);
        return redirect()->route('fakultas.index')->with('status', 'Fakultas berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $fakultas = Fakultas::find($id);
        if(isset($fakultas->id)){
            $fakultas->delete();
            return redirect()->route('fakultas.index')->with('status', 'Fakultas berhasil dihapus!');
        }
        return redirect()->route('fakultas.index')->with('failed', 'Fakultas gagal dihapus!');
    }
}
