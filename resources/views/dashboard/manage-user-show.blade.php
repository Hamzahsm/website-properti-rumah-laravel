@extends('layouts.dashboard')
@section('content')
<section class="section dashboard">
    {{-- <div class="row"> --}}
        {{-- <div class="col-xs-12 col-sm-12 col-md-12"> --}}
            <div class="table">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @if (!empty($user->getRoleNames()))
                                    @foreach ($user->getRoleNames() as $v)
                                        <p>{{ $v }}</p>
                                    @endforeach
                                @endif
                        </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        {{-- </div> --}}
    {{-- </div> --}}
</section>

@endsection