@extends('layouts.master')
@section('content')
<div id="layoutSidenav_content">
    <main>
        <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
            <div class="container">
                <div class="page-header-content pt-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto mt-4">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="activity"></i></div>
                                Tambah Anggota Tervaksinasi Sesuai Alamat 
                            </h1>
                            <div class="page-header-subtitle">Sistem Pendataan Warga Tervaksinasi Lingk. Sumbersari</div>
                        </div>
                        <div class="col-12 col-xl-auto mt-4">
                            <button class="btn btn-white p-3" id="reportrange">
                                <i class="mr-2 text-primary" data-feather="calendar"></i>
                                <span></span>
                                <i class="ml-1" data-feather="chevron-down"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container mt-n10">
            <div class="row">
                <div class="col-xxl-4 col-xl-12 mb-4">
                    <div class="card h-100">
                        <div class="card-body h-100 d-flex flex-column justify-content-center py-5 py-xl-4">
                            <div class="row align-items-center">
                                <div class="col-xl-12 col-xxl-12">
                                    <div class="text-center text-xl-left text-xxl-center px-4 mb-4 mb-xl-0 mb-xxl-4">
                                            <div class="form-group col-lg-12">
                                                <label>Alamat</label>
                                                    <input class="form-control" value="{{$adress->nama}}" name="nama">
                                                </div>
                                            @foreach($anggota as $item)
                                            <div class="form-group col-lg-12">
                                                <label>Jumlah Anggota Keluarga</label>
                                                    <input class="form-control" value="{{$item->jumlah}}">
                                            </div>
                                            <div class="form-group col-lg-12">
                                                <label>Anggota Keluarga Tervaksinasi</label>
                                                    <input class="form-control" value="{{$item->sudah_vaksin}}">
                                            </div>
                                            <div class="form-group col-lg-12">
                                                <label>Anggota Keluarga Belum Tervaksinasi</label>
                                                    <input class="form-control" value="{{$item->belum_vaksin}}">
                                            </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-warning">Ubah</button>
                                            </div>
                                            @endforeach    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <br>
            <br>
           <div class="row">
                <div class="col-xxl-4 col-xl-12 mb-4">
                    <div class="card h-100">
                        <div class="card-body h-100 d-flex flex-column justify-content-center py-5 py-xl-4">
                            <div class="row align-items-center">
                                <div class="col-xl-12 col-xxl-12">
                                    <div class="text-center text-xl-left text-xxl-center px-4 mb-4 mb-xl-0 mb-xxl-4">
                                    <form action = "{{url('tambah-anggota', $adress->id)}}" method="POST">
                                        @csrf
                                            <div class="form-group">
                                                <label>Jumlah Anggota Keluarga</label>
                                                    <input class="form-control" name="jumlah">
                                                </div>
                                            <div class="form-group">
                                                <label>Anggota Keluarga Tervaksinasi</label>
                                                    <input class="form-control" name="sudah_vaksin">
                                            </div>
                                            <div class="form-group">
                                                <label>Anggota Keluarga Belum Tervaksinasi</label>
                                                    <input class="form-control" name="belum_vaksin">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Tambah</button>
                                            </div>
                                    </div>
                                </div>
                                </form>
                                
                            </div>
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

@endsection

{{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.764355136763!2d113.7059314744829!3d-8.17302042429141!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6942e46a0c85d%3A0x7c04a93089d3ca57!2sJl.%20Sumatra%2C%20Tegal%20Boto%20Lor%2C%20Sumbersari%2C%20Kec.%20Sumbersari%2C%20Kabupaten%20Jember%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1629877404256!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> --}}