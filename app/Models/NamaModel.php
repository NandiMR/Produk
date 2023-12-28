<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NamaModel extends Model
{
    use HasFactory;
}
// Mendapatkan semua produk
$products = Product::all();
// Mendapatkan produk berdasarkan ID
$product = Product::find(1);
// Mendapatkan produk dengan kondisi
$cheapProducts = Product::where('price', '<', 100)->get();
// Membuat dan menyimpan produk baru
$newProduct = Product::create([
    'name' => 'New Product',
    'price' => 50,
]);
// Mendapatkan dan memperbarui produk berdasarkan ID
$product = Product::find(1);
$product->name = 'Updated Product';
$product->save();
// Menghapus produk berdasarkan ID
$product = Product::find(1);
$product->delete();
