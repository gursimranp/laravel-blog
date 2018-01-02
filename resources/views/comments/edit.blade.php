@extends('main')

@section('title', '| Edit Comment')

@section('content')
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h1>Edit Comment</h1>

		<form action="{{ route('comments.update', $comment->id) }}" method="POST">
			<div class="form-group">
				<label for="name">Name:</label>
				<input type="text" name="name" value="{{ $comment->name }}" class="form-control">
			</div>
			<div class="form-group">
				<label for="email">Email:</label>
				<input type="text" name="email" value="{{ $comment->email }}" class="form-control">
			</div>
			<div class="form-group">
				<label for="comment">Comment:</label>
				<textarea name="comment" class="form-control">{{ $comment->comment }}</textarea>
			</div>
			<div class="form-group">
				{{ csrf_field() }}
				{{ method_field('PUT') }}
				<input type="submit" class="btn btn-primary">
			</div>
		</form>
	</div>
</div>

@endsection