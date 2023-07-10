<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users\CategoriModel;
use App\Models\Users\PetModel;
use App\Models\Users\ProductModel;

class ClientsController extends Controller
{
    public function index()
    {
        $categories = CategoriModel::all();

        $pets=PetModel::all();

        $products=ProductModel::all();

        return view ('Front_end.Contents.index', compact('categories', 'pets', 'products'));
    }

    // public function navbar()
    // {
    //     $category = CategoriModel::where('type', 'pet')->get();

    //     return view ('Front_end.Layouts.navbar', compact('category'));
    // }

    public function shop()
    {
        $products=ProductModel::all();

        return view ('Front_end.Contents.shop', compact('products'));
    }

    public function shopdetailproducts(Request $request)
    {       
        $ProductsDetail = ProductModel::WHERE('product_id',$request->id)->first();        

        $products=ProductModel::all();

        return view ('Front_end.Contents.shopdetailproducts', compact('products', 'ProductsDetail'));
    }

    public function shopdetailpet(Request $request)
    {
        $PetsDetail = PetModel::WHERE('pet_id',$request->id)->first();        

        $pets=PetModel::all();        

        return view ('Front_end.Contents.shopdetailpet', compact('pets', 'PetsDetail'));
    }

    public function cart()
    {
        return view ('Front_end.Contents.cart');
    }

    public function checkout()
    {
        return view ('Front_end.Contents.checkout');
    }

    public function contact()
    {
        return view ('Front_end.Contents.contact');
    }

}
