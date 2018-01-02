@extends('main')

@section('title', '| '.$post->title);

@section('content')

<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h1>{{ $post->title }}</h1>
		<p>{{ $post->body }}</p>
		<hr>
		<p>Category: {{ $post->category->name }}</p>
	</div>
</div>

<div class="row">
	<div class="col-md-8">
		<hr>
		<h2>Comments</h2>
		@foreach($post->comments as $comment)
		<div class="card">
			<div class="card-block">
				{{ $comment->comment }}
				<p class="card-text">By {{ $comment->name }}</p>
			</div>
		</div>
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