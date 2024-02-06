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
    
        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" name="name" class="form-control" value="{{ $product->name }}">
                    </div>
                </div>
    
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Detail:</strong>
                        <textarea name="detail" id="" cols="30" rows="10" class="form-control" >{{ $product->detail }}</textarea>
                    </div>
                </div>
    
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </div> 
        </form>
    </section>

@endsection