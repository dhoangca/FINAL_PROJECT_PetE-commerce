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
                'name' => 'Mới',
                'description' => 'Đơn hàng khách hàng đã đặt hàng chưa qua xử lý.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Chờ xác nhận',
                'description' => 'Đơn hàng đang được chờ nhân viên viên xác nhận.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Đang xác nhận',
                'description' => 'Đơn hàng đang được nhân viên Chăm sóc khách hàng (gọi điện thoại) xác nhận với khách hàng.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Đã xác nhận',
                'description' => 'Đơn hàng đã được xác nhận thành công (khách hàng có mua hàng).',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Hết hàng',
                'description' => 'Sản phẩm của khách đặt đã hết hàng.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Đổi kho hàng',
                'description' => 'Đơn hàng được chuyển từ cửa hàng hết sản phẩm khách đặt sang cửa hàng còn tồn.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Đang đóng gói',
                'description' => 'Đơn hàng đang được nhặt hàng và đóng gói sản phẩm.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Đã đóng gói',
                'description' => 'Đơn hàng đã được nhặt hàng và hoàn thành đóng gói.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Chờ thu gom',
                'description' => 'Đơn hàng đã bắn sang hãng vận chuyển, chờ hãng vận chuyển tiếp nhận thông tin và nhận hàng.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Đang chuyển',
                'description' => 'Đơn hàng đang được chuyển đi cho khách hàng.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Thành công',
                'description' => 'Đơn hàng đã được giao thành công cho khách hàng.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Thất bại',
                'description' => 'Đơn hàng chưa giao được cho khách hàng. (Có thể vì khách hàng bận, đi vắng, khách hẹn lại thời điểm khác giao hàng...).',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Khách hủy',
                'description' => 'Khách hàng hủy không lấy hàng nữa.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Hệ thống hủy',
                'description' => 'Đơn hàng đã bị hệ thống hủy tự động.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Hãng vận chuyển hủy',
                'description' => 'Đơn hàng đã bị hãng vận chuyển hủy.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Đang hoàn',
                'description' => 'Những đơn hàng khách hàng hủy không muốn lấy sản phẩm nữa sẽ được luân chuyển trả về cho doanh nghiệp.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Xác nhận hoàn',
                'description' => 'Đơn hàng đã được hãng vận chuyển cập nhật là đã hoàn, trên nhanh sẽ ở trạng thái Xác nhận hoàn.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Đã chuyển hoàn',
                'description' => 'Thực tế doanh nghiệp đã nhận được hàng hoàn từ hãng vận chuyển.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
