@extends('layouts.master')

@section('content')

<div class="row">
	{!! Form::open(['url' => route('postLogin') ]) !!}
		
		<div class="form-group">
			<label for="">Email</label>
			<input type="text" class="form-control" name="email">
			<span>{{ $errors->first('email') }}</span>
		</div>
		<div class="form-group">
			<label for="">Password</label>
			<input type="password" class="form-control" name="password">
			<span>{{ $errors->first('password') }}</span>
		</div>
		
		<div class="form-group">
			<label for=""> &nbsp;</label>
			<button type="submit" class="btn btn-sm btn-info">
				Log In
			</button>
		</div>
	{!! Form::close() !!}
</div>

@stop