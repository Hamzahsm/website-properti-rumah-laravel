@extends('layouts.blog')
@section('content')
<div class="intro">
    <div class="container">
        <div class="p-3 border rounded text-dark">
            <form action="{{ route('store.carikan.properti') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Name</label>
                    <input type="text" class="form-control" name="nama" required >
                </div>
    
                <div class="mb-3">
                    <label for="telepon" class="form-label">Telepon</label>
                    <input type="number" class="form-control" name="telepon" required >
                </div>
    
                <div class="mb-3">
                    <label for="lokasi" class="form-label">Lokasi</label>
                    <input type="text" class="form-control" name="lokasi_properti" required >
                </div>
    
                <div class="mb-3">
                    <label for="harga_minimal" class="form-label">Harga Minimal</label>
                    <input type="number" class="form-control" name="harga_minimal" required >
                </div>
    
                <div class="mb-3">
                    <label for="harga_maksimal" class="form-label">Harga Maksimal</label>
                    <input type="number" class="form-control" name="harga_maksimal" required >
                </div>
    
                <div class="mb-3">
                    <label for="tipe_properti" class="form-label">Tipe Properti</label>
                    <input type="text" class="form-control" name="tipe_properti" required >
                </div>
    
                <div class="mb-3 text-center">
                    <button class="btn btn-primary btn-block" type="submit">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection