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
                            <li class="breadcrumb-item"><a href="{{url('/user')}}">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="app-content">
            <div class="container-fluid">
                <div>
                    <h1>Ini adalah Dashboard User</h1>
                    <div>
                        <h4>Menekan Sidebar Fakultas, Dosen, Mahasiswa, Prodi, dan Materi hanya akan meredirect ke halaman
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