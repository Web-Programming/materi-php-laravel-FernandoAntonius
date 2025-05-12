@extends('latihanLayout.master')

@section('content')
    <div class="container mt-4">
        <h3>Detail Materi</h3>
        <table class="table table-bordered">
            <tr>
                <th>Nama Materi</th>
                <td>{{ $materi->nama }}</td>
            </tr>
            <tr>
                <th>Deskripsi</th>
                <td>{{ $materi->deskripsi }}</td>
            </tr>
        </table>
        <a href="{{ url('materi') }}" class="btn btn-secondary">Kembali</a>
    </div>
@endsection