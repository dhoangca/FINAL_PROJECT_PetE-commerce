<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users\CategoriModel;
use App\Models\Users\UOrderItemsModel;
use App\Models\Users\UOrderModel;
use Illuminate\Support\Facades\Auth;

class PurchaseOrderController extends Controller
{
    public function purchaseorder($status = 'all') // Default to 'all' if no status is provided
    {
        $category = CategoriModel::whereIn('type', ['pet', 'product', 'Accessory'])->get();
        $cartData = $this->getCartCount(); // Get both cart count and total amount
        $cartCount = $cartData['cartCount'];
        $totalAmount = $cartData['totalAmount'];

        // Retrieve orders based on the provided status
        $ordersQuery = UOrderModel::query();
        $user = Auth::user(); // Lấy thông tin người dùng đang đăng nhập

        if ($status !== 'all') {
            $ordersQuery->where('status_id', $status);
        }

        // Thêm điều kiện để lấy chỉ những đơn hàng thuộc về người dùng đăng nhập
        $ordersQuery->where('user_id', $user->user_id);
        $orders = $ordersQuery->get();

        return view('Front_end.Contents.purchaseorder', compact('orders', 'category', 'cartCount', 'totalAmount', 'status'));
    }

    public function getCartCount()
    {
        $cart = session()->get('cart') ?? [];
        $cartCount = 0;
        $totalAmount = 0;

        foreach ($cart as $item) {
            $cartCount += $item['quantity'];
            $totalAmount += $item['quantity'] * $item['price'];
        }

        return [
            'cartCount' => $cartCount,
            'totalAmount' => $totalAmount
        ];
    }
}
