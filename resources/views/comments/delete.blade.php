@extends('main')

@section('title', '| Delete Comment?')

@section('content')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Delete this comment?</h1>
			<p>
				<strong>Name:</strong> {{ $comment->name }}<br/>
				<strong>Email:</strong> {{ $comment->email }}<br/>
				<strong>Comment:</strong> {{ $comment->comment }}<br/>
			</p>

			<form action="{{ route('comments.destroy', $comment->id) }}" method="POST">
				{{ csrf_field() }}
				{{ method_field('DELETE') }}
				<input type="submit" class="btn btn-danger" value="Yes, delete this commment">
			</form>
		</div>
	</div>

@endsection