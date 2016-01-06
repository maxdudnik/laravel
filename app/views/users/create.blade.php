@extends('layouts.default')

@section('content')
	<h1>Registration</h1>
	{{ Form::open(['route' => 'users.store']) }}
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
		<div>{{ Form::submit('Registrate') }}</div>
	{{ Form::close() }}
@stop
