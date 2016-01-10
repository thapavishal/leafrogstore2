@extends('layouts.master')

@section('content')

<div class="row">
	<form action="{{ route('postAddProduct') }}" role="form" 
	method="post" enctype="multipart/form-data">
		<input type="hidden" value="{{ csrf_token() }}" name="_token"/>
		<div class="form-group">
			<label for="">
			Name
			</label>
			<input type="text" class="form-control" name="name" >
			<span>{{ $errors->first('name') }}</span>
		</div>
		<div class="form-group">
			<label for="">Description</label>
			<textarea type="text" class="form-control" name="description"></textarea>
			<span>{{ $errors->first('description') }}</span>
		</div>
		<div class="form-group">
			<label for="">Price</label>
			<input type="text" class="form-control" name="price">
			<span>{{ $errors->first('price') }}</span>
		</div>
		<div class="form-group">
			<label for="">Image</label>
			<input type="file" class="form-control" name="image">
			<span>{{ $errors->first('image') }}</span>
		</div>
		<div class="form-group">
			<label for="">&nbsp;</label>
			<button>Submit</button>
		</div>
	</form>
</div>


@stop