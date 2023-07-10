<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create sample categories
        DB::table('categories')->insert([
            [
                'name' => 'Alaskan Malamute',
                'description' => null,
                'type' => 'pet',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Husky',
                'description' => null,
                'type' => 'pet',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Beagle',
                'description' => null,
                'type' => 'pet',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Golden Retriever',
                'description' => null,
                'type' => 'pet',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Chuồng',
                'description' => null,
                'type' => 'product',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Balo',
                'description' => null,
                'type' => 'product',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bát',
                'description' => null,
                'type' => 'product',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'vòng Cổ',
                'description' => null,
                'type' => 'Accessory',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'name' => 'Thức Ăn',
                'description' => null,
                'type' => 'product',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more categories if needed
        ]);
    }
}
