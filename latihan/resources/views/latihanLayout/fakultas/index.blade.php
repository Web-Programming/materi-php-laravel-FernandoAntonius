@extends('latihanLayout.master')

@section('content')
    <div class="container mt-4">
        <h3>Daftar Fakultas</h3>

        <a href="#" class="btn btn-primary mb-3">+ Tambah Fakultas</a>

        @php
            $fakultasList = [
                (object) [
                    'id' => 1,
                    'nama' => 'Ilmu Komputer & Rekayasa',
                    'deskripsi' => 'Fakultas yang membawahi jurusan ilmu komputer dan rekayasa'
                ],
                (object) [
                    'id' => 2,
                    'nama' => 'Ekonomi & Bisnis',
                    'deskripsi' => 'Fakultas yang membawahi jurusan ekonomi dan bisnis'
                ],
            ];
        @endphp

        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Fakultas</th>
                    <th>Deskripsi</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($fakultasList as $index => $fakultas)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $fakultas->nama }}</td>
                        <td>{{ $fakultas->deskripsi }}</td>
                        <td>
                            <center>
                                <a href="#" class="btn btn-info btn-sm">Detail</a>
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Hapus</button>
                            </center>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection