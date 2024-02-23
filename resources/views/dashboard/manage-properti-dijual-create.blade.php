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

    <div class="border p-3 rounded">
        <form action="{{ route('sells.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row ">
                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                    <label for="judul_properti" class="form-label">Judul Properti</label>
                    <input type="text" name="judul_properti" class="form-control" value="{{ old('judul_properti') }}">
                </div>
    
                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                    <label for="nomor_telepon_properti" class="form-label">No Telpon</label>
                    <input type="number" name="nomor_telepon_properti" class="form-control" value="{{ old('nomor_telepon_properti') }}">
                </div>
        
                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                    <label for="lokasi_properti" class="form-label">Lokasi Properti</label>
                    <input name="lokasi_properti" class="form-control" value="{{ old('lokasi_properti') }}">
                </div>
    
                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                    <label for="provinsi_properti" class="form-label">Provinsi Properti</label>
                    <input name="provinsi_properti" class="form-control" value="{{ old('provinsi_properti') }}">
                </div>
    
                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                    <label for="luas_bangunan_properti" class="form-label">Luas Bangunan Properti</label>
                    <input name="luas_bangunan_properti" class="form-control" value="{{ old('luas_bangunan_properti') }}">
                </div>
    
                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                    <label for="luas_tanah_properti" class="form-label">Luas Tanah Properti</label>
                    <input name="luas_tanah_properti" class="form-control" value="{{ old('luas_tanah_properti') }}">
                </div>
    
                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                    <label for="kamar_tidur_properti" class="form-label">Jumlah Kamar Tidur</label>
                    <input name="kamar_tidur_properti" class="form-control" value="{{ old('kamar_tidur_properti') }}">
                </div>
    
                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                    <label for="kamar_mandi_properti" class="form-label">Jumlah Kamar Mandi</label>
                    <input name="kamar_mandi_properti" class="form-control" value="{{ old('kamar_mandi_properti') }}">
                </div>
    
                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                    <label for="harga_start_properti" class="form-label mb-3">Harga Paling Rendah</label>
                    <input name="harga_start_properti" class="form-control" value="{{ old('harga_start_properti') }}">
                </div>
    
                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                    <label for="harga_end_properti" class="form-label">Harga Paling Tinggi</label>
                    <input name="harga_end_properti" class="form-control" value="{{ old('harga_end_properti') }}">
                </div>
    
                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                    <label for="deskripsi_properti" class="form-label">Deskripsi Properti</label>
                    <textarea name="deskripsi_properti" id="editor" cols="30" rows="10" class="form-control" placeholder="buatlah deskripsi yang menarik">{{ old('deskripsi_properti') }}</textarea>
                </div> 
    
                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                    <label for="featured_image" class="form-label">Foto Properti</label>
                    <input type="file" name="featured_image" class="form-control" value="{{ old('featured_image') }}">
                </div>
    
                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                    <label for="detail_foto_properti" class="form-label">Detail Foto Properti</label>
                    <input type="file" name="detail_foto_properti[]" class="form-control" id="detail_foto_properti" multiple="multiple">
                </div>
    
                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                    <label for="foto_perusahaan_properti" class="form-label">Foto Perusahaan </label>
                    <input type="file" name="foto_perusahaan_properti" class="form-control">
                </div>
        
                <div class="col-xs-12 col-sm-12 col-md-12 mb-3 text-center">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
    
</section>


@endsection