@extends('layouts.master')

@section('content')


	<table>
		<tr>
			<td>Name : {{ $product->name }}</td>
			<td>Decsription : {{ $product->description }}</td>
			<td>Price : {{ $product->price }}</td>
			<td></td>
		</tr>
	</table>
@stop