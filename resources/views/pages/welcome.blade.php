@extends('main')

@section('title', ' | Home');

@section('content')
<h1>Welcome Page</h1>

<div class="row">
	<div class="col-md-8">
		@foreach($posts as $post)
		<div class="post">
			<h1>{{ $post->title }}</h1>
			<p>{{ substr($post->body, 0, 300) }}{{ strlen($post->body) > 300 ? "..." : "" }}</p>
			<a href="#" class="btn btn-primary btn-sm">Read More</a>
		</div>
		<hr>
		@endforeach
	</div>
</div>

@endsection