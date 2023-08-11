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
        DB::table('products')->insert([
            [
                'name' => 'BALO VẢI CAO CẤP',
                'description' => 'BALO VẢI CAO CẤP',
                'price' => '100.00',
                'image' => null,
                'quantity' => 5,
                'status' => 'Còn hàng',
                'category_id' => null,
            ],
            [
                'name' => 'CÁT ĐẬU NÀNH MISO',
                'description' => 'CÁT ĐẬU NÀNH MISO',
                'price' => '100.00',
                'image' => null,
                'quantity' => 5,
                'status' => 'Còn hàng',
                'category_id' => null,
            ],
            [
                'name' => 'LỒNG TĨNH ĐIỆN',
                'description' => 'LỒNG TĨNH ĐIỆN',
                'price' => '100.00',
                'image' => null,
                'quantity' => 5,
                'status' => 'Còn hàng',
                'category_id' => null,
            ],
            [
                'name' => 'DÂY VÒNG CỔ CHUÔNG',
                'description' => 'DÂY VÒNG CỔ CHUÔNG',
                'price' => '100.00',
                'image' => null,
                'quantity' => 5,
                'status' => 'Còn hàng',
                'category_id' => null,
            ],
            [
                'name' => 'ĐỒ CHƠI BÓNG ĐỒNG GIÁ',
                'description' => 'ĐỒ CHƠI BÓNG ĐỒNG GIÁ',
                'price' => '100.00',
                'image' => null,
                'quantity' => 5,
                'status' => 'Còn hàng',
                'category_id' => null,
            ],
            [
                'name' => 'XỊT VỆ SINH',
                'description' => 'XỊT VỆ SINH',
                'price' => '100.00',
                'image' => null,
                'quantity' => 5,
                'status' => 'Còn hàng',
                'category_id' => null,
            ],
            [
                'name' => 'NỆM TRÒN HÌNH HOA',
                'description' => 'NỆM TRÒN HÌNH HOA',
                'price' => '100.00',
                'image' => null,
                'quantity' => 5,
                'status' => 'Còn hàng',
                'category_id' => null,
            ],
            [
                'name' => 'THỨC ĂN',
                'description' => 'THỨC ĂN',
                'price' => '100.00',
                'image' => null,
                'quantity' => 5,
                'status' => 'Còn hàng',
                'category_id' => null,
            ],
            
        ]);
    }
}
