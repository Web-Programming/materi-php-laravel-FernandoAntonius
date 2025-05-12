@extends('latihanLayout.master')

@section('content')
    <h1>Delete Materi</h1>
    <p>Are you sure you want to delete this materi?</p>

    <form action="{{ route('materi.destroy', $materi->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Yes, Delete</button>
        <a href="{{ route('materi.index') }}">Cancel</a>
    </form>
@endsection