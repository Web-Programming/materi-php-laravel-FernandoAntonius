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
                            <li class="breadcrumb-item"><a href="{{url('/usermahasiswa')}}">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="app-content">
            <div class="container-fluid">
                <div class="row">
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
                    <h1>Ini adalah Dashboard Mahasiswa</h1>
                    <div>
                        <h4>Menekan Sidebar Fakultas, Dosen, Mahasiswa, dan Prodi hanya akan meredirect ke halaman
                            dashboard User</h4>
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