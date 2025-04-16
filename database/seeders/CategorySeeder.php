<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            ['name' => 'Elektronik', 'description' => 'Perangkat elektronik'],
            ['name' => 'Pakaian', 'description' => 'Item fashion dan pakaian'],
            ['name' => 'Buku', 'description' => 'Berbagai macam buku'],
            ['name' => 'Rumah & Taman', 'description' => 'Peralatan rumah dan taman'],
            ['name' => 'Olahraga', 'description' => 'Peralatan olahraga'],
            ['name' => 'Makanan', 'description' => 'Produk makanan dan minuman'],
            ['name' => 'Kesehatan', 'description' => 'Produk kesehatan dan kecantikan'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}