@extends('latihanLayout.master')

@section('content')
    <div class="container mt-4">
        <h3>Daftar Mahasiswa</h3>

        <a href="#" class="btn btn-primary mb-3">+ Tambah Mahasiswa</a>

        @php
            $mahasiswaList = [
                (object) [
                    'id' => 1,
                    'nama' => 'Budiman Putra Beriman',
                    'program' => 'Sistem Informasi',
                    'status' => 'Aktif'
                ],
                (object) [
                    'id' => 2,
                    'nama' => 'Luther',
                    'program' => 'Teknik Elektro',
                    'status' => 'Cuti'
                ],
                (object) [
                    'id' => 3,
                    'nama' => 'Fernando',
                    'program' => 'Informatika',
                    'status' => 'Aktif'
                ],
            ];
        @endphp

        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Program Studi</th>
                    <th>Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswaList as $index => $mahasiswa)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $mahasiswa->nama }}</td>
                        <td>{{ $mahasiswa->program }}</td>
                        <td>
                            @if ($mahasiswa->status == 'Aktif')
                                <span class="badge badge-success">{{ $mahasiswa->status }}</span>
                            @else
                                <span class="badge badge-danger">{{ $mahasiswa->status }}</span>
                            @endif
                        </td>
                        <td>
                            <center>
                                <a href="{{ url('mhs/' . $mahasiswa->id) }}" class="btn btn-info btn-sm">Detail</a>
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Hapus</button>
                            </center>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection