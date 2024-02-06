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
                <th>Details</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $key => $product)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><a href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a></td>
                    <td>{{ $product->detail }}</td>
                    <td>
                        {{-- <form action="{{ route('products.destroy', $product->id) }}" method="POST "></form> --}}
                         {{-- <a href="{{ route('products.show', $product->id) }}" class="btn btn-info">Show</a> --}}
                         @can('product-edit')
                             <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Edit</a>
                         @endcan
    
                         @csrf 
                         @method('DELETE')
                         @can('product-delete')
                             {{-- <button class="btn-danger btn" type="submit">Delete</button> --}}
                             {!! Form::open(['method' => 'DELETE', 'route' => ['products.destroy', $product->id], 'style' => 'display:inline']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                         @endcan 
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    {!! $products->links() !!}

</section>
@endsection