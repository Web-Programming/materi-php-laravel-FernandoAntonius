@extends('latihanLayout.master')

@section('content')
    <div class="container mt-4">
        <h3>Detail Fakultas</h3>
        <table class="table table-bordered">
            <tr>
                <th>Nama Fakultas</th>
                <td>{{ $fakultas->nama }}</td>
            </tr>
            <tr>
                <th>Deskripsi</th>
                <td>{{ $fakultas->deskripsi }}</td>
            </tr>
        </table>
        <a href="{{ route('fakultas.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
@endsection