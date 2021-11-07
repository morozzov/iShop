<?php

namespace App\Http\Controllers;

use App\Http\Models\CartItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CartController extends Controller
{
    public function viewAllItemsByUserId($id)
    {
        $findRows = DB::table('cart_items')->where('user_id', '=', $id)->get();

        $foundProducts = array();
        foreach ($findRows as $row)
        {
           array_push($foundProducts, DB::table('products')->where('id', '=', $row->product_id)->get()[0]);
        }

        $findRow = $findRows[1];

        return view('cart.cart')->with('products', $foundProducts);
    }
}
