{{Form::open()}}
	{{Form::label('username', 'Username:')}}
	{{Form::text('username')}}<br />

	{{Form::label('password', 'Password:')}}
	{{Form::password('password')}}<br />

	{{Form::submit('Login')}}
{{Form::close()}}