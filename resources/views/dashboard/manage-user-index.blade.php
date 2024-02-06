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
                    <th>Name</th>
                    <th>Email</th>
                    <th>Roles</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $key => $user) 
                    <tr>
                        <td>{{ $loop->iteration }}</td> 
                        <td><a href="{{ route('users.show', $user->id) }}">{{ $user->name }}</a></td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @if (!empty($user->getRoleNames()))
                                @foreach ($user->getRoleNames() as $v)
                                    <p>{{ $v }}</p>
                                @endforeach
                            @endif
                        </td>
                        <td>
                            {{-- <a href="{{ route('users.show', $user->id) }}" class="btn btn-info">Show</a> --}}
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Edit</a>
                            {!! Form::open(['method' => "DELETE", 'route'=> ['users.destroy', $user->id], 'style' => 'display:inline']) !!}
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