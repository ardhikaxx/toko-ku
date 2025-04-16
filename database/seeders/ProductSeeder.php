<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $products = [
            // Elektronik
            [
                'name' => 'Smartphone Galaxy A23',
                'description' => 'Smartphone dengan kamera 50MP dan baterai 5000mAh',
                'price' => 2999000,
                'stock' => 50,
                'category_id' => 1,
            ],
            [
                'name' => 'Laptop ASUS VivoBook 14',
                'description' => 'Laptop tipis dengan prosesor Intel Core i5 generasi terbaru',
                'price' => 8999000,
                'stock' => 30,
                'category_id' => 1,
            ],
            [
                'name' => 'TV LED 32 Inch Sharp',
                'description' => 'TV LED HD dengan resolusi 1366x768',
                'price' => 2499000,
                'stock' => 20,
                'category_id' => 1,
            ],

            // Pakaian
            [
                'name' => 'Kemeja Flanel Pria',
                'description' => 'Kemeja flanel bahan katun dengan berbagai pilihan warna',
                'price' => 149000,
                'stock' => 100,
                'category_id' => 2,
            ],
            [
                'name' => 'Jeans Slim Fit',
                'description' => 'Celana jeans pria model slim fit dengan bahan denim berkualitas',
                'price' => 279000,
                'stock' => 75,
                'category_id' => 2,
            ],

            // Buku
            [
                'name' => 'Buku Pemrograman Laravel',
                'description' => 'Panduan lengkap belajar framework Laravel untuk pemula',
                'price' => 125000,
                'stock' => 25,
                'category_id' => 3,
            ],
            [
                'name' => 'Novel Laskar Pelangi',
                'description' => 'Novel bestseller karya Andrea Hirata',
                'price' => 85000,
                'stock' => 40,
                'category_id' => 3,
            ],

            // Rumah & Taman
            [
                'name' => 'Set Perkakas Tukang',
                'description' => 'Perlengkapan perkakas lengkap untuk kebutuhan rumah tangga',
                'price' => 350000,
                'stock' => 15,
                'category_id' => 4,
            ],
            [
                'name' => 'Pot Tanaman Minimalis',
                'description' => 'Pot tanaman dengan desain minimalis diameter 30cm',
                'price' => 75000,
                'stock' => 60,
                'category_id' => 4,
            ],

            // Olahraga
            [
                'name' => 'Sepatu Lari Nike',
                'description' => 'Sepatu lari dengan bantalan empuk untuk kenyamanan maksimal',
                'price' => 899000,
                'stock' => 25,
                'category_id' => 5,
            ],
            [
                'name' => 'Dumbell Set 10kg',
                'description' => 'Set dumbell besi dengan total berat 10kg (2x5kg)',
                'price' => 250000,
                'stock' => 30,
                'category_id' => 5,
            ],

            // Makanan
            [
                'name' => 'Kopi Arabika 250gr',
                'description' => 'Biji kopi arabika pilihan dari perkebunan Jawa Barat',
                'price' => 65000,
                'stock' => 50,
                'category_id' => 6,
            ],

            // Kesehatan
            [
                'name' => 'Masker KN95 10pcs',
                'description' => 'Masker pelindung dengan filtrasi 95%',
                'price' => 45000,
                'stock' => 200,
                'category_id' => 7,
            ]
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}