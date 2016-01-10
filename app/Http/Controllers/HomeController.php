<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Product;

class HomeController extends Controller
{
    function index() {

        $products = Product::all();

        return view('product.cart', ['products' => $products]);
    }
}
