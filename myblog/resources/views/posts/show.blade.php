@extends('layout')
@section('title')
	@if($post)
	{{ $post->title }}
	@if(!Auth::guest() && ($post->author_id == Auth::user()->id || Auth::user()->is_admin() ))
		<button class="btn pull-right"><a href="{{ url('edit/'. $post->slug) }}">Edit Post</a></button>
		@endif
	@else
		Page doesn't exist, go watch The Notebook
		@endif
@stop

@section('content')
@if($post)
<div>
	{!! $post->body !!}
</div>
<div>
	<h2>Leave a Comment</h2>
</div>
@if(Auth::guest())
	<p>Login to Comment</p>
@else
<div class="panel-body">
	<form action="/comment/add" method="post">
		{!! csrf_field() !!}
		<input type="hidden" name="post_id" value="{{ $post->id }}">
		<input type="hidden" name="slug" value="{{ $post->slug }}">
		<div class="form-group">
			<textarea required="required" placeholder="Enter Comment Here" name="body" class="form-control"></textarea>
		</div>
		<input type="submit" name="post_comment" class="btn btn-success" value="Post">
	</form>
</div>
@endif
<div>
	@if($comments)
	<ul>
		@foreach($comments as $comment)
		<li class="panel-body">
			<div class="list-group">
				<div class="list-group-item">
					<h3>{{ $comment->author->name }}</h3>
					<p>{{ $comment->created_at->format('M d, Y \a\t h:i a') }}</p>
				</div>
			</div>
		</li>
		@endforeach
	</ul>
	@endif
</div>
@else
404 error
@endif
@stop