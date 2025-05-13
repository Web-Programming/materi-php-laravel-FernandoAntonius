@extends('latihanLayout.master')

@section('content')
    <div class="container mt-4">
        <form action="{{url('/prodi')}}" method="post">
            @csrf
            <div class="">
                <label class="for">Nama Prodi </label>
                <input class="form-control" type="text" name="nama">

            </div>
            <div class="">
                <label class="for">Deskripsi</label>
                <input class="form-control" type="text" name="deskripsi">
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>
@endsection