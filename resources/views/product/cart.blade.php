@extends('layouts.master')


@section('content')
    <h1>Products</h1>
       <div ng-controller="CartCtrl as cart">
                <div class="col-sm-6 col-md-4" 
				ng-repeat="product in cart.products"
                >
                    <div class="thumbnail">
                        <img src="@{{ product.image_url }}" alt="This is image" class="">
                        <div class="caption">
                            <h3>Name : @{{ product.name }}</h3>
                            <p>@{{ product.description }}</p>
                            <h3>Price : @{{ product.price }}</h3>
                            <p><input type="text" 
                            	ng-model="product.quantity"
                            		/></p>
                            <p><button href="" class="btn btn-primary" role="button"                          	
                            	ng-show="product.quantity >= 1"
                            	ng-click="cart.addToCart( product )" target="_blank">Add to <span class="glyphicon glyphicon-shopping-cart"></span></button></p>
                            	
                        </div>
                    </div>
                </div>
    </div>

    


@stop