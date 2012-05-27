@foreach($posts as $post)
	<h2><a href="{{URL::to('blog/post/'.$post->id)}}">{{$post->title}}</a></h2>

	<p>{{$post->content}}</p>

	<p>{{count($post->comments)}} Comments</p>
@endforeach