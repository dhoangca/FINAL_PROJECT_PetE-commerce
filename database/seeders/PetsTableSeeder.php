<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create sample pets
        DB::table('pets')->insert([
            [
                'name' => 'Bella',
                'breed' => 'Labrador Retriever',
                'gender' => 'Female',
                'price' => 500.00,
                'description' => 'Friendly and playful Labrador Retriever',
                'quantity' => 5,
                'image_url' => null,
                'status' => 'Stocking',
                'user_id' => null,
                'category_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Max',
                'breed' => 'German Shepherd',
                'gender' => 'Male',
                'price' => 600.00,
                'description' => 'Loyal and intelligent German Shepherd',
                'quantity' => 3,
                'image_url' => null,
                'status' => 'Stocking',
                'user_id' => null,
                'category_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Rocky',
                'breed' => 'Golden Retriever',
                'gender' => 'Male',
                'price' => 800.00,
                'description' => 'Friendly and playful Golden Retriever',
                'quantity' => 3,
                'image_url' => null,
                'status' => 'Stocking',
                'user_id' => null,
                'category_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Maximus',
                'breed' => 'Beagle',
                'gender' => 'Male',
                'price' => 1200.00,
                'description' => 'Strong and muscular Beagle',
                'quantity' => 1,
                'image_url' => null,
                'status' => 'Stocking',
                'user_id' => null,
                'category_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more pets if needed
        ]);
    }
}
