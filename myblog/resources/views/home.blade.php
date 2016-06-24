@extends('layout')
@section('title')
{{$title}}
@stop

@section('content')
@if ( !$posts->count() )
There is no posts! Login and write about The Notebook!
@else
<div>
	@foreach($posts as $post)
	<div class="list-group">
		<div class="list-group-item">
			<h3>
				<a href="{{ url('/'.$post->slug) }}">{{ $post->title }}</a>
				@if(!Auth::guest() && ($post->author_id == Auth::user()->id || Auth::user()->is_admin() ))
					@if($post->active == '1')
					<button class="btn pull-right"><a href="{{ url('edit/'.$post->slug) }}">Edit Posts</a></button>
					@else 
					<button class="btn pull-right"><a href="{{ url('edit/'.$post->slug) }}">Edit Draft</a></button>
					@endif
				@endif
			</h3>
			<p>
				{{ $post->created_at->format('M d, Y \a\t h:i a') }} by <a href="#">{{ $post->author->name }}</a>
			</p>
		</div>
		<div class="list-group-item">
			<article>
				{!! str_limit($post->body, $limit = 1500, $end = '... <a href="#">Read More</a>') !!}
			</article>
		</div>
	</div>
	@endforeach
	{!! $posts->render() !!}
</div>
@endif
@stop