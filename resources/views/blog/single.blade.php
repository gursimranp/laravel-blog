@extends('main')

@section('title', '| '.$post->title);

@section('content')

<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h1>{{ $post->title }}</h1>
		<p>{{ $post->body }}</p>
		<hr>
		<p>Category: {{ $post->category->name }}</p>
		<p>Tags: 
			@foreach ($post->tags as $tag)
			<span class="badge badge-primary">{{ $tag->name }}</span>
			@endforeach
		</p>
	</div>
</div>

<div class="row">
	<div class="col-md-8">
		<hr>
		<h2>Comments</h2>
		@foreach($post->comments as $comment)
		<p>{{ $comment->name }}: {{ $comment->comment }}</p>
		@endforeach
	</div>
</div>

<div class="row">
	<div class="col-md-8">
		<div id="comment-form">
			<form action="{{ route('comments.store', $post->id) }}" method="POST">
				<div class="form-group">
					<label for="name">Name:</label>
					<input name="name" type="text" class="form-control">
				</div>
				<div class="form-group">
					<label for="email">Email:</label>
					<input name="email" type="text" class="form-control">
				</div>
				<div class="form-group">
					<label for="comment">Comment:</label>
					<textarea name="comment" class="form-control"></textarea>
				</div>
				<div class="form-group">
					<input type="hidden" name="_token" value="{{ Session::token() }}">
					<input type="submit" class="form-control btn btn-primary">
				</div>

			</form>
		</div>
	</div>
</div>

@endsection