@extends('layouts.app')

@section('content')
<h1>Daftar Produk</h1>

<a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>

<table class="table">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Kategori</th>
            <th>Satuan</th>
            <th>Harga</th>
            <th>Kondisi</th>
            <th>Tanggal Kadaluarsa</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->category }}</td>
            <td>{{ $product->unit }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->condition}}</td>
            <td>{{ $product->date_expired}}</td>
            <td>
                <a href="{{ route('products.show', $product->id) }}" class="btn btn-info">Lihat</a>
                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection