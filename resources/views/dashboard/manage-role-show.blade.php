@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="table">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Permission</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $role->name }}</td>
                        <td>
                            @if (!empty($rolePermissions))
                                @foreach ($rolePermissions as $v)
                                    <p>{{ $v->name }}</p> 
                                @endforeach
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection