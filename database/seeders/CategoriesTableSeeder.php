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
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Husky',
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Beagle',
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Golden Retriever',
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Chuồng',
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Balo',
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bát',
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cát vệ sinh',
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more categories if needed
        ]);
    }
}
