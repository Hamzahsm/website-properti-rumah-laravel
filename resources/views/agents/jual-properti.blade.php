@extends('layouts.properti')
@section('content')
    <div class="jual_properti">
        <div class="container">
            <h2 class="text-center text-dark">Iklankan Properti Mudah</h2>
            <h2 class="text-center text-dark">Dapatkan Banyak Leads</h2>
            <h5 class="text-center text-dark">Pasarkan properti Anda di sini dan raih makin banyak peluang! Karena kami #AdaBuatKamu</h5>
            <h6 class="mt-3 text-dark text-center">saya ingin mengiklankan sebagai</h6>
            <div class="row mt-5">
                <div class="col-lg-4">
                    <div class="p-4 text-center">
                        {{-- <p>Agen Properti</p> --}}
                        <button type="button" class="btn btn-outline-primary border-none" data-toggle="modal" data-target="#iklanAgen">
                            <i class="fa fa-user-circle-o fs-2" aria-hidden="true"></i> Agen Properti</a>
                        </button>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="p-4  text-center">
                        {{-- <p>Developer / in-house marketing</p> --}}
                        <button type="button" class="btn btn-outline-primary border-none" data-toggle="modal" data-target="#iklanDeveloperMarketing">
                            <i class="fa fa-user-circle-o fs-2" aria-hidden="true"></i> Developer / in-house marketing</a>
                        </button>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="p-4 text-center">
                        <button type="button" class="btn btn-outline-primary border-none" data-toggle="modal" data-target="#iklanPemilikProperti">
                            <i class="fa fa-user-circle-o fs-2" aria-hidden="true"></i> Pemilik Properti</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection