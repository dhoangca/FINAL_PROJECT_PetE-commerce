<?php

namespace App\Http\Controllers\AuthU;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginUController extends Controller
{
    public function getLoginU()
    {   
        return view('Auth.loginu');
    }

    public function postLoginU(Request $request)
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
            return redirect('/');
        }

        return redirect()->back()->withErrors([
            'email' => 'Invalid credentials',
        ]);
    }
}
