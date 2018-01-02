@extends('main')

@section('title', "| Tag: $tag->name")

@section('content')

<div class="row">
	<div class="col-md-12">
		<h1>Tag: {{ $tag->name }} <a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-primary btn-sm">Edit</a></h1>
		<h6>{{ $tag->posts->count() }} Posts</h6>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>Title</th>
					<th>Tags</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				
				@foreach ($tag->posts as $post)
				<tr>
					<td>{{ $post->id }}</td>
					<td>{{ $post->title }}</td>
					<td>
						@foreach ($post->tags as $tag)
						<span class="badge badge-primary">{{ $tag->name }}</span> 
						@endforeach
					</td>
					<td><a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary btn-sm">View</a></td>
				</tr>
				@endforeach
				
			</tbody>
		</table>
	</div>
</div>

@endsection