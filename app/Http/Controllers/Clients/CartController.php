<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users\CategoriModel;
use App\Models\Users\PetModel;
use App\Models\Users\ProductModel;
use App\Models\Users\PaymentMethodsModel;

class CartController extends Controller
{
    public function cart()
    {
        $category = CategoriModel::whereIn('type', ['pet', 'product', 'Accessory'])->get();

        $cartData = $this->getCartCount(); // Get both cart count and total amount
        $cartCount = $cartData['cartCount'];
        $totalAmount = $cartData['totalAmount'];

        return view('Front_end.Contents.cart', compact('category', 'cartCount', 'totalAmount'));
    }

    public function addToCart($item_id, $item_type)
    {
        $item = null;
        $prefixed_id = '';

        if ($item_type === 'pet') {
            $item = PetModel::find($item_id);
            $prefixed_id = 'pet_' . $item_id;
        } elseif ($item_type === 'product') {
            $item = ProductModel::find($item_id);
            $prefixed_id = 'product_' . $item_id;
        }

        if (!$item) {
            abort(404);
        }

        $cart = session()->get('cart') ?? [];

        if (isset($cart[$prefixed_id])) {
            // If the item already exists in the cart, increment the quantity
            $cart[$prefixed_id]['quantity']++;
        } else {
            // If the item does not exist in the cart, add it with quantity = 1
            $cart[$prefixed_id] = [
                'item_id' => $item_id, // Add the item_id to the cart item array
                'name' => $item->name,
                'quantity' => 1,
                'price' => $item->price,
                'image' => $item->image,
                'item_type' => $item_type // Add item_type to distinguish between pet and product
            ];
        }

        session()->put('cart', $cart);

        return redirect()->route('Clients.cart')->with('msg', 'Item added to cart successfully!');
    }

    public function checkoutForm(Request $request)
    {
        $paymentmethods = PaymentMethodsModel::all();

        // Retrieve the selected item IDs from the form submission
        $selectedItemIds = json_decode($request->input('selected_items'), true);

        // Retrieve the cart data from the session
        $cartData = session('cart') ?? [];

        // Check if the cart is empty
        if (empty($cartData)) {
            // Redirect back or handle the scenario where there are no items in the cart.
            // For example, you can show an error message and redirect back to the cart page.
            return redirect()->route('Clients.cart')->with('error', 'No items in the cart.');
        }

        // Filter the cart data to include only the selected items
        $selectedCartItems = collect($cartData)->filter(function ($cartItem) use ($selectedItemIds) {
            // Determine the type of the item (pet or product) based on the item_type in the cart data
            $itemType = $cartItem['item_type'];
            // Extract the item ID from the item_id in the cart data
            $itemId = $cartItem['item_id'];

            // Check if the item ID is in the array of selected item IDs
            return in_array($itemType . '_' . $itemId, $selectedItemIds);
        })->all();

        // Assuming you have logic to get cart count and total amount in $cartData
        $cartData1 = $this->getCartCount();
        $cartCount = $cartData1['cartCount'];
        $totalAmount = $cartData1['totalAmount'];

        $category = CategoriModel::whereIn('type', ['pet', 'product', 'Accessory'])->get();

        // Debugging: Dump the variables for inspection
        // dd($category, $cartData, $cartCount, $totalAmount, $selectedCartItems);

        // Pass the cart data and other necessary data to the checkout view
        return view('Front_end.Contents.checkout', compact('category', 'cartData', 'cartCount', 'totalAmount', 'selectedCartItems', 'paymentmethods'));
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
    public function delete(Request $request)
    {
        if ($request->item_id) {
            $cart = session()->get('cart');

            if (isset($cart[$request->item_id])) {
                unset($cart[$request->item_id]);

                session()->put('cart', $cart);

                return redirect()->route('Clients.cart')->with('msg', 'Item deleted successfully!');
            }
        }

        return redirect()->route('Clients.cart')->with('msg', 'Item not found in cart.');
    }

    // public function updatecart(Request $request)
    // {
    //     if ($request->id and $request->id) 
    //     {
    //         $cart = session()->get('cart');

    //         $cart[$request->id]["pQuantity"] = $request->pQuantity;

    //         session()->put('cart', $cart);

    //         $subTotal = $cart[$request->id]['pQuantity'] * $cart[$request->id]['pPrice'];

    //         $total = $this->getCartTotal();

    //         dd($cart);

    //         return view('Font_end.content.shoppingcart', ['msg' => 'Cart updated successfully!', 'total' => $total, '$subTotal' => $subTotal]);
    //     }
    // }
}
