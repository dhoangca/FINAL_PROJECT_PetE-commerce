<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\UsersModel;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function listuser()
    {
        $users=UsersModel::all();

        return view ('Admins.Contents.listuser', compact("users"));
    }

    public function manageusers()
    {
        $users=UsersModel::all();

        return view ('Admins.Contents.manageusers', compact("users"));
    }

    public function getCreate()
    {

        return view('Admins.Contents.creatusers');

    }

    //Store function to add data

    public function postCreate(Request $request)
    {

        $users = new UsersModel;

        $users->username = $request->username;

        $users->password = $request->password;

        $users->name = $request->name;

        $users->email = $request->email;

        $users->address = $request->address;

        $users->phone_number = $request->phone_number;

        $users->save();

        return redirect()->route('Admins.manageusers');

    }

    public function getEditCate($user_id)
    {

        $data['cate'] = UsersModel::find($user_id);

        return view('Admins.Contents.editusers',$data);

    }

    public function postEditCate(Request $request, $user_id)
    {

        $users = UsersModel::find($user_id);

        $users->username = $request->username;

        $users->name = $request->name;

        $users->email = $request->email;

        $users->address = $request->address;

        $users->phone_number = $request->phone_number;

        $users->save();

        return redirect()->route('Admins.manageusers');

    }

    public function delete($user_id)
    {

        $users = UsersModel::find($user_id);

        $users->delete();

        return back();
    }
}
