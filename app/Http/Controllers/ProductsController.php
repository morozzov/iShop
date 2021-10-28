<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use MongoDB\Driver\Session;
use function Sodium\add;

class ProductsController extends Controller
{
    public function getByCategoryId($id)
    {
        $foundProducts = DB::table('products')->where('category_id', '=', $id)->get();

        return view('products.getByCategoryId')->with('products', $foundProducts);
    }
}