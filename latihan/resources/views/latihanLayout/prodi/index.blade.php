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
                    'nama' => 'Sistem Informasi',
                    'deskripsi' => 'Program Studi Sistem Informasi'
                ],
                (object) [
                    'id' => 2,
                    'nama' => 'Manajemen',
                    'deskripsi' => 'Program Studi Manajemen'
                ],
                (object) [
                    'id' => 3,
                    'nama' => 'Akuntasi',
                    'deskripsi' => 'Program Studi Akuntasi'
                ],
                (object) [
                    'id' => 4,
                    'nama' => 'Teknik Elektro',
                    'deskripsi' => 'Program Studi Teknik Elektro'
                ],
                (object) [
                    'id' => 5,
                    'nama' => 'Informatika',
                    'deskripsi' => 'Program Studi Informatika'
                ],
                (object) [
                    'id' => 6,
                    'nama' => 'Manajemen Informatika',
                    'deskripsi' => 'Program Studi Manajemen Informatika'
                ],
                (object) [
                    'id' => 7,
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
                        <td>{{ $prodi->nama }}</td>
                        <td>{{ $prodi->deskripsi }}</td>
                        <td>
                            <center>
                                <a href="{{ url('prodi/' . $prodi->id) }}" class="btn btn-info btn-sm">Detail</a>
                                <a href="{{ url('prodi/' . $prodi->id . '/edit')}}" class="btn btn-warning btn-sm">Edit</a>
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Hapus</button>
                            </center>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection