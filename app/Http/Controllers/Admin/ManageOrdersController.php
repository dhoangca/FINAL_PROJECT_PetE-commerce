<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Admin\OrderModel;

class ManageOrdersController extends Controller
{
    public function listorders()
    {
        $orders=OrderModel::all();

        return view ('Admins.Contents.listorders', compact("orders"));
    }

    public function manageorders()
    {
        $orders=OrderModel::all();

        return view ('Admins.Contents.manageorders', compact("orders"));
    }

    // public function getCreateOrders()
    // {
    //     $categories = DB::table('categories')->get();

    //     return view('Admins.Contents.createpets', compact("categories"));

    // }

    // //Store function to add data

    // public function postCreateOrders(Request $request)
    // {

    //     $pets = new OrderModel;

    //     $pets->name = $request->name;

    //     $pets->breed = $request->breed;

    //     $pets->gender = $request->gender;

    //     $pets->price = $request->price;

    //     $pets->description = $request->description;

    //     $pets->quantity = $request->quantity;

    //     $pets->image_url = $request->image_url;

    //     $pets->status = $request->status;

    //     $pets->category_id = $request->category_id;

    //     $pets->save();

    //     return redirect()->route('Admins.managepets');

    // }

    public function getEditOrders($pet_id)
    {
        $categories = DB::table('categories')->get();

        $data['cate'] = OrderModel::find($pet_id);

        return view('Admins.Contents.editpets',$data , compact("categories"));

    }

    public function postEditOrders(Request $request, $pet_id)
    {

        $pets = OrderModel::find($pet_id);

        $pets->name = $request->name;

        $pets->breed = $request->breed;

        $pets->gender = $request->gender;

        $pets->price = $request->price;

        $pets->description = $request->description;

        $pets->quantity = $request->quantity;

        $pets->image_url = $request->image_url;

        $pets->status = $request->status;

        $pets->category_id = $request->category_id;

        $pets->save();

        return redirect()->route('Admins.managepets');

    }

    public function delete($pet_id)
    {

        $pets = OrderModel::find($pet_id);

        $pets->delete();

        return back();
    }
}
