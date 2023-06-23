<?php

namespace App\Http\Controllers\AuthA;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function getLogin()
    {   
        return view('Auth.loginadmin');
    }

    public function postLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->status === 'blocked') {
                Auth::logout();
                return redirect()->back()->withErrors(['account_blocked' => 'Your account has been blocked.']);
            }
            return redirect('Admins/index');
        }

        return redirect()->back()->withErrors([
            'email' => 'Invalid credentials',
        ]);
    }
}
