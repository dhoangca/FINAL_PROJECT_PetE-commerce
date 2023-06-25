<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\PetModel;
use Illuminate\Support\Facades\DB;

class ManagePetController extends Controller
{
    public function listpets()
    {
        $pets=PetModel::all();

        return view ('Admins.Contents.listpets', compact("pets"));
    }

    public function managepets()
    {
        $pets=PetModel::all();

        return view ('Admins.Contents.managepets', compact("pets"));
    }

    public function getCreatePets()
    {
        $categories = DB::table('categories')->get();

        return view('Admins.Contents.createpets', compact("categories"));

    }

    //Store function to add data

    public function postCreatePets(Request $request)
    {

        $pets = new PetModel;

        $pets->name = $request->name;

        $pets->breed = $request->breed;

        $pets->gender = $request->gender;

        $pets->price = $request->price;

        $pets->description = $request->description;

        $pets->quantity = $request->quantity;

        $pets->image_url = $request->image_url;

        $pets->category_id = $request->category_id;

        $pets->save();

        return redirect()->route('Admins.managepets');

    }

    public function getEditPets($pet_id)
    {
        $categories = DB::table('categories')->get();

        $data['cate'] = PetModel::find($pet_id);

        return view('Admins.Contents.editpets',$data , compact("categories"));

    }

    public function postEditPets(Request $request, $pet_id)
    {

        $pets = PetModel::find($pet_id);

        $pets->name = $request->name;

        $pets->breed = $request->breed;

        $pets->gender = $request->gender;

        $pets->price = $request->price;

        $pets->description = $request->description;

        $pets->quantity = $request->quantity;

        $pets->image_url = $request->image_url;

        $pets->category_id = $request->category_id;

        $pets->save();

        return redirect()->route('Admins.managepets');

    }

    public function delete($pet_id)
    {

        $pets = PetModel::find($pet_id);

        $pets->delete();

        return back();
    }
}
