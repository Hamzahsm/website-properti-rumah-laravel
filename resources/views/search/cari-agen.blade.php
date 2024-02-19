@extends('layouts.blog')
@section('content')

<div class="intro">
    <div class="container">
        @if (count($users) > 0)  
            <div class="row">
                @foreach ($users as $user)
                <div class="col-lg-3 p-3">
                    <div class="border p-3">
                            <a href="{{ route('users.show', $user->id) }}">
                            <h5 class="font-weight-bold text-dark">Nama : {{ $user->name }}</h5>
                            <h5 class="font-weight-bold text-dark">Anggota Sejak : {{ $user->created_at->diffForHumans() }}</h5>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        @else
            <p>Ooops, Pencarian tidak ditemukan</p>
        @endif
    </div>
</div>
    
@endsection