<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Laravel: A Framework For Web Artisans</title>
	<meta name="viewport" content="width=device-width">
	{{ HTML::style('laravel/css/style.css') }}
</head>
<body>
	<div class="wrapper">
		<header>
			<h1>Laravel</h1>
			<h2>A Framework For Web Artisans</h2>

			<p class="intro-text" style="margin-top: 45px;">
				<a href="{{URL::home()}}">Home</a>

				@if(Auth::check())
					<a href="{{URL::to('user/logout')}}">Logout</a>
				@else
					<a href="{{URL::to('user/login')}}">Login</a>
				@endif
			</p>
		</header>
		<div role="main" class="main">
			@foreach($errors->all() as $error)
				<p style="color:red;">{{$error}}</p>
			@endforeach

			<div class="home">
				{{$content}}
			</div>
		</div>
	</div>
</body>
</html>
