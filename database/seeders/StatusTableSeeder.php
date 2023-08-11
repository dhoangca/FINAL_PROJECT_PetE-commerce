<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create sample statsu
        DB::table('status')->insert([
            [
                'name' => 'Chờ xác nhận/Chờ thanh toán',
                'description' => 'Đơn hàng khách hàng đã đặt hàng chưa qua xử lý.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Vận chuyển',
                'description' => 'Đơn hàng đang được vận chuyển qua các kho.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Đang giao',
                'description' => 'Đơn hàng đang được giao đến người nhận.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Hoàn thành',
                'description' => 'Đơn hàng đã được giao thành công cho người nhận.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Đã hủy',
                'description' => 'Đơn hàng đã bị hủy bởi khách hàng, shop hoặc đơn vị vận chuyển.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Trả hàng/Hoàn tiền',
                'description' => 'Đơn hàng được chuyển về shop và thực hiện hoàn tiền cho khách.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
