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
        $categories=CategoriModel::all();

        $pets=PetModel::all();

        $products=ProductModel::all();

        return view ('Front_end.Contents.index', compact('categories', 'pets', 'products',));
    }

    public function shop()
    {
        return view ('Front_end.Contents.shop');
    }

    public function shopdetail()
    {
        return view ('Front_end.Contents.shopdetail');
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
