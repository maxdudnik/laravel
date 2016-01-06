@extends('layouts.default')

@section('content')
	<h1>Edit profile</h1>
	{{ Form::model($user, array('action' => array('UsersController@update', $user->id), 'method' => 'PUT')) }}
		<div>
			{{ Form::label('username','Username:') }}
			{{ Form::text('username') }}
		</div>
		<div>
			{{ Form::label('password','Old password:') }}
			{{ Form::password('password') }}
			{{ $errors->first('password') }}
		</div>
		<div>
			{{ Form::label('newpassword','New password:') }}
			{{ Form::password('newpassword') }}

		</div>
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
			{{ Form::text('gender') }}
		</div>
		<div>
			{{ Form::label('about','About:') }}
			{{ Form::textarea('about') }}
		</div>
		<div>{{ Form::submit('Update profile') }}</div>
	{{ Form::close() }}
@stop