<?php

namespace App\Http\Controllers\ControllerLatihan;

use App\Http\Controllers\Controller;
use App\Models\Prodi;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listprodi = Prodi::all(); // Select * FROM prodi 
        return view('latihanLayout.prodi.index'); // ['listprodi'=>$listprodi]));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('latihanLayout.prodi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        // Form Validation
        $data = $request->validate ([
            'kode_prodi' => 'required|min:2|max:2',
            'nama' => 'required|min:5|max:25'
        ]);

        // $data = $request->all();
        Prodi::create([
            'kode_prodi' => $data('kode_prodi'),
            'nama' => $data('nama'),
            'deskripsi' => $data('deskripsi'),
        ]);

        /* Cara 2
        Prodi::create([
            'nama' => $data('nama'),
            'deskripsi' => $data('deskripsi'),
        ]); */

        /* Cara 3
        $newprodi = new Prodi();
        $newprodi -> nama = $data['nama'];
        $newprodi -> deskripsi = $data['deskripsi']; */
        
        return redirect('prodi')->with('status', 'Program Studi Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {      
            
            $prodiList = [
                1 => (object)[
                    'kode_prodi' => 'SI',
                    'nama' => 'Sistem Informasi',
                    'deskripsi' => 'Program Studi Sistem Informasi'
                ],
                2 => (object)[
                    'kode_prodi' => 'MN',
                    'nama' => 'Manajemen',
                    'deskripsi' => 'Program Studi Manajemen'
                ],
                3 => (object)[
                    'kode_prodi' => 'AK',
                    'nama' => 'Akuntasi',
                    'deskripsi' => 'Program Studi Akuntasi'
                ],
                4 => (object)[
                    'kode_prodi' => 'TE',
                    'nama' => 'Teknik Elektro',
                    'deskripsi' => 'Program Studi Teknik Elektro'
                ],
                5 => (object)[
                    'kode_prodi' => 'IT',
                    'nama' => 'Informatika',
                    'deskripsi' => 'Program Studi Informatika'
                ],
                6 => (object)[
                    'kode_prodi' => 'MI',
                    'nama' => 'Manajemen Informatika',
                    'deskripsi' => 'Program Studi Manajemen Informatika'
                ],
                7 => (object)[
                    'kode_prodi' => 'MS',
                    'nama' => 'Magister Sistem Informasi',
                    'deskripsi' => 'Program Studi Magister Sistem Informasi'
                ],
            ];
    
            $prodi = $prodiList[$id]; // */
            
            /*
            $prodi = Prodi::find($id);
            if (!isset($prodi->id)) {
                return redirect('prodi')->with('failed', 'Program Studi tidak ditemukan!');
            } // */
    
            return view('latihanLayout.prodi.detail', compact('prodi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $prodi = Prodi::find($id);

        if (!isset($prodi->id)) {
            return redirect('prodi')->with('failed', 'Program Studi tidak ditemukan!');
        }

        return view('latihanLayout.prodi.edit', ['prodi' => $prodi]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate ([
            'kode_prodi' => 'required|min:2|max:2',
            'nama' => 'required|min:5|max:25',
            'deskripsi' => 'max:100'
        ]);

        $prodi = Prodi::find($id);
        $prodi -> kode_prodi = $data['kode_prodi'];
        $prodi -> nama = $data['nama'];
        $prodi -> deskripsi = $data['deskripsi'];
        $prodi -> save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $prodi = Prodi::find($id);

        if (isset($prodi->id)) {
            $prodi -> delete();
            return redirect('prodi')->with('status', 'Program Studi berhasil dihapus!');
        }
        
        /* $delete = DB.table('prodis')
            -> where('id', $id)
            -> delete(); // */
        
        return redirect('prodi') ->with('failed', 'Program Studi gagal dihapus!');
 }
}
