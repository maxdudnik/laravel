@extends('layouts.default')

@section('content')
	<h1>User profile:</h1>
	<p>Username: {{ $user->username }}</p>
	<p>Email: {{ $user->email }}</p>
	<p>First name: {{ $user->firstname }}</p>
	<p>Last name: {{ $user->lastname }}</p>
	<p>Gender: {{ $user->gender }}</p>
	<p>About: {{ $user->about }}</p>
	<p>{{ link_to("logout",'logout') }}</p>
    <p>{{ link_to("users/{$user->username}/edit",'edit profile') }}</p>
@stop