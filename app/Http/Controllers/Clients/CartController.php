<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users\CategoriModel;
use App\Models\Users\PetModel;
use App\Models\Users\ProductModel;

class CartController extends Controller
{
    public function cart()
    {
        $category = CategoriModel::whereIn('type', ['pet', 'product', 'Accessory'])->get();

        // Assuming you have logic to calculate the cart count
        $cartCount = 0; // Replace this with your actual cart count calculation logic

        return view('Front_end.Contents.cart', compact('category', 'cartCount'));
    }

    // public function addToCart($item_id, $item_type)
    // {
    //     $category = CategoriModel::whereIn('type', ['pet', 'product', 'Accessory'])->get();

    //     $item = null;
    //     $prefixed_id = '';

    //     if ($item_type === 'pet') {
    //         $item = PetModel::find($item_id);
    //         $prefixed_id = 'pet_' . $item_id;
    //     } elseif ($item_type === 'product') {
    //         $item = ProductModel::find($item_id);
    //         $prefixed_id = 'product_' . $item_id;
    //     }

    //     if (!$item) {
    //         abort(404);
    //     }

    //     $cart = session()->get('cart') ?? [];

    //     if (isset($cart[$prefixed_id])) {
    //         // If the item already exists in the cart, increment the quantity
    //         $cart[$prefixed_id]['quantity']++;
    //         session()->put('cart', $cart);
    //         return view('Front_end.Contents.cart', compact('category'))->with('msg', 'Item quantity updated successfully!');
    //     }

    //     // If the item does not exist in the cart, add it with quantity = 1
    //     $cart[$prefixed_id] = [
    //         'name' => $item->name,
    //         'quantity' => 1,
    //         'price' => $item->price,
    //         'image' => $item->image,
    //         'item_type' => $item_type // Add item_type to distinguish between pet and product
    //     ];

    //     session()->put('cart', $cart);

    //     return view('Front_end.Contents.cart', compact('category'))->with('msg', 'Item added to cart successfully!');
    // }
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
            session()->put('cart', $cart);
            return redirect()->route('cart')->with('msg', 'Item quantity updated successfully!');
        }

        // If the item does not exist in the cart, add it with quantity = 1
        $cart[$prefixed_id] = [
            'name' => $item->name,
            'quantity' => 1,
            'price' => $item->price,
            'image' => $item->image,
            'item_type' => $item_type // Add item_type to distinguish between pet and product
        ];

        session()->put('cart', $cart);

        return redirect()->route('cart')->with('msg', 'Item added to cart successfully!');
    }

    public function getCartCount()
    {
        $cartCount = 0;

        // Retrieve the cart items from the session
        $cartItems = session()->get('cart', []);

        // Calculate the cart count based on the number of items in the cart
        foreach ($cartItems as $item) {
            $cartCount += $item['quantity'];
        }

        // Return the cart count as JSON response
        return response()->json(['cartCount' => $cartCount]);
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
