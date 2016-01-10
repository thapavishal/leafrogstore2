@extends('layouts.master')

@section('content')

<div class="row">
	{!! Form::open(['url' => route('postRegister') ]) !!}
		<div class="form-group">
			<label for="">Name</label><input type="text" class="form-control" name="name">
			<span>{{ $errors->first('name') }}</span>
		</div>
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
			<label for="">Confirm Password</label>
			<input type="password" class="form-control"
			name="password_confirmation">

		</div>
		<div class="form-group">
			<label for=""> &nbsp;</label>
			<button type="submit" class="btn btn-sm btn-info">
				Register
			</button>
		</div>
	{!! Form::close() !!}
</div>

@stop