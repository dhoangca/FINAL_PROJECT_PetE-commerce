<?php

namespace App\Http\Controllers\AuthU;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\UsersModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Notifications\VerifyEmail;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterUController extends Controller
{
    public function getRegisterU()
    {
        return view('Auth.registeru');
    }
    // Edit done
    public function validateUserInput(array $data)
    {
        $rules = [
            'name' => 'required|string',
            'username' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ];

        $messages = [
            'name.required' => 'The name field is required.',
            'username.required' => 'The username field is required.',
            'email.required' => 'The email field is required.',
            'email.email' => 'The email must be a valid email address.',
            'email.unique' => 'The email has already been taken.',
            'password.required' => 'The password field is required.',
            'password.min' => 'The password must be at least 8 characters.',
        ];

        $validator = Validator::make($data, $rules, $messages);

        return $validator->validate();
    }

    public function postRegisterU(Request $request)
    {
        // Create a new user instance
        $user = new UsersModel;

        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('Clients.Login')->with('success', 'Registration successful. Please Login to shop.');
    }
}
