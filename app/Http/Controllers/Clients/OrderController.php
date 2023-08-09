<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users\UOrderItemsModel;
use App\Models\Users\UOrderModel;
use App\Models\Users\StatusModel;
use Illuminate\Validation\ValidationException;
use App\Models\Users\CategoriModel;

class OrderController extends Controller
{
    public function placeOrder(Request $request)
    {
        // dd($request->all());

        $paymentMethod = $request->input('payment_method_id');

        // Retrieve cart data and selected items from session (if applicable)
        $selectedCartItems = json_decode($request->input('selected_cart_items'), true);

        // dd($selectedCartItems);

        // Calculate total amount
        $totalAmount = $request->input('total_amount');

        // Create order using UOrderModel
        $order = UOrderModel::create([
            'order_date' => now(),
            'total_amount' => $totalAmount,
            'status_id' => 1,  // Assuming status ID for "pending" orders
            'user_id' => auth()->user()->user_id,
            'payment_method_id' => $paymentMethod,
            'code' => uniqid(),
        ]);

        // Create order items using UOrderItemsModel
        foreach ($selectedCartItems as $cartItem) {
            // dd($cartItem);

            UOrderItemsModel::create([
                'name' => $cartItem['name'],
                'quantity' => $cartItem['quantity'],
                'price' => $cartItem['price'],
                'image' => $cartItem['image'],
                'order_id' => $order->order_id,
                'item_id' => $cartItem['item_id'],
                'item_type' => $cartItem['item_type'],
                // ... (other fields)
            ]);
        }

        session()->forget('cart');

        return redirect()->route('Clients.orderSuccess', $order->order_id);
    }
    public function orderSuccess(UOrderModel $order)
    {
        $category = CategoriModel::whereIn('type', ['pet', 'product', 'Accessory'])->get();

        $cartData = $this->getCartCount(); // Get both cart count and total amount

        $cartCount = $cartData['cartCount'];

        $totalAmount = $cartData['totalAmount'];

        $orderItems = UOrderItemsModel::where('order_id', $order->order_id)->get();

        return view('Front_end.Contents.orderdetail', compact('order', 'orderItems','category', 'cartCount', 'totalAmount'));
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
