@extends('layouts.app')

@section('content')
<h1>Edit Produk</h1>

<form method="POST" action="{{ route('products.update', $product->id) }}" class="border">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Nama</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ $product->name }}" required>
    </div>
    <div class="form-group">
        <label for="category">Kategori</label>
        <input type="text" name="category" id="category" class="form-control" value="{{ $product->category }}" required>
    </div>
    <div class="form-group">
        <label for="unit">Satuan</label>
        <input type="text" name="unit" id="unit" class="form-control" value="{{ $product->unit }}" required>
    </div>
    <div class="form-group">
        <label for="price">Harga</label>
        <input type="number" name="price" id="price" class="form-control" value="{{ $product->price }}" required>
    </div>
    <div class="form-group">
        <label for="condition">Kondisi</label>
        <select name="condition">
            <option value="baik" {{ $product->condition === 'baik' ? 'selected' : ''}}>Baik</option>
            <option value="kurang baik" {{ $product->condition === 'kurang baik' ? 'selected' : ''}}>Kurang Baik</option>
            <option value="rusak" {{ $product->condition === 'rusak' ? 'selected' : ''}}>Rusak</option>
        </select>
    </div>
    <div class="form-group">
        <label for="date_expired">Tanggal Kadaluarsa</label>
        <input type="date" name="date_expired" id="date_expired" class="form-control" value="{{ $product->date_expired }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection