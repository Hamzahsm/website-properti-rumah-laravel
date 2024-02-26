@extends('layouts.dashboard')
@section('content')
<section class="section dashboard">

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
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($roles as $key => $role)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><a href="{{ route('roles.show',$role->id) }}">{{ $role->name }}</a></td>
                    <td>
                        {{-- <a href="{{ route('roles.show',$role->id) }}" class="btn btn-info">Show</a> --}}
                        @can('role-edit')
                            <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-primary">Edit</a> 
                        @endcan
                        @can('role-delete')
                            {{-- {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id], 'style' => 'display:inline']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}  --}}
                            <a href="{{ route('roles.destroy', $role->id) }}" data-confirm-delete="true" class="btn btn-danger"><i class="bi bi-trash"></i> Hapus</a> 
                        @endcan
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    {{-- {!! $roles->render() !!} --}}
    {{ $roles->links() }}

</section>


@endsection