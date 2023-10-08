@extends('layouts.app')

@section('content')
<h1>Tambah Produk Baru</h1>

<form method="POST" action="{{ route('products.store') }}">
    @csrf
    <div class="form-group">
        <label for="name">Nama</label>
        <input type="text" name="name" id="name" class="form-control" required {{ old('name') }}>
    </div>
    <div class="form-group">
        <label for="category">Kategori</label>
        <input type="text" name="category" id="category" class="form-control" required {{ old('category') }}>
    </div>
    <div class="form-group">
        <label for="unit">Satuan</label>
        <input type="number" name="unit" id="unit" class="form-control" required {{ old('unit') }}>
    </div>
    <div class="form-group">
        <label for="price">Harga</label>
        <input type="number" name="price" id="price" class="form-control" required {{ old('price') }}>
    </div>
    <div class="form-group">
        <label for="kondisi">Kondisi</label>
        <select name="condition">
            <option value="baik">Baik</option>
            <option value="kurang baik">Kurang Baik</option>
            <option value="rusak">Rusak</option>
        </select>
    </div>
    <div class="form-group">
        <label for="tanggal">Tanggal Kadaluarsa</label>
        <input type="date" name="date_expired" id="date_expired" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection