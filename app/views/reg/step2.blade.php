@extends('layouts.default')

@section('content')
	<h1>Registration - Step 2</h1>
	{{ Form::open(['url' => 'step3']) }}

		{{ Form::hidden('username',"Input::old('username')") }}
		{{ Form::hidden('email',"Input::old('email')") }}
		{{ Form::hidden('password',"Input::old('password')") }}
		<div>
			{{ Form::label('firstname','First name:') }}
			{{ Form::text('firstname') }}

		</div>
		<div>
			{{ Form::label('lastname','Last name:') }}
			{{ Form::text('lastname') }}

		</div>
		<div>
			{{ Form::label('gender','Gender:') }}
			{{ Form::select('gender', array('male' => 'male', 'female' => 'female')) }}

		</div>
		<div>
			{{ Form::textarea('about','About...') }}

		</div>
		{{ link_to("step1",'Back') }}
		<div>{{ Form::submit('Next') }}</div>
	{{ Form::close() }}

@stop