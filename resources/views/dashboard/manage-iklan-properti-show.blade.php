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

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Foto Properti</th>
                <th>Judul Properti</th>
                <th>Nomor Telepon</th>
                <th>Lokasi Properti</th>
                <th>Provinsi Properti</th>
                <th>Luas Bangunan </th>
                <th>Luas Tanah</th>
                <th>Jumlah Kamar Tidur</th>
                <th>Jumlah Kamar Mandi</th>
                <th>Harga Rendah</th>
                <th>Harga Tinggi</th>
                <th>Deskripsi</th>
                <th>Foto Perusahaan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><img src="{{ Storage::url($ads->featured_image) }}" alt="" widht="150" height="150"></td>
                <td>{{ $ads->judul_properti }}</td>
                <td>{{ $ads->nomor_telepon_properti }}</td>
                <td>{{ $ads->lokasi_properti }}</td>
                <td>{{ $ads->provinsi_properti }}</td>
                <td>{{ $ads->luas_bangunan_properti }}</td>
                <td>{{ $ads->luas_tanah_properti }}</td>
                <td>{{ $ads->kamar_tidur_properti }}</td>
                <td>{{ $ads->kamar_mandi_properti }}</td>
                <td>{{ $ads->harga_start_properti }}</td>
                <td>{{ $ads->harga_end_properti }}</td>
                <td>{{ $ads->deskripsi_properti }}</td>
                <td><img src="{{ Storage::url($ads->foto_perusahaan_properti) }}" alt=""></td>
            </tr> 
        </tbody>
    </table>
</section>

@endsection