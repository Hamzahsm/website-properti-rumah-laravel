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

    {!! Form::model($user, ['method' => 'PATCH', 'route' => ['users.update', $user->id]]) !!}
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group">
                    <strong>Name:</strong>
                    {!! Form::text('name', null, array('placeholder' => 'Name', 'class' => 'form-control')) !!}
                </div>
            </div>
            
    
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group">
                    <strong>Email:</strong>
                    {!! Form::text('email', null, array('placeholder' => 'Email', 'class' => 'form-control')) !!}
                </div>
            </div>
    
            {{-- <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group">
                    <strong>Password:</strong>
                    {!! Form::password('password', array('placeholder'=> 'Password', 'class' => 'form-control')) !!}
                </div>
            </div>
    
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group">
                    <strong>Confirm Password:</strong>
                    {!! Form::password('confirm-password', array('placeholder' => 'Confirm Passwrod', 'class' => 'form-control')) !!}
                </div>
            </div> --}}
    
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group">
                    <strong>Role:</strong>
                    {!! Form::select('roles[]', $roles, [], array('class' => 'form-control', 'multiple')) !!}
                </div>
            </div>
    
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3 text-center">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </div>
    {!! Form::close() !!}
</section>

@endsection