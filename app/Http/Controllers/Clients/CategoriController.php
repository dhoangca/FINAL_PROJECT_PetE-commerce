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

        $pets = PetModel::where('category_id', $categories->category_id)->get();

        $products = ProductModel::where('category_id', $categories->category_id)->get();

        return view('Front_end.Contents.FilteredProductsAndPets', compact('categories', 'products', 'pets'));
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
