@extends('layouts.dashboard')
@section('content')
<section class="section dashboard">
    
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

    {!! Form::open(array('route' => 'roles.store', 'method' => 'POST')) !!}
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group">
                    <strong>Name:</strong>
                    {{ Form::text('name', null, array('placeholder' => 'Name', 'class' => 'form-control')) }}
                </div>
            </div> 
    
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group">
                    <strong>Permission:</strong>
                    <br>
                    @foreach ($permission as $value)
                        <label>{!! Form::checkbox('permission[]', $value->name, false, array('class' => 'name')) !!}{{ $value->name }}</label>
                    <br>
                    @endforeach
                </div>
            </div>
    
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3 text-center">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </div> 
    {!! Form::close() !!}
</section>
@endsection