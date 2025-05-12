@extends('latihanLayout.master')

@section('content')
    <div class="container mt-4">
        <h3>Detail Mahasiswa</h3>
        <table class="table table-bordered">
            <tr>
                <th>Nama</th>
                <td>{{ $mahasiswa->nama }}</td>
            </tr>
            <tr>
                <th>Program Studi</th>
                <td>{{ $mahasiswa->program }}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>{{ $mahasiswa->status }}</td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td>{{ $mahasiswa->tanggal_lahir }}</td>
            </tr>
            <tr>
                <th>Tempat Lahir</th>
                <td>{{ $mahasiswa->tempat_lahir }}</td>
            </tr>
        </table>
        <a href="{{ url('mhs') }}" class="btn btn-secondary">Kembali</a>
    </div>
@endsection