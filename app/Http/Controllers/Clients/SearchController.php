<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users\PetModel;
use App\Models\Users\ProductModel;
use App\Models\Users\CategoriModel;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->get('query');

        $petResults = PetModel::where(function ($queryBuilder) use ($query) {
            $queryBuilder->where('name', 'like', '%' . $query . '%')
                ->orWhere('price', 'like', '%' . $query . '%');
        })->get();

        $productResults = ProductModel::where(function ($queryBuilder) use ($query) {
            $queryBuilder->where('name', 'like', '%' . $query . '%')
                ->orWhere('price', 'like', '%' . $query . '%');
        })->get();

        $category = CategoriModel::whereIn('type', ['pet', 'product', 'Accessory'])->get();

        // Assuming you have logic to calculate the cart count
        $cartCount = 0; // Replace this with your actual cart count calculation logic

        return view('Front_end.Contents.search', compact('petResults', 'productResults', 'query', 'category', 'cartCount'));
    }
}
