<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	Email: {{ $input['email']; }}
	Password: {{ $input['password']; }}

	<form action="{{ URL::route('account-create-confirm-post') }}" method="post">
	    <input type="hidden" name="email" value="{{ $input['email'] }}">
	    <input type="hidden" name="password" value="{{ $input['password'] }}">
	    {{ Form::token() }}
	    <a href="{{ URL::previous() }}">return</a>
	    <input type="submit" name="submit_forward" value="Submit">
	</form>


</body>
</html>



