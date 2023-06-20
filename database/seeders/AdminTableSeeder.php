<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admin')->insert([
            [
                'username' => 'hoangca',
                'password' => Hash::make('123'),
                'name' => 'Admin Hoang Ca',
                'email' => 'hoangca@gmail.com',
                'phone_number' => '1234586863'
            ],
            [
                'username' => 'admin',
                'password' => Hash::make('admin'),
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'phone_number' => '0987654321'
            ],
            // Add more admin records as needed
        ]);
    }
}
