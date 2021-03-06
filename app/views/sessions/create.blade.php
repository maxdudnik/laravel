@extends('layouts.default')

@section('content')
	<h1>Login</h1>
	{{ Form::open(['route' => 'sessions.store']) }}
		<div>
			{{ Form::label('email','Email:') }}
			{{ Form::text('email') }}
			{{ $errors->first('email') }}
		</div>
		<div>
			{{ Form::label('password','Password:') }}
			{{ Form::password('password') }}
			{{ $errors->first('password') }}
		</div>
		<div>{{ Form::submit('Login') }}</div>
	{{ Form::close() }}
	<p>{{ link_to("step1",'registration') }}</p>
@stop
