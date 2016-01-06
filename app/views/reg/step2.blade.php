@extends('layouts.default')

@section('content')
	<h1>Registration - Step 2</h1>
	{{ Form::open(['url' => 'step2']) }}
		<?php var_dump(Input::all())?>
		<div>
			{{ Form::label('firstname','First name:') }}
			{{ Form::text('firstname') }}
			{{ $errors->first('firstname') }}
		</div>
		<div>
			{{ Form::label('lastname','Last name:') }}
			{{ Form::text('lastname') }}
			{{ $errors->first('lastname') }}
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
