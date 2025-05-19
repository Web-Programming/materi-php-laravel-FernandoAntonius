@extends('latihanLayout.master')

@section('content')
    <div class="container mt-4">
        <h3>Daftar Program Studi</h3>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status')}}
            </div>
        @endif
        <a href="{{url('prodi/create')}}" class="btn btn-primary mb-3">+ Tambah Program Studi</a>

        @php
            $prodiList = [
                (object) [
                    'id' => 1,
                    'kode_prodi' => 'SI',
                    'nama' => 'Sistem Informasi',
                    'deskripsi' => 'Program Studi Sistem Informasi'
                ],
                (object) [
                    'id' => 2,
                    'kode_prodi' => 'MN',
                    'nama' => 'Manajemen',
                    'deskripsi' => 'Program Studi Manajemen'
                ],
                (object) [
                    'id' => 3,
                    'kode_prodi' => 'AK',
                    'nama' => 'Akuntasi',
                    'deskripsi' => 'Program Studi Akuntasi'
                ],
                (object) [
                    'id' => 4,
                    'kode_prodi' => 'TE',
                    'nama' => 'Teknik Elektro',
                    'deskripsi' => 'Program Studi Teknik Elektro'
                ],
                (object) [
                    'id' => 5,
                    'kode_prodi' => 'IT',
                    'nama' => 'Informatika',
                    'deskripsi' => 'Program Studi Informatika'
                ],
                (object) [
                    'id' => 6,
                    'kode_prodi' => 'MI',
                    'nama' => 'Manajemen Informatika',
                    'deskripsi' => 'Program Studi Manajemen Informatika'
                ],
                (object) [
                    'id' => 7,
                    'kode_prodi' => 'MS',
                    'nama' => 'Magister Sistem Informasi',
                    'deskripsi' => 'Program Studi Magister Sistem Informasi'
                ],
            ];
        @endphp

        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Program Studi</th>
                    <th>Deskripsi</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($prodiList as $index => $prodi)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $prodi->kode_prodi }}</td>
                        <td>{{ $prodi->nama }}</td>
                        <td>
                            <center>
                                <form action="{{url('/prodi/' . $prodi->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ url('prodi/' . $prodi->id) }}" class="btn btn-info btn-sm">Detail</a>
                                    <a href="{{ url('prodi/' . $prodi->id . '/edit')}}" class="btn btn-warning btn-sm">Edit</a>
                                    <button class="btn btn-danger btn-sm" type="submit"
                                        onclick="return confirm('Hapus data ini?')">Hapus</button>
                                </form>
                            </center>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection