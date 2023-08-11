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
                'phone_number' => '1234567890',
                'image' => null,
                'status' => 'active',
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'pro',
                'password' => Hash::make('456'),
                'name' => 'Jane Smith',
                'email' => 'pro@gmail.com',
                'address' => '456 Avenue, Town',
                'phone_number' => '0987654321',
                'image' => null,
                'status' => 'active',
                'role' => 'staff',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'congminh',
                'password' => Hash::make('123'),
                'name' => 'Cong Minh',
                'email' => 'congminh@gmail.com',
                'address' => 'HN',
                'phone_number' => '9999999999',
                'image' => null,
                'status' => 'active',
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'chuluong',
                'password' => Hash::make('123'),
                'name' => 'Chu Luong',
                'email' => 'chuluong@gmail.com',
                'address' => 'HN',
                'phone_number' => '888888888888',
                'image' => null,
                'status' => 'active',
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ], 
            [
                'username' => 'chelinh',
                'password' => Hash::make('123'),
                'name' => 'Che Linh',
                'email' => 'chelinh@gmail.com',
                'address' => 'HN',
                'phone_number' => '777777777777',
                'image' => null,
                'status' => 'active',
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Add more user records as needed
        ]);
    }
}
