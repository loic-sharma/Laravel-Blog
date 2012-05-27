<h2>{{$post->title}}</h2>

<p>{{$post->content}}</p>

<hr>

@foreach($post->comments as $comment)
	<p>{{$comment->content}}</p>

	<p>By <b>{{$comment->user->username}}</b></p>

	<hr>
@endforeach

@if(Auth::check())
	{{Form::open()}}
		<p>{{Form::label('comment', 'Comment:')}}<p>

		{{Form::textarea('comment')}}<br />

		{{Form::submit('Post')}}
	{{Form::close()}}
@endif