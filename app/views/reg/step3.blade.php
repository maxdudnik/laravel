@extends('layouts.default')

@section('content')
	<h1>Registration - Step 3</h1>
	{{ Form::open(array('route' => 'users.store')) }}
		{{ Form::hidden('username',"Input::old('username')") }}
		{{ Form::hidden('email',"Input::old('email')") }}
		{{ Form::hidden('password',"Input::old('password')") }}
		{{ Form::hidden('firstname',"Input::old('firstname')") }}
		{{ Form::hidden('lastname',"Input::old('lastname')") }}
		{{ Form::hidden('gender',"Input::old('gender')") }}
		{{ Form::hidden('about',"Input::old('about')") }}
		<div>
			{{ Input::get('username') }}
			{{ Input::get('password') }}
			{{ Input::get('email') }}
			{{ Input::get('firstname') }}
			{{ Input::get('lastname') }}
			{{ Input::get('gender') }}
			{{ Input::get('about') }}
		</div>
		{{ link_to("step2",'Back') }}
		<div>{{ Form::submit('Registrate') }}</div>
	{{ Form::close() }}
@stop
