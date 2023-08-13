<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users\CategoriModel;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin\UsersModel;


class ProfileController extends Controller
{
    public function edit()
    {
        $category = CategoriModel::whereIn('type', ['pet', 'product', 'Accessory'])->get();
        $cartData = $this->getCartCount(); // Get both cart count and total amount
        $cartCount = $cartData['cartCount'];
        $totalAmount = $cartData['totalAmount'];

        $user = auth()->user();

        return view('Front_end.Contents.profile', compact('user', 'category', 'cartCount', 'totalAmount',));
    }

    public function getCartCount()
    {
        $cart = session()->get('cart') ?? [];
        $cartCount = 0;
        $totalAmount = 0;

        foreach ($cart as $item) {
            $cartCount += $item['quantity'];
            $totalAmount += $item['quantity'] * $item['price'];
        }

        return [
            'cartCount' => $cartCount,
            'totalAmount' => $totalAmount
        ];
    }

    public function update(Request $request)
    {
        
        $user = Auth::user();
        
        $request->validate([
            'image' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'address' => 'required|string|max:255',
            'phone_number' => [
                'required',
                'string',
                'max:20',
                'regex:/^[0-9()+\-.\s]*$/',
            ],
            // Add other validation rules as needed
        ]);
        /** @var \App\Models\Admin\UsersModel $user **/
        $user->image = $request->image;
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->phone_number = $request->phone_number;
        $user->save();

        return redirect()->back()->with('profile_success', 'Profile updated successfully. now you can shopping');
    }
}
