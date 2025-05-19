@extends('latihanLayout.master')

@section('content')
    <div class="container mt-4">
        <form action="{{url('/prodi')}}" method="post">
            @csrf
            <div class="">
                <label class="for">Kode Prodi </label>
                <input class="form-control" type="text" name="kode_prodi" value="{{ old('kode_prodi')}}">
                @error('kode_prodi')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="">
                <label class="for">Nama Prodi</label>
                <input class="form-control" type="text" name="nama" value="{{ old('Nama')}}">
                @error('nama')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="">
                <label class="for">Deskripsi</label>
                <input class="form-control" type="text" name="deskripsi" value="{{ old('deskripsi')}}">
                @error('deskripsi')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>
@endsection