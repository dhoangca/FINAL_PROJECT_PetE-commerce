<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users\CategoriModel;
use App\Models\Users\PetModel;
use App\Models\Users\ProductModel;

class ClientsController extends Controller
{
    public function index(Request $request)
    {
        $categories = CategoriModel::all();

        $pets = PetModel::all();

        $bestSellingPets = PetModel::orderBy('sales', 'desc')->limit(4)->get();

        $products = ProductModel::all();

        $category = CategoriModel::whereIn('type', ['pet', 'product', 'Accessory'])->get();

        $cartData = $this->getCartCount(); // Get both cart count and total amount
        $cartCount = $cartData['cartCount'];
        $totalAmount = $cartData['totalAmount'];

        return view('Front_end.Contents.index', compact('categories', 'pets', 'products', 'category',  'cartCount', 'totalAmount', 'bestSellingPets'));
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

    public function shop()
    {
        $category = CategoriModel::whereIn('type', ['pet', 'product', 'Accessory'])->get();

        $products = ProductModel::all();

        $cartData = $this->getCartCount(); // Get both cart count and total amount
        $cartCount = $cartData['cartCount'];
        $totalAmount = $cartData['totalAmount'];

        return view('Front_end.Contents.shop', compact('products', 'category', 'cartCount', 'totalAmount'));
    }

    public function shopdetailproducts(Request $request)
    {
        $category = CategoriModel::whereIn('type', ['pet', 'product', 'Accessory'])->get();

        $ProductsDetail = ProductModel::where('product_id', $request->product_id)->first();

        $cartData = $this->getCartCount(); // Get both cart count and total amount
        $cartCount = $cartData['cartCount'];
        $totalAmount = $cartData['totalAmount'];

        $products = ProductModel::all();

        return view('Front_end.Contents.shopdetailproducts', compact('products', 'ProductsDetail', 'category', 'cartCount', 'totalAmount'));
    }

    public function shopdetailpet(Request $request)
    {
        $category = CategoriModel::whereIn('type', ['pet', 'product', 'Accessory'])->get();

        $PetsDetail = PetModel::where('pet_id', $request->pet_id)->first();

        $cartData = $this->getCartCount(); // Get both cart count and total amount
        $cartCount = $cartData['cartCount'];
        $totalAmount = $cartData['totalAmount'];

        $pets = PetModel::all();

        return view('Front_end.Contents.shopdetailpet', compact('pets', 'PetsDetail', 'category', 'cartCount', 'totalAmount'));
    }

    public function checkout()
    {
        $category = CategoriModel::whereIn('type', ['pet', 'product', 'Accessory'])->get();

        $cartData = $this->getCartCount(); // Get both cart count and total amount
        $cartCount = $cartData['cartCount'];
        $totalAmount = $cartData['totalAmount'];

        return view('Front_end.Contents.checkout', compact('category', 'cartCount', 'totalAmount'));
    }

    public function contact()
    {
        $category = CategoriModel::whereIn('type', ['pet', 'product', 'Accessory'])->get();

        $cartData = $this->getCartCount(); // Get both cart count and total amount
        $cartCount = $cartData['cartCount'];
        $totalAmount = $cartData['totalAmount'];

        return view('Front_end.Contents.contact', compact('category', 'cartCount', 'totalAmount'));
    }
}
