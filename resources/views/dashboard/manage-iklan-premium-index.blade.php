@extends('layouts.dashboard')
@section('content')

    <section class="sectiion dashboard">
        @if (count($data))
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Foto Properti</th>
                        <th>Judul Properti</th>
                        <th>Kontak</th>
                        <th>Lokasi Properti</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $key) 
                        <tr>
                            <td>{{ $loop->iteration }}</td> 
                            <td><img src="{{ Storage::url($key->featured_image) }}" alt="" width="100" height="100"></td>
                            <td><a href="{{ route('ads.show', $key->id) }}">{{ $key->judul_properti }}</a></td>
                            <td>{{ $key->nomor_telepon_properti }}</td>
                            <td>{{ $key->lokasi_properti }}</td>
                            <td>{{ $key->harga_start_properti }} - {{ $key->harga_end_properti }}</td>
                            <td>
                                <a href="{{ route('ads.edit', $key->id) }}" class="btn btn-primary">Edit</a>
                                <a href="{{ route('ads.destroy', $key->id) }}" data-confirm-delete="true" class="btn btn-danger"><i class="bi bi-trash"></i> Hapus</a> 
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>   
        @else
          <p>Opps, cobalah untuk menambahkan data.</p>  
        @endif    
    
    </section>
@endsection