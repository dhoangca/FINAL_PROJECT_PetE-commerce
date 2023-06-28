<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create sample products
        DB::table('products')->insert([
            [
                'name' => 'BALO PHI THUYỀN',
                'description' => 'Balo cho thú cưng',
                'price' => 10.99,
                'image' => null,
                'quantity' => 5,
                'status' => 'Stocking',
                'category_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'LỒNG TĨNH ĐIỆN',
                'description' => 'Lồng cho thú cưng',
                'price' => 19.99,
                'image' => null,
                'quantity' => 3,
                'status' => 'Stocking',
                'category_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'CÁT GỖ LOVE SAND',
                'description' => 'Cát vệ sinh cho thú cưng',
                'price' => 19.99,
                'image' => null,
                'quantity' => 3,
                'status' => 'Stocking',
                'category_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'BÁT INOX CHÂN CÚN',
                'description' => 'Bát đựng thức ăn cho thú cưng',
                'price' => 19.99,
                'image' => null,
                'quantity' => 3,
                'status' => 'Stocking',
                'category_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more products if needed
        ]);
    }
}
