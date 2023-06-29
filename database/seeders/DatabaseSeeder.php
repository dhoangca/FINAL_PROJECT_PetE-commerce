<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Call your individual seeders here
        $this->call(UsersTableSeeder::class);
        $this->call(SlidesTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(PaymentMethodsTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(OrderItemsTableSeeder::class);
        $this->call(CartTableSeeder::class);
    }
}
