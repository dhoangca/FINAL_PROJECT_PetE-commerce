<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function index()
    {
        return view ('Front_end.Contents.index');
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
