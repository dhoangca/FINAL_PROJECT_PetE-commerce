<?php

namespace App\Http\Controllers\AuthU;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutUController extends Controller
{
    public function logoutU()
    {
        Auth::logout();

        return redirect()->route('Clients.index');
    }
}
