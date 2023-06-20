<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'username' => 'hoangca',
                'password' => Hash::make('123'),
                'name' => 'Hoang Ca',
                'email' => 'hoangca@gmail.com',
                'address' => 'HN',
                'phone_number' => '1234586863'
            ],
            [
                'username' => 'pro',
                'password' => Hash::make('456'),
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'address' => '456 Avenue, Town',
                'phone_number' => '0987654321'
            ],
            // Add more user records as needed
        ]);
    }
}
