angular.module('lstore')
.factory( 'Product',  Product );

// Product service //

function Product( $http ) {

	
	var product = {};
	product.products = {};
	product.getAll = getAll;
	return product; 

	/// getAll ///

	function getAll() {

		return $http.get('api/products')
		.success(  function( res ){			
			product.products = res;

		})
		.error( function() {

		});
	}

	

}

