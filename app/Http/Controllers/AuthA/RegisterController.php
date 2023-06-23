<?php

namespace App\Http\Controllers\AuthA;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\UsersModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function getRegister()
    {
        return view('Auth.registeradmin');
    }



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

    public function postRegister(Request $request)
    {
        $validatedData = $this->validateUserInput($request->all());

        $user = new UsersModel;
        $user->name = $validatedData['name'];
        $user->username = $validatedData['username'];
        $user->email = $validatedData['email'];
        $user->password = Hash::make($validatedData['password']);
        $user->save();

        return redirect()->route('Admins.Login');
    }
}
