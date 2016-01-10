<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Input;
use Auth;
use App\Models\Cart;

class ApiController extends Controller
{
    function products() {

    	return Product::all();
    }

    function addToCart( ) {

    	$user = Auth::user();
    	$input = Input::all();

    	$user->carts()->save( new Cart([
    			'product_id' => $input['id'],
    			'quantity' => $input['quantity'],
    			'price' => $input['price'],
    			'status' => 0 
    		]));

    	return
    	[ 'status' => 'success', 
    		'message' => 'Item Successfully added to Cart'
    	];
    }

    function getCartCount() {
    	$user = Auth::user();
    	return ['count' => $user->carts()->count() ] ;
    }

}
