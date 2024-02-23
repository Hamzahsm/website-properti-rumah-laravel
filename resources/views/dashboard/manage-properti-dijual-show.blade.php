@extends('layouts.dashboard')
@section('content')
<section class="section dashboard">

    <!-- take a break for 2 minute -->

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Something went wrong. <br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row">
        <!-- left column, just image -->
        <div class="col-lg-6">
            <div class="border p-3 rounded mb-3 bg-white">
                <h5 class="font-weight-bold mb-3"><i class="bi bi-image"></i> Banner</h5>
                <a href="{{ Storage::url($data->featured_image) }}">
                    <img src="{{ Storage::url($data->featured_image) }}" alt="" class="img-fluid rounded">
                </a>
            </div>
            <div class="border p-3 rounded mb-3 bg-white">
                <h5 class="font-weight-bold mb-3"><i class="bi bi-image"></i> Detail Foto</h5>
                @foreach ($data->detail_foto_properti as $item)
                <a href="{{ asset('/storage/') . '/' . $item }}">
                    <img src="{{ asset('/storage/') . '/' . $item }}" alt="mutliple-image" class="img-fluid rounded" width="150" height="150">
                </a>
                @endforeach
            </div>
            <div class="border rounded mb-3 bg-white p-3">
                <h5 class="font-weight-bold mb-3"><i class="bi bi-image"></i> Foto Perusahaan</h5>
                <img src="{{ Storage::url($data->foto_perusahaan_properti) }}" alt="" class="img-fluid">
            </div>
        </div> 

        <!-- right column, just data -->
        <div class="col-lg-6">
            <div class="border p-3 rounded mb-3">
                <h5 class="mb-3 font-weight-bold"><i class="bi bi-card-list"></i> Judul Iklan</h5>
                <p>{{ $data->judul_properti }}</p>
            </div>
            <div class="border p-3 rounded mb-3">
                <h5 class="mb-3 font-weight-bold"><i class="bi bi-card-list"></i> Penjual</h5>
                <p>Nama : {{ $data->user->name }}</p>
                <p>Telepon : {{ $data->nomor_telepon_properti }}</p>
            </div>
            <div class="border p-3 rounded mb-3">
                <h5 class="mb-3 font-weight-bold"><i class="bi bi-card-list"></i> Detail</h5>
                <p>Lokasi : {{ $data->lokasi_properti }} - {{ $data->provinsi_properti }} </p>
                <p>Luas Bangunan : {{ $data->luas_bangunan_properti }}</p>
                <p>Luas Tanah : {{ $data->luas_tanah_properti }}</p>
                <p>Kamar Tidur : {{ $data->kamar_tidur_properti }}</p>
                <p>Kamar Mandi : {{ $data->kamar_mandi_properti }}</p>
                <p>Harga : {{ $data->harga_start_properti }} - {{ $data->harga_end_properti }}</p>
                <p>Upload : {{ $data->created_at }}</p>
            </div>
            <div class="border p-3 rounded mb-3">
                <h5 class="mb-3 font-weight-bold"><i class="bi bi-card-list"></i> Deskripsi </h5>
                <p>{!! $data->deskripsi_properti !!}</p>
            </div>
        </div>
    </div>
</section>

@endsection