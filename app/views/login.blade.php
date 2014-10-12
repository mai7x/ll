<!doctype html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>

	{{ Form::open(array('url' => 'login')) }}
		<h1>Login</h1>

		<!-- if there are login errors, show them here -->
		<p>
			{{ Session::get('flash_error')}}

		</p>
		<p>
			{{ Form::label('name', 'UserName') }}
			{{ Form::text('name', Input::old('name') ) }}
			{{ $errors->first('name') }}
		</p>

		<p>
			{{ Form::label('password', 'Password') }}
			{{ Form::password('password') }}
			{{ $errors->first('password') }}
		</p>

		<p>{{ Form::submit('ログイン') }}</p>
	{{ Form::close() }}

</body>
</html>

