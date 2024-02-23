@extends('layouts.dashboard')
@section('content')

    <section class="sectiion dashboard">
        @if (count($posts))
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Banner</th>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Tgl Upload</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $key) 
                        <tr>
                            <td>{{ $loop->iteration }}</td> 
                            <td><img src="{{ Storage::url($key->featured_image) }}" alt="" width="100" height="100"></td>
                            <td><a href="{{ route('posts.show', $key->id) }}">{{ $key->title }}</a></td>
                            <td>{{ $key->user->name }}</td>
                            <td>{{ $key->created_at->diffForHumans() }}</td>
                            <td>
                                <a href="{{ route('posts.edit', $key->id) }}" class="btn btn-primary">Edit</a>
                                <a href="{{ route('posts.destroy', $key->id) }}" data-confirm-delete="true" class="btn btn-danger"><i class="bi bi-trash"></i> Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody> 
            </table>
        @else
          <p>Oppps, tidak dapat menampilkan data. Tambahkan Panduan Artikel terlebih dahulu... <span><a href="{{ route('posts.create') }}">Tambah sekarang</a></span></p>  
        @endif   
    
        {{-- {!! $data->render() !!}  --}}
    </section>
@endsection