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

        $products = ProductModel::all();

        $category = CategoriModel::whereIn('type', ['pet', 'product', 'Accessory'])->get();
        
        $PetsDetail = PetModel::where('pet_id', $request->id)->first();

        // Assuming you have logic to calculate the cart count
        $cartCount = 0; // Replace this with your actual cart count calculation logic

        return view('Front_end.Contents.index', compact('categories', 'pets', 'products', 'category', 'PetsDetail', 'cartCount'));
    }

    public function shop()
    {
        $category = CategoriModel::whereIn('type', ['pet', 'product', 'Accessory'])->get();
        $products = ProductModel::all();

        // Assuming you have logic to calculate the cart count
        $cartCount = 0; // Replace this with your actual cart count calculation logic

        return view('Front_end.Contents.shop', compact('products', 'category', 'cartCount'));
    }

    public function shopdetailproducts(Request $request)
    {
        $category = CategoriModel::whereIn('type', ['pet', 'product', 'Accessory'])->get();
        $ProductsDetail = ProductModel::where('product_id', $request->id)->first();

        // Assuming you have logic to calculate the cart count
        $cartCount = 0; // Replace this with your actual cart count calculation logic

        $products = ProductModel::all();

        return view('Front_end.Contents.shopdetailproducts', compact('products', 'ProductsDetail', 'category', 'cartCount'));
    }

    public function shopdetailpet(Request $request)
    {
        $category = CategoriModel::whereIn('type', ['pet', 'product', 'Accessory'])->get();

        $PetsDetail = PetModel::where('pet_id', $request->id)->first();

        // Assuming you have logic to calculate the cart count
        $cartCount = 0; // Replace this with your actual cart count calculation logic

        $pets = PetModel::all();

        return view('Front_end.Contents.shopdetailpet', compact('pets', 'PetsDetail', 'category', 'cartCount'));
    }

    public function checkout()
    {
        $category = CategoriModel::whereIn('type', ['pet', 'product', 'Accessory'])->get();

        // Assuming you have logic to calculate the cart count
        $cartCount = 0; // Replace this with your actual cart count calculation logic

        return view('Front_end.Contents.checkout', compact('category', 'cartCount'));
    }

    public function contact()
    {
        $category = CategoriModel::whereIn('type', ['pet', 'product', 'Accessory'])->get();

        // Assuming you have logic to calculate the cart count
        $cartCount = 0; // Replace this with your actual cart count calculation logic

        return view('Front_end.Contents.contact', compact('category', 'cartCount'));
    }
}
