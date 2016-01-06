<!DOCTYPE html>
<html>
<head>
   <title></title>
</head>
<body>
    <form action="{{ URL::route('account-create-post') }}" method="post">

        Email: <input type="text" name="email" value="{{ (isset($input['email'])) ? e($input['email']) : '' }}">
        @if($errors->has('email'))
            {{ $errors->first('email') }}
        @endif
        <br />

        Password: <input type="text" name="password" value="">
        @if($errors->has('password'))
            {{ $errors->first('password') }}
        @endif
        <br />

        Password Confirm: <input type="text" name="password_conf" value="">
        @if($errors->has('password_conf'))
            {{ $errors->first('password_conf') }}
        @endif
        <br />

        {{ Form::token() }}

        <input type="submit" value="Confirm">

</form>
</body>
</html>


