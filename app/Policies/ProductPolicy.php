<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Product;

class ProductPolicy
{
    public function view(User $user, Product $product)
    {
        // Pengguna dapat melihat produk jika mereka adalah pemilik produk
        return $user->id === $product->user_id;
    }

    public function update(User $user, Product $product)
    {
        // Pengguna dapat memperbarui produk jika mereka adalah pemilik produk
        return $user->id === $product->user_id;
    }
}
