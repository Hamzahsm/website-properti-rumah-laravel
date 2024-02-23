@extends('layouts.dashboard')
@section('content')
<section class="section dashboard"> 

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Something went wrong. <br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('properties.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <label for="judul_properti" class="form-lable">Judul Properti</label>
                <input type="text" name="judul_properti" class="form-control" >
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <label for="nomor_telepon_properti" class="form-lable">No Telpon</label>
                <input type="number" name="nomor_telepon_properti" class="form-control" >
            </div>
    
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <label for="lokasi_properti" class="form-lable">Lokasi Properti</label>
                <input name="lokasi_properti" class="form-control" >
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <label for="provinsi_properti" class="form-lable">Provinsi Properti</label>
                <input name="provinsi_properti" class="form-control">
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <label for="luas_bangunan_properti" class="form-lable">Luas Bangunan Properti</label>
                <input name="luas_bangunan_properti" class="form-control">
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <label for="luas_tanah_properti" class="form-lable">Luas Tanah Properti</label>
                <input name="luas_tanah_properti" class="form-control">
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <label for="kamar_tidur_properti" class="form-lable">Jumlah Kamar Tidur</label>
                <input name="kamar_tidur_properti" class="form-control">
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <label for="kamar_mandi_properti" class="form-lable">Jumlah Kamar Mandi</label>
                <input name="kamar_mandi_properti" class="form-control">
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <label for="harga_start_properti" class="form-lable">Harga Paling Rendah</label>
                <input name="harga_start_properti" class="form-control">
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <label for="harga_end_properti" class="form-lable">Harga Paling Tinggi</label>
                <input name="harga_end_properti" class="form-control">
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <label for="deskripsi_properti" class="form-lable">Deskripsi Properti</label>
                <textarea name="deskripsi_properti" id="editor" cols="30" rows="10" class="form-control" placeholder="buatlah deskripsi yang menarik"></textarea>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <label for="featured_image" class="form-lable">Foto Properti</label>
                <input type="file" name="featured_image" class="form-control">
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <label for="detail_foto_properti" class="form-lable">Detail Foto Properti</label>
                <input type="file" name="detail_foto_properti[]" class="form-control" id="detail_foto_properti" multiple="multiple">
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <label for="foto_perusahaan_properti" class="form-lable">Foto Perusahaan </label>
                <input type="file" name="foto_perusahaan_properti" class="form-control">
            </div>


    
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3 text-center">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </div>
    </form>

</section>


@endsection