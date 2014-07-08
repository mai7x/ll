<!doctype html>
<html>
<head>
	<title>Look at me Login</title>
</head>
<body>

	{{ Form::open(array('url' => 'login')) }}
		<h1>Login</h1>

		<!-- if there are login errors, show them here -->
		<p>
			{{ $errors->first('name') }}
			{{ $errors->first('password') }}
		</p>

		<p>
			{{ Form::label('name', 'UserName') }}
			{{ Form::text('name', Input::old('name') ) }}
		</p>

		<p>
			{{ Form::label('password', 'Password') }}
			{{ Form::password('password') }}
		</p>

		<p>{{ Form::submit('ログイン') }}</p>
	{{ Form::close() }}

</body>
</html>

