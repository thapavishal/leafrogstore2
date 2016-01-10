@extends('layouts.master')

@section('content')

<div class="row">
	

	{!! Form::open( 
		['url' => route('saveProduct', [$product->id]) ] )!!}
		<div class="form-group">
			<label for="">
			Name
			</label>
			<input type="text" class="form-control" 
			value="{{ $product->name}}" 
			name="name" >
			<span>{{ $errors->first('name') }}</span>
		</div>
		<div class="form-group">
			<label for="">Description</label>
			<textarea type="text" class="form-control" name="description">{{ $product->description}}</textarea>
			<span>{{ $errors->first('description') }}</span>
		</div>
		<div class="form-group">
			<label for="">Price</label>
			<input type="text" class="form-control" value={{ $product->price}} name="price">
			<span>{{ $errors->first('price') }}</span>
		</div>
		<div class="form-group">
			<label for="">&nbsp;</label>
			<button>Submit</button>
		</div>
	{!! Form::close() !!}
</div>


@stop