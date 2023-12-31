<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users\CategoriModel;
use App\Models\Users\ProductModel;
use App\Models\Users\PetModel;

class CategoriController extends Controller
{
    public function filterByCategory($category_id)
    {
        $categories = CategoriModel::findOrFail($category_id);

        $productsPerPage = 12; // Number of products per page
        $products = ProductModel::where('category_id', $categories->category_id)->paginate($productsPerPage);

        $petsPerPage = 12; // Number of pets per page
        $pets = PetModel::where('category_id', $categories->category_id)->paginate($petsPerPage);

        $category = CategoriModel::whereIn('type', ['pet', 'product', 'Accessory'])->get();

        // Assuming you have logic to calculate the cart count
        $cartData = $this->getCartCount(); // Get both cart count and total amount

        $cartCount = $cartData['cartCount'];

        $totalAmount = $cartData['totalAmount'];

        return view('Front_end.Contents.FilteredProductsAndPets', compact('categories', 'products', 'pets', 'category', 'cartCount'));
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

    // public function filterByType($type)
    // {
    //     $category = CategoriModel::where('type', $type)->first();

    //     if ($category) {
    //         $pets = PetModel::where('category_id', $category->category_id)->get();
    //         $products = ProductModel::where('category_id', $category->category_id)->get();

    //         return view('Front_end.Contents.FilteredProductsAndPets', compact('category', 'products', 'pets'));
    //     } else {
    //         // No category found for the given type
    //         abort(404);
    //     }
    // }
}
