(function() {

	angular.module('lstore')
.controller( 'CartCtrl', CartCtrl );

/// Cart Ctrl //


	function CartCtrl( Product, Cart, $rootScope )  {

		var cart = this;
		cart.getCartCount = getCartCount();
		cart.getProducts = getProducts();
		cart.addToCart = addToCart;	
		$rootScope.cartCount = 5;	/// 


		function getCartCount() {
			Cart.getCartCount().then( function( res ) {				
				$rootScope.cartCount =  Cart.cnt;
			});
		}

		function addToCart( product ) {
			
			Cart.addToCart( product ).then(function(  res ) {
				
				if ( res.status == 'success' ) {
					alert( res.message );
				}
			})	

					

			
		}

		/// 

		function getProducts() {

		Product.getAll().then( function() {

			cart.products = Product.products;
			
		});





		}



	}

})();

