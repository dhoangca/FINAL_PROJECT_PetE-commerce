<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\CategoriModel;

class ManageCategoriController extends Controller
{
    public function listcategoris()
    {
        $categoris=CategoriModel::all();

        return view ('Admins.Contents.listcategoris', compact("categoris"));
    }

    public function managecategoris()
    {
        $categoris=CategoriModel::all();

        return view ('Admins.Contents.managecategoris', compact("categoris"));
    }

    public function getCreateCategori()
    {

        return view('Admins.Contents.createcategori');

    }

    //Store function to add data

    public function postCreateCategori(Request $request)
    {

        $categoris = new CategoriModel;

        $categoris->name = $request->name;

        $categoris->description = $request->description;

        $categoris->save();

        return redirect()->route('Admins.managecategoris');

    }

    public function getEditCategori($category_id)
    {

        $data['cate'] = CategoriModel::find($category_id);

        return view('Admins.Contents.editcategori',$data);

    }

    public function postEditCategori(Request $request, $category_id)
    {

        $categoris = CategoriModel::find($category_id);

        $categoris->name = $request->name;

        $categoris->description = $request->description;

        $categoris->save();

        return redirect()->route('Admins.managecategoris');

    }

    public function delete($category_id)
    {

        $pets = CategoriModel::find($category_id);

        $pets->delete();

        return back();
    }
}
