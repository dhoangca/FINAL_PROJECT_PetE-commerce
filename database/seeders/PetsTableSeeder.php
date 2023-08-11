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
        DB::table('pets')->insert([
            [
                'name' => 'ALASKA NÂU ĐỎ BÉO Ú',
                'breed' => 'ALASKA',
                'gender' => 'Male',
                'price' => 100.00,
                'description' => 'Giống chó tuyết hoang được thuần hóa bởi bộ tộc Malamute..',
                'quantity' => 5,
                'image' => null,
                'status' => 'Còn hàng',
                'sales' => 5,
                'sold_at' => null,
                'user_id' => null,
                'category_id' => null,
            ],
            [
                'name' => 'BEAGLE CƯNG CƯNG',
                'breed' => 'BEAGLE',
                'gender' => 'Male',
                'price' => 200.00,
                'description' => 'Các nhà khoa học đã tìm thấy những dấu vết đầu tiên của loài Beagle từ thời Hy Lạp cổ đại..',
                'quantity' => 5,
                'image' => null,
                'status' => 'Còn hàng',
                'sales' => 1,
                'sold_at' => null,
                'user_id' => null,
                'category_id' => null,
            ],
            [
                'name' => 'CORGI ĐỰC CƯNG CƯNG',
                'breed' => 'CORGI',
                'gender' => 'Male',
                'price' => 250.00,
                'description' => 'Tên đầy đủ của Corgi là Pembroke Welsh Corgi.',
                'quantity' => 5,
                'image' => null,
                'status' => 'Còn hàng',
                'sales' => 2,
                'sold_at' => null,
                'user_id' => null,
                'category_id' => null,
            ],
            [
                'name' => 'GOLDEN ĐÁNG YÊU',
                'breed' => 'GOLDEN',
                'gender' => 'Male',
                'price' => 300.00,
                'description' => 'Golden Retriever là dòng cảnh khuyển có nguồn gốc từ nước Anh.',
                'quantity' => 5,
                'image' => null,
                'status' => 'Còn hàng',
                'sales' => 4,
                'sold_at' => null,
                'user_id' => null,
                'category_id' => null,
            ],
            [
                'name' => 'HUSKY ĐEN',
                'breed' => 'HUSKY',
                'gender' => 'Male',
                'price' => 250.00,
                'description' => ' Husky có nguồn gốc từ vùng Đông Bắc Siberia nước Nga.',
                'quantity' => 5,
                'image' => null,
                'status' => 'Còn hàng',
                'sales' => 3,
                'sold_at' => null,
                'user_id' => null,
                'category_id' => null,
            ],
            [
                'name' => 'Belarus',
                'breed' => 'Belarus',
                'gender' => 'Male',
                'price' => 250.00,
                'description' => 'A playful and friendly Siamese cat.',
                'quantity' => 5,
                'image' => null,
                'status' => 'Còn hàng',
                'sales' => 1,
                'sold_at' => null,
                'user_id' => null,
                'category_id' => null,
            ],
            [
                'name' => 'PHỐC SÓC SIÊU CUTE',
                'breed' => 'PHỐC',
                'gender' => 'Male',
                'price' => 250.00,
                'description' => 'Chó Phốc là dòng chó có ngoại hình cân đối và kích thước nhỏ gọn.',
                'quantity' => 5,
                'image' => null,
                'status' => 'Còn hàng',
                'sales' => 1,
                'sold_at' => null,
                'user_id' => null,
                'category_id' => null,
            ],
            [
                'name' => 'POODLE VÀNG MƠ',
                'breed' => 'POODLE',
                'gender' => 'Male',
                'price' => 250.00,
                'description' => 'Chó Poodle là giống chó săn vịt, rất giỏi trong việc bơi lội.',
                'quantity' => 5,
                'image' => null,
                'status' => 'Còn hàng',
                'sales' => 1,
                'sold_at' => null,
                'user_id' => null,
                'category_id' => null,
            ],
        ]);
    }
}
