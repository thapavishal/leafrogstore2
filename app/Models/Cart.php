<?php

namespace App\Models;

class Cart extends \Eloquent {

	protected $fillable = [
		'product_id',
		'user_id',
		'quantity',
		'status',
		'price'
	];
}