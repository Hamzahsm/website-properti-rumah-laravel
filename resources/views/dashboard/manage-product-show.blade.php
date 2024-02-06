@extends('layouts.dashboard')
@section('content')
<section class="section dashboard">
    <div class="table">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Detail</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->detail }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

{{-- <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $product->name }}
        </div>
    </div>
    

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Details:</strong>
            {{ $product->detail }}
        </div>
    </div>
</div> --}}

@endsection