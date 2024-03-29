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

    <form action="{{ route('rents.update', $data->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <label for="judul_properti" class="form-label">Judul Properti</label>
                <input type="text" name="judul_properti" class="form-control" value="{{ $data->judul_properti }}">
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <label for="nomor_telepon_properti" class="form-label">Nomor Telepon</label>
                <input type="text" name="nomor_telepon_properti" class="form-control" value="{{ $data->nomor_telepon_properti }}">
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <label for="lokasi_properti" class="form-label">Lokasi Properti</label>
                <input type="text" name="lokasi_properti" class="form-control" value="{{ $data->lokasi_properti }}">
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <label for="provinsi_properti" class="form-label">Provinsi Properti</label>
                <input type="text" name="provinsi_properti" class="form-control" value="{{ $data->provinsi_properti }}">
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <label for="luas_bangunan_properti" class="form-label">Luas Bangunan Properti</label>
                <input type="text" name="luas_bangunan_properti" class="form-control" value="{{ $data->luas_bangunan_properti }}">
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <label for="luas_tanah_properti" class="form-label">Luas Tanah Properti</label>
                <input type="text" name="luas_tanah_properti" class="form-control" value="{{ $data->luas_tanah_properti }}">
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <label for="kamar_tidur_properti" class="form-label">Kamar Tidur Properti</label>
                <input type="text" name="kamar_tidur_properti" class="form-control" value="{{ $data->kamar_tidur_properti }}">
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <label for="kamar_mandi_properti" class="form-label">Kamar Mandi Properti</label>
                <input type="text" name="kamar_mandi_properti" class="form-control" value="{{ $data->kamar_mandi_properti }}">
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <label for="harga_start_properti" class="form-label">Harga Paling Murah</label>
                <input type="text" name="harga_start_properti" class="form-control" value="{{ $data->harga_start_properti }}">
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <label for="harga_end_properti" class="form-label">Harga Paling Tinggi</label>
                <input type="text" name="harga_end_properti" class="form-control" value="{{ $data->harga_end_properti }}">
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <label for="deskripsi_properti" class="form-label">Deskripsi Properti</label>
                <textarea name="deskripsi_properti" id="editor" cols="30" rows="10" class="form-control">{{ $data->deskripsi_properti }}</textarea>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <label for="featured_image" class="form-label">Gambar Properti</label>
                <img src="{{ Storage::url($data->featured_image) }}" alt="" widht="150" height="150">
                <input type="file" class="form-control" name="featured_image">
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <label for="detail_foto_properti" class="form-label">Detail Foto Properti</label>
                @foreach ($data->detail_foto_properti as $item)
                <img src="{{ asset('/storage/') . '/' . $item }}" alt="mutliple-image" width="100" height="100">
                @endforeach
                <input type="file" name="detail_foto_properti[]" class="form-control" id="detail_foto_properti" multiple="multiple">
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <label for="foto_perusahaan_properti" class="form-label">Gambar Perusahaan Properti</label>
                <img src="{{ Storage::url($data->foto_perusahaan_properti) }}" alt="" widht="150" height="150">
                <input type="file" class="form-control" name="foto_perusahaan_properti">
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </div> 
    </form>
</section>

@endsection