<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users\ProductModel;
use App\Models\Users\CategoriModel;

class ProductsController extends Controller
{
    // public function getCartCount()
    // {
    //     $cart = session()->get('cart') ?? [];
    //     $cartCount = 0;
    //     $totalAmount = 0;

    //     foreach ($cart as $item) {
    //         $cartCount += $item['quantity'];
    //         $totalAmount += $item['quantity'] * $item['price'];
    //     }

    //     return [
    //         'cartCount' => $cartCount,
    //         'totalAmount' => $totalAmount
    //     ];
    // }

    // public function filterByPrice(Request $request)
    // {
    //     $category = CategoriModel::whereIn('type', ['pet', 'product', 'Accessory'])->get();

    //     //phân trang
    //     $productsPerPage = 12; // You can adjust this as per your requirement
    //     $products = ProductModel::paginate($productsPerPage);
    //     //end phân trang
        
    //     $cartData = $this->getCartCount(); // Get both cart count and total amount
    //     $cartCount = $cartData['cartCount'];
    //     $totalAmount = $cartData['totalAmount'];

    //     // lọc 
    //     $selectedPriceRanges = $request->input('price_ranges', []);

    //     if (empty($selectedPriceRanges)) {
    //         // If no price ranges are selected, return all products
    //         $filteredProducts = ProductModel::all();
    //     } else {
    //         // Convert selected price ranges to an array of arrays
    //         $priceRanges = [
    //             [0, 100],   // $0 - $100
    //             [100, 200], // $100 - $200
    //             [200, 300], // $200 - $300
    //             [300, 400], // $300 - $400
    //             [400, 500], // $400 - $500
    //         ];

    //         $selectedRanges = [];
    //         foreach ($selectedPriceRanges as $index) {
    //             if (isset($priceRanges[$index])) {
    //                 $selectedRanges[] = $priceRanges[$index];
    //             }
    //         }

    //         // Fetch products based on the selected price ranges
    //         $filteredProducts = ProductModel::where(function ($query) use ($selectedRanges) {
    //             foreach ($selectedRanges as $range) {
    //                 $query->orWhereBetween('price', $range);
    //             }
    //         })->get();
    //     }
    //     return view('Front_end.Contents.shop', compact('products', 'category', 'cartCount', 'totalAmount','filteredProducts'));
    // }

}