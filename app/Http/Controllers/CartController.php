<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function viewAllItemsByUserId()
    {
        $user = Session::get('user');
        if ($user == null) return redirect("/");
        else {
            $cartItems = CartItem::where('user_id', '=', $user->id)->get();
            return view('cart.cart')->with('cartItems', $cartItems);
        }
    }

    public function addNewItemToUser($productId)
    {
        $user = Session::get('user');
        $cart = Session::get('cart');
        Session::put('cart', $cart + 1);
        $userId = $user->id;

        $cartItem = new CartItem();
        $cartItem->user_id = $userId;
        $cartItem->product_id = $productId;
        $cartItem->save();
    }

    public function deleteItemById($id)
    {
        CartItem::destroy($id);
    }

    public function getCountItemsByUserId()
    {
        $user = Session::get('user');
        $userId = $user->id;
        return CartItem::where('user_id', '=', $userId)->count();
    }

    public function getPriceItemsByUserId()
    {
        $user = Session::get('user');
        $userId = $user->id;

        $cartItems = CartItem::where('user_id', '=', $userId)->get();
        $price = 0;

        foreach ($cartItems as $cartItem) {
            $price += $cartItem->product->price;
        }
        return $price;
    }
}
