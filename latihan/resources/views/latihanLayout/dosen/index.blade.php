@extends('latihanLayout.master')

@section('content')
    <div class="container mt-4">
        <h3>Daftar Dosen</h3>

        <a href="#" class="btn btn-primary mb-3">+ Tambah Dosen</a>

        @php
            $dosenList = [
                (object) [
                    'id' => 1,
                    'nama' => 'Sir Mister',
                    'program' => 'Sistem Informasi',
                    'status' => 'Tetap'
                ],
                (object) [
                    'id' => 2,
                    'nama' => 'Davis',
                    'program' => 'Informatika',
                    'status' => 'Kontrak'
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
                @foreach ($dosenList as $index => $dosen)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $dosen->nama }}</td>
                        <td>{{ $dosen->program }}</td>
                        <td>
                            @if ($dosen->status == 'Tetap')
                                <span class="badge badge-success">{{ $dosen->status }}</span>
                            @else
                                <span class="badge badge-danger">{{ $dosen->status }}</span>
                            @endif
                        </td>
                        <td>
                            <center>
                                <a href="{{ url('dosen/' . $dosen->id) }}" class="btn btn-info btn-sm">Detail</a>
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Hapus</button>
                            </center>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection