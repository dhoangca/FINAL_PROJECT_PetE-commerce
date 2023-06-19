<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\LoginModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function getLogin()
    {
        return view('Admins.Contents.login');
    }

    public function postLogin(Request $request)
    {

        $username['info'] = $request->username;
        $password = $request->password;

        $result = DB::table('users')->WHERE('username', $username)->get()->toArray();
        
        foreach ($result as $value) {
            # code...
        }

        if ($value->password == $password) 
        {
            return redirect()->route('Admins.index', $username)->with('success', 'You have successfully logged in!');
        }else {
            return redirect()->back()->with('error', 'Invalid email or password.');
        }
    }
}
