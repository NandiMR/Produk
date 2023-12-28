
@extends('layouts.app')

@section('content')
    <h1>Edit Produk</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('products.update', ['id' => $product->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
        <label for="name">Nama Produk:</label>
        <input type="text" name="name" value="{{ old('name', $product->name) }}" required>

        <label for="price">Harga:</label>
        <input type="number" name="price" value="{{ old('price', $product->price) }}" required>

        <!-- Tambahkan input untuk kolom lainnya sesuai kebutuhan -->

        <button type="submit">Perbarui Produk</button>
    </form>
    @extends('layouts.app')
