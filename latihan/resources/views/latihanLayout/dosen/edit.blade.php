@extends('latihanLayout.master')

@section('title', "Halaman Edit Dosen")

@section('content')
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Dosen</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('/dosen') }}">Dosen</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Dosen</li>
                    </ol>
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content Header-->
    <!--begin::App Content-->
    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Dosen : {{ $dosen->nama }}</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse" title="Collapse">
                                    <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                                    <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-lte-toggle="card-remove" title="Remove">
                                    <i class="bi bi-x-lg"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">

                            <form action="{{ url('/dosen/' . $dosen->id) }}" method="post">
                                @method('PUT')
                                @csrf
                                <div class="">
                                    <label class="">Program Studi</label>
                                    <select class="form-control" name="prodi_id">
                                        <option value="">Pilih Program Studi</option>
                                        @foreach ($prodi as $item)
                                            <option value="{{ $item->id }}" {{ $dosen->prodi_id == $item->id ? 'selected' : '' }}>
                                                {{ $item->nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('prodi_id')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="">
                                    <label class="">Nama</label>
                                    <input class="form-control" type="text" name="nama"
                                        value="{{ old('nama', $dosen->nama) }}">
                                    @error('nama')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="">
                                    <label class="">Status Kerja</label>
                                    <select class="form-control" name="status_kerja">
                                        <option value="">Pilih Status Kerja</option>
                                        <option value="Tetap" {{ old('status_kerja', $dosen->status_kerja) == 'Tetap' ? 'selected' : '' }}>Tetap</option>
                                        <option value="Kontrak" {{ old('status_kerja', $dosen->status_kerja) == 'Kontrak' ? 'selected' : '' }}>Kontrak</option>
                                    </select>
                                    @error('status_kerja')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="">
                                    <label class="">Tanggal Lahir</label>
                                    <input class="form-control" type="date" name="tanggal_lahir"
                                        value="{{ old('tanggal_lahir', $dosen->tanggal_lahir) }}">
                                    @error('tanggal_lahir')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="">
                                    <label class="">Tempat Lahir</label>
                                    <input class="form-control" type="text" name="tempat_lahir"
                                        value="{{ old('tempat_lahir', $dosen->tempat_lahir) }}">
                                    @error('tempat_lahir')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-warning">Update</button>
                            </form>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">Footer</div>
                        <!-- /.card-footer-->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content-->
@endsection