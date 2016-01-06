@extends('layouts.default')

@section('content')
	<p>All users</p>
	@if($users->count())
		@foreach ($users as $user)
		<li>{{ link_to("users/{$user->username}", $user->username) }}</li>
		@endforeach
	@else
		<p>Sorry,there are no users</p>
	@endif
@stop