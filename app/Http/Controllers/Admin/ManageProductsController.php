<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\ProductModel;
use Illuminate\Support\Facades\DB;

class ManageProductsController extends Controller
{
    public function listproducts()
    {
        $products=ProductModel::all();

        return view ('Admins.Contents.listproducts', compact("products"));
    }

    public function manageproducts()
    {
        $products=ProductModel::all();

        return view ('Admins.Contents.manageproducts', compact("products"));
    }

    public function getCreateProducts()
    {
        $categories = DB::table('categories')->get();

        return view('Admins.Contents.createproducts', compact("categories"));

    }

    //Store function to add data

    public function postCreateProducts(Request $request)
    {

        $products = new ProductModel;

        $products->name = $request->name;

        $products->description = $request->description;

        $products->price = $request->price;

        $products->image = $request->image;

        $products->quantity = $request->quantity;

        $products->status = $request->status;

        $products->category_id = $request->category_id;

        // $products->category_id = $request->category_id;

        $products->save();

        return redirect()->route('Admins.manageproducts');

    }

    public function getEditProducts($product_id)
    {
        $categories = DB::table('categories')->get();

        $data['cate'] = ProductModel::find($product_id);

        return view('Admins.Contents.editproducts',$data, compact("categories"));

    }

    public function postEditProducts(Request $request, $product_id)
    {

        $products = ProductModel::find($product_id);

        $products->name = $request->name;

        $products->description = $request->description;

        $products->price = $request->price;

        $products->image = $request->image;

        $products->quantity = $request->quantity;

        $products->status = $request->status;

        $products->category_id = $request->category_id;

        $products->save();

        return redirect()->route('Admins.manageproducts');

    }

    public function delete($product_id)
    {

        $pets = ProductModel::find($product_id);

        $pets->delete();

        return back();
    }
}
