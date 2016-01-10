@extends('layouts.master')

@section('content')

<div class="row">
	<table class="table">
		<tr>
			<th>Name</th>
			<th>Description</th>
			<th>Price</th>
			<th>Image</th>
			<th>Action</th>
		</tr>

@if( !$products->isEmpty())
	@foreach( $products as $product )
		<tr>
			<td> <a href="{{ $product->url }}">{{ $product->name }}</a>
			</td>
			<td>{{ $product->description}}</td>
			<td>{{ $product->price }}</td>
			<td> <img src="{{ $product->image_url }}" alt="{{ $product->name }}" width="200"/>
			</td>
			<td><a href="{{ route('editProduct', [ $product->id ]) }}">Edit</a> | <a href="">Delete</a></td>
		</tr>
		@endforeach
		
		@else 
			<tr>
			<td colspan="4">There is no product</td>			
		</tr>
		@endif
	</table>
</div>


@stop