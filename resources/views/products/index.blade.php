@extends('layouts.app')

@section('content')
<h1>Daftar Produk</h1>
<a href="{{ url('/product/create') }}" class="btn btn-outline-danger">Tambah Produk</a>

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
                <a href="{{ url('/product/' . $product->id) }}" class="btn btn-info">Lihat</a>
                <a href="{{ url('/product/' . $product->id . '/edit') }}" class="btn btn-warning">Edit</a>
                <form action="{{ url('/product/' . $product->id) }}" method="POST" style="display: inline;">
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