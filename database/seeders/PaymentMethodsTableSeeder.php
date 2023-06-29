<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentMethodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define sample payment method data
        $paymentMethods = [
            [
                'payment_method_name' => 'Thanh toán khi nhận hàng',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'payment_method_name' => 'Chuyển khoản',
                'created_at' => now(),
                'updated_at' => now(),
            ],            
        ];

        // Insert payment method data into the table
        DB::table('payment_methods')->insert($paymentMethods);
    }
}
