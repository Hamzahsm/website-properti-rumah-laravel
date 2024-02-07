@extends('layouts.dashboard')
@section('content')

    <section class="sectiion dashboard">
    
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
    
        <table class="table table-bordered">
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
                            {!! Form::open(['method' => "DELETE", 'route'=> ['ads.destroy', $key->id], 'style' => 'display:inline']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    
        {{-- {!! $data->render() !!}  --}}
    </section>
@endsection