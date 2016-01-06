@extends('layouts.default')

@section('content')
	<h1>Registration - Step 3</h1>
	{{ Form::open(array('route' => 'users.store')) }}
		<div>
			{{ Input::old('username') }}
			{{ Input::old('password') }}
			{{ Input::old('email') }}
			{{ Input::get('firstname') }}
			{{ Input::get('lastname') }}
			{{ Input::get('gender') }}
			{{ Input::get('about') }}
		</div>
		{{ link_to("step2",'Back') }}
		<div>{{ Form::submit('Registrate') }}</div>
	{{ Form::close() }}
@stop