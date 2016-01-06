@extends('layouts.default')

@section('content')
	<h1>Registration - Step 1</h1>
	{{ Form::open(['url' => 'step1']) }}
		<div>
			{{ Form::label('username','Username:') }}
			{{ Form::text('username') }}
			{{ $errors->first('username') }}
		</div>
		<div>
			{{ Form::label('password','Password:') }}
			{{ Form::password('password') }}
			{{ $errors->first('password') }}
		</div>
		<div>
			{{ Form::label('email','Email:') }}
			{{ Form::text('email') }}
			{{ $errors->first('email') }}
		</div>
		{{ link_to("/",'Back') }}
		<div>{{ Form::submit('Next') }}</div>
	{{ Form::close() }}
@stop
