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

    <a href="{{ route('products.show', $product->id) }}" class="btn btn-info">Lihat</a>
    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Hapus</button>
    </form>
    <a href="{{ route('products.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection