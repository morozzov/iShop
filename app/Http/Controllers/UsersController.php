<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{
    public function signin()
    {
        return view('users.signin');
    }

    public function signinCheck(Request $request)
    {
        $login = $request->input('login');
        $password = $request->input('password');

        $user = DB::table('users')->where(
            [
                ['login', '=', $login],
                ['password', '=', $password],
            ]
        )->first();


        if ($user == null) {
            return "error";
        } else {
            $cart = DB::table('cart_items')->where('user_id', '=', $user->id)->count();
            Session::put('cart', $cart);
            Session::put('user', $user);
            return redirect('/');
        }
    }

    public function privateZone()
    {
        return "privateZone";
    }

    public function logout()
    {
        Session::forget('user');
        Session::forget('cart');
        return redirect('/');
    }
}
