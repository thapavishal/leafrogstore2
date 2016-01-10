angular.module('lstore')
.factory( 'Cart', Cart );

// cart service //

function Cart( $http ) {

	var cart = {};
	cart.items = {};
	cart.addToCart = addToCart;
	cart.cnt = 0;
	cart.getCartCount = getCartCount;

	function getCartCount () {

		return $http.get( 'api/cart-count' ).success( function( res ) {
				cart.cnt = res.count;
				
		}).error( function() {

		});
	}


	function addToCart( product ) {

		return $http.post( 'api/cart', product ).success( function( res ) {
				return res;
		}).error( function() {

		});

	}

	return cart;


}

