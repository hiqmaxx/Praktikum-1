<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = [
            ['id' => 1, 'nama' => 'Laptop', 'harga' => 10000000],
            ['id' => 2, 'nama' => 'Mouse', 'harga' => 250000],
            ['id' => 3, 'nama' => 'Keyboard', 'harga' => 500000],
        ];

        return view('produk.index', compact('produk'));
    }
}
