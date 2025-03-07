<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    public static function all()
    {
        return [
            ['id' => 1, 'nama' => 'Laptop', 'harga' => 10000000],
            ['id' => 2, 'nama' => 'Mouse', 'harga' => 250000],
            ['id' => 3, 'nama' => 'Keyboard', 'harga' => 500000],
        ];
    }
}
