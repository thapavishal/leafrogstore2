<html>
	<head>
	<title>My Ecommerce</title>	
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

{!! Html::script('assets/js/angular.js') !!}
{!! Html::script('app/app.js') !!}
{!! Html::script('app/product/cart.service.js') !!}
{!! Html::script('app/product/product.service.js') !!}
{!! Html::script('app/product/cart.controller.js') !!}



	</head>

	<body ng-app="lstore">
		<div class="container">
			<header>

				@if( Auth::check() ) 

		<div class="row pull-right" >
			<div>
				{!! Auth::user()->name !!}
			</div>
			In Cart: @{{ cartCount }} <br/>
			{!! link_to('logout', 'Logout') !!}
		</div>					
				@else

				{!! link_to('login', 'login') !!}

				@endif


			</header>
			
			@yield('content')
		</div> 
	</body>
</html>	