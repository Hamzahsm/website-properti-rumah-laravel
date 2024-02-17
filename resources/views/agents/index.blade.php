@extends('layouts.properti')
@section('content') 
<div class="intro">
    <div class="container">
        <form class="#" method="get">
            @csrf
            <div class="form-row align-items-center">
              <div class="col-lg-6">
                <label class="sr-only" for="inlineFormInput">Name</label>
                <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Masukkan Nama Agen">
              </div>
              <div class="col-lg-2">
                <button type="submit" class="btn btn-primary mb-2"><i class="fa fa-search" aria-hidden="true"></i> Cari</button>
              </div>
            </div>
          </form>
    </div>

    <div class="container mt-5">
        <h3 class="text-start font-weight-bold text-dark">Lokasi Agen</h3>
        <p class="text-start mb-3 ">Temukan agen terbaik di lokasi incaran</p>

        <div class="agent_slider_container">
            <div class="owl-carousel owl-theme agen_slider">
                <div class="item text-center">
                    <a href="#">
                        <img src="{{ asset('images/rumah/agen.jpg') }}" alt="" class="mb-3">
                        <p>Malang</p>
                        <p>10 Agent</p>
                    </a>
                </div>
                <div class="item text-center">
                    <a href="#">
                        <img src="{{ asset('images/rumah/agen.jpg') }}" alt="" class="mb-3">
                        <p>Surabaya</p>
                        <p>10 Agent</p>
                    </a>
                </div>
                <div class="item text-center">
                    <a href="#">
                        <img src="{{ asset('images/rumah/agen.jpg') }}" alt="" class="mb-3">
                        <p>Blitar</p>
                        <p>10 Agent</p>
                    </a>
                </div>
                <div class="item text-center">
                    <a href="#">
                        <img src="{{ asset('images/rumah/agen.jpg') }}" alt="" class="mb-3">
                        <p>Sidoarjo</p>
                        <p>10 Agent</p>
                    </a>
                </div>
                <div class="item text-center">
                    <a href="#">
                        <img src="{{ asset('images/rumah/agen.jpg') }}" alt="" class="mb-3">
                        <p>Kediri</p>
                        <p>10 Agent</p>
                    </a>
                </div>
            </div>
        </div>
    </div> <!-- lokasi agen -->


	<div class="container intro">
        <h2 class="text-start text-dark">Fitur Agen</h2>
        <p class="text-dark">Cari tahu info lengkap agen properti</p>
        <div class="row mt-5">
            <div class="col-lg-6">
                <div class="offers_item rating_4">
                    <div class="row">
                        <div class="col-lg-1 temp_col"></div>
                        <div class="col-lg-3 col-1680-4">
                            <div class="offers_image_container">
                                <img src="{{ asset('images/review_1.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="offers_content">
                                <ul>
                                    <li>Nama : xxx</li>
                                    <li>Jumlah Iklan : xxx</li>
                                    <li>Anggota Sejak : xxx</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="offers_item rating_4">
                    <div class="row">
                        <div class="col-lg-1 temp_col"></div>
                        <div class="col-lg-3 col-1680-4">
                            <div class="offers_image_container">
                                <img src="{{ asset('images/review_1.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="offers_content">
                                <ul>
                                    <li>Nama : xxx</li>
                                    <li>Jumlah Iklan : xxx</li>
                                    <li>Anggota Sejak : xxx</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>

        <div class="row mt-5">
            <div class="col-lg-6">
                <div class="offers_item rating_4">
                    <div class="row">
                        <div class="col-lg-1 temp_col"></div>
                        <div class="col-lg-3 col-1680-4">
                            <div class="offers_image_container">
                                <img src="{{ asset('images/review_1.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="offers_content">
                                <ul>
                                    <li>Nama : xxx</li>
                                    <li>Jumlah Iklan : xxx</li>
                                    <li>Anggota Sejak : xxx</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="offers_item rating_4">
                    <div class="row">
                        <div class="col-lg-1 temp_col"></div>
                        <div class="col-lg-3 col-1680-4">
                            <div class="offers_image_container">
                                <img src="{{ asset('images/review_1.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="offers_content">
                                <ul>
                                    <li>Nama : xxx</li>
                                    <li>Jumlah Iklan : xxx</li>
                                    <li>Anggota Sejak : xxx</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
	</div>	
</div>


@endsection