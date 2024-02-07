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
                <td><img src="{{ Storage::url($data->featured_image) }}" alt="" widht="150" height="150"></td>
                <td>{{ $data->judul_properti }}</td>
                <td>{{ $data->nomor_telepon_properti }}</td>
                <td>{{ $data->lokasi_properti }}</td>
                <td>{{ $data->provinsi_properti }}</td>
                <td>{{ $data->luas_bangunan_properti }}</td>
                <td>{{ $data->luas_tanah_properti }}</td>
                <td>{{ $data->kamar_tidur_properti }}</td>
                <td>{{ $data->kamar_mandi_properti }}</td>
                <td>{{ $data->harga_start_properti }}</td>
                <td>{{ $data->harga_end_properti }}</td>
                <td>{{ $data->deskripsi_properti }}</td>
                <td><img src="{{ Storage::url($data->foto_perusahaan_properti) }}" alt=""></td>
            </tr> 
        </tbody>
    </table>
</section>

@endsection