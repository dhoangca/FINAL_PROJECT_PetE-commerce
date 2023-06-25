<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users\PetModel;
use App\Models\Users\ProductModel;

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

        return view('Front_end.Contents.search', compact('petResults', 'productResults', 'query'));
    }
}
