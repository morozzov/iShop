<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use MongoDB\Driver\Session;
use function Sodium\add;

class ProductsController extends Controller
{
    public function getById($id)
    {
        $foundProduct = DB::table('products')->where('id', '=', $id)->get()->first();

        return view('products.getById')->with('product', $foundProduct);
    }

    public function getBySearch(Request $request)
    {


        $request = $request->input('request');
        $foundProducts = DB::table('products')->where('name', 'LIKE', '%' . $request . '%')->orWhere('description', 'LIKE', '%' . $request . '%')->get();
        return view('products.getByCategoryId')->with('products', $foundProducts);
    }

    public function getByCategoryId($id)
    {
        $foundProducts = DB::table('products')->where('category_id', '=', $id)->orderBy('name')->get();

        return view('products.getByCategoryId')->with('products', $foundProducts);
    }
}
