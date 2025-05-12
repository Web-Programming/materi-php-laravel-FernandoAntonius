{{-- Include --}}
@include('layout.header', ['title' => 'Halaman Fakultas'])

<h2>Fakultas</h2>
<ul>
    @if (count($fakultas) > 0)
        @foreach ($fakultas as $item)
            <li> {{ $item }} </li>
        @endforeach
    @else
        <li>Belum ada data</li>
    @endif
</ul>

@include('layout.footer')

{{-- Extends --}}
@extends('layoutContoh.masterContoh')
@section('title', 'Halaman Fakultas')

@section('content')
<h2>Fakultas</h2>
<ul>
    @if (count($fakultas) > 0)
        @foreach ($fakultas as $item)
            <li> {{ $item }} </li>
        @endforeach
    @else
        <li>Belum ada data</li>
    @endif
</ul>
@endsection

