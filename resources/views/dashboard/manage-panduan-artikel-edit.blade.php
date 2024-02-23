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

    <form action="{{ route('posts.update', $data->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <label for="title" class="form-label">Judul Properti</label>
                <input type="text" name="title" class="form-control" value="{{ $data->title }}"> 
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <label for="featured_image" class="form-label">Banner Panduan</label>
                <img src="{{ Storage::url($data->featured_image) }}" alt="" widht="150" height="150">
                <input type="file" class="form-control" name="featured_image">
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <label for="deskripsi" class="form-label">Deskripsi Properti</label>
                <textarea name="deskripsi" id="editor" cols="30" rows="10" class="form-control">{{ $data->deskripsi }}</textarea>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <label for="tags" class="form-label">Tags</label>
                <input type="text" name="tags" class="form-control" value="{{ $data->tags }}"> 
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button class="btn btn-primary" type="submit">Submit</button> 
            </div>
        </div> 
    </form>
</section>

@endsection