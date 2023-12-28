<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|numeric|min:0',
        ], [
            'name.required' => 'Nama produk harus diisi.',
            'name.max' => 'Nama produk tidak boleh lebih dari :max karakter.',
            'price.required' => 'Harga produk harus diisi.',
            'price.numeric' => 'Harga produk harus berupa angka.',
            'price.min' => 'Harga produk tidak boleh kurang dari :min.',
        ]);

        Product::create($request->all());

        return redirect()->route('products.index')
            ->with('success', 'Product created successfully');
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|numeric|min:0',
        ], [
            'name.required' => 'Nama produk harus diisi.',
            'name.max' => 'Nama produk tidak boleh lebih dari :max karakter.',
            'price.required' => 'Harga produk harus diisi.',
            'price.numeric' => 'Harga produk harus berupa angka.',
            'price.min' => 'Harga produk tidak boleh kurang dari :min.',
        ]);

        $product->update($request->all());

        return redirect()->route('products.index')
            ->with('success', 'Product updated successfully');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully');
    }

    public function view(Product $product)
    {
        if (Gate::allows('view', $product)) {
            // Pengguna memiliki izin untuk melihat produk
            return view('products.view', compact('product'));
        } else {
            // Pengguna tidak memiliki izin, handle sesuai kebutuhan
            abort(403, 'Unauthorized action.');
        }
    }
}
