<?php

namespace App\Models;

use \Eloquent;

class Product extends Eloquent {


protected $fillable = [
		'name', 
		'description',
		'price',
		'image'
	];


	protected $appends = ['url','image_url'];


	function getUrlAttribute( $url ) {

		return route('productDetail', $this->id);

	}

	function getImageUrlAttribute() {

		return url('uploads/images/' . $this->image );
	}


	


}