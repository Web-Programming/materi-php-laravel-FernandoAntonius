@extends('latihanLayout.master')

@section('content')
    <main class="app-main">
        <!-- Content Header -->
        <div class="app-content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="app-content">
            <div class="container-fluid">
                <!-- Info Boxes -->
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>Fakultas</h3>
                                <p>Cek Fakultas</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-briefcase"></i>
                            </div>
                            <a href="{{url('/fakultas')}}" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>Dosen</h3>
                                <p>Cek Dosen</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-chart-bar"></i>
                            </div>
                            <a href="{{url('/dosen')}}" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>Mahasiswa</h3>
                                <p>Cek Mahasiswa</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-user-plus"></i>
                            </div>
                            <a href="{{url('/mhs')}}" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-gray">
                            <div class="inner">
                                <h3>Program Studi</h3>
                                <p>Cek Program Studi</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-chart-pie"></i>
                            </div>
                            <a href="{{url('/prodi')}}" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>Materi</h3>
                                <p>Cek Materi</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-book"></i>
                            </div>
                            <a href="{{url('/materi')}}" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div>
                    <h1>Ini adalah Dashboard Admin</h1>
                    <div>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta quis quae nihil possimus rerum omnis
                        ducimus fugit. Rerum nam fugiat alias aliquam architecto fugit, quo velit beatae ratione dolore
                        cupiditate!
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus fugit, quasi earum voluptate,
                        assumenda magni iure nobis neque excepturi quas temporibus, veniam iste architecto ab. Minima
                        necessitatibus facere quisquam repellat?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta quis quae nihil possimus rerum omnis
                        ducimus fugit. Rerum nam fugiat alias aliquam architecto fugit, quo velit beatae ratione dolore
                        cupiditate!
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus fugit, quasi earum voluptate,
                        assumenda magni iure nobis neque excepturi quas temporibus, veniam iste architecto ab. Minima
                        necessitatibus facere quisquam repellat?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta quis quae nihil possimus rerum omnis
                        ducimus fugit. Rerum nam fugiat alias aliquam architecto fugit, quo velit beatae ratione dolore
                        cupiditate!
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus fugit, quasi earum voluptate,
                        assumenda magni iure nobis neque excepturi quas temporibus, veniam iste architecto ab. Minima
                        necessitatibus facere quisquam repellat?
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection