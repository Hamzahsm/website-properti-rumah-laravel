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

    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <label for="title" class="form-lable">Judul Panduan</label>
                <input type="text" name="title" class="form-control" >
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <label for="featured_image" class="form-lable">Banner Panduan</label>
                <input type="file" name="featured_image" class="form-control">
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <label for="deskripsi" class="form-lable">Deskripsi Panduan</label>
                <textarea name="deskripsi" id="editor" cols="30" rows="10" class="form-control" placeholder="Buatlah deskripsi yang menarik"></textarea>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <label for="tags" class="form-lable">Tags</label>
                <input type="text" name="tags" class="form-control" >
            </div>
    
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3 text-center">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </div>
    </form>

</section>


@endsection