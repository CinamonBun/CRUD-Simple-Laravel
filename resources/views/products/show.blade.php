@extends('layouts.app')

@section('content')
<h1>Detail Produk</h1>

<div class="card">
    <h5 class="card-title">{{ $product->name }}</h5>
    <p class="card-text">{{ $product->category }}</p>
    <p class="card-text">{{ $product->unit }}</p>
    <p class="card-text">{{ $product->price }}</p>
    <p class="card-text">{{ $product->condition }}</p>
    <p class="card-text">{{ $product->date_expired }}</p>

    <a href="{{ url('/product/' .  $product->id . '/edit') }}" class="btn btn-warning">Edit</a>
    <form action="{{ url('/product/' . $product->id) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus-ny ?')">Hapus</button>
    </form>
    <a href="{{ url('/') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection