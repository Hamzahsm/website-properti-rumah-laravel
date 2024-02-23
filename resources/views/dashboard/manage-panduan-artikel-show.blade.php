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
        </div> 

        <!-- right column, just data -->
        <div class="col-lg-6">
            <div class="border p-3 rounded mb-3">
                <h5 class="mb-3 font-weight-bold"><i class="bi bi-card-list"></i> Judul Panduan</h5>
                <p>{{ $data->title }}</p>
            </div>
            <div class="border p-3 rounded mb-3">
                <h5 class="mb-3 font-weight-bold"><i class="bi bi-card-list"></i> Penulis</h5>
                <p>Nama : {{ $data->user->name }}</p>
            </div>
            <div class="border p-3 rounded mb-3">
                <h5 class="mb-3 font-weight-bold"><i class="bi bi-card-list"></i> Deskripsi </h5>
                <p>{!! $data->deskripsi !!}</p>
            </div>
            <div class="border p-3 rounded mb-3">
                <h5 class="mb-3 font-weight-bold"><i class="bi bi-card-list"></i> Tags</h5>
                <p>{{ $data->tags }}</p>
            </div>
        </div>
    </div>
</section>

@endsection