@extends('latihanLayout.master')

@section('content')
    <div class="container mt-4">
        <h3>Detail Mahasiswa</h3>
        <table class="table table-bordered">
            <tr>
                <th>Nama</th>
                <td>{{ $dosen->nama }}</td>
            </tr>
            <tr>
                <th>Program Studi</th>
                <td>{{ $dosen->program }}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>{{ $dosen->status }}</td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td>{{ $dosen->tanggal_lahir }}</td>
            </tr>
            <tr>
                <th>Tempat Lahir</th>
                <td>{{ $dosen->tempat_lahir }}</td>
            </tr>
        </table>
        <a href="{{ url('dosen') }}" class="btn btn-secondary">Kembali</a>
    </div>
@endsection