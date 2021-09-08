@extends('layoutAdmin.master')
@section('content')
<div id="layoutSidenav">
    <div id="layoutSidenav_content">
        <main>
            <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
                <div class="container">
                    <div class="page-header-content pt-4">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-auto mt-4">
                                <h1 class="page-header-title">
                                    <div class="page-header-icon"><i data-feather="filter"></i></div>
                                    Tabel Daftar Anggota RT 01 RW 37 Sumbersari
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Main page content-->
            <div class="container mt-n10">
                <div class="card mb-4">
                    <div class="card-header"></div>
                    <div class="card-body">
                        <div class="datatable">
                            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Alamat</th>
                                        <th>Detail</th>
                                        <th>Anggota</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach($adress as $index => $item)
                                        
                                    
                                    <tr>
                                        <td>{{$item->nama}}</td>
                                        <td>{{$item->lokasi}}</td>
                                        <td>
                                            <a class="badge badge-warning badge-pill" href="{{url('/detailAlamat', $item->id)}}">Lihat</a>
                                        </td>
                                        <td><div class="badge badge-primary badge-pill">Full-time</div></td>
                                        <td>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="more-vertical"></i></button>
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                        </td>
                                    </tr>
                                    
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card card-icon mb-4">
                    <div class="row no-gutters">
                        <div class="col">
                            <div class="card-body py-5">
                                <h5 class="card-title">Tambah Alamat Desa</h5>
                                <p class="card-text">DataTables is a third party plugin that is used to generate the demo table above. 
                                    For more information about how to use DataTables with your project, please visit the official DataTables documentation.</p>
                                <a class="btn btn-primary btn-sm" href="{{url('/alamatbaru')}}" target="_blank">
                                    <i class="mr-1" data-feather="external-link"></i>
                                    Tambah
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="footer mt-auto footer-light">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 small">Copyright &copy; Your Website 2020</div>
                    <div class="col-md-6 text-md-right small">
                        <a href="#!">Privacy Policy</a>
                        &middot;
                        <a href="#!">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>

@endsection