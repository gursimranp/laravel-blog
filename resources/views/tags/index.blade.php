@extends('main')

@section('title', ' | All Tags')

@section('content')
	<div class="row">
		<div class="col-md-8">
			<h1>Tags</h1>
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					@foreach ($tags as $tag)
					<tr>
						<td>{{ $tag->id }}</td>
						<td>{{ $tag->name }}</td>
						<td><a href="{{ route('tags.show', $tag->id) }}" class="btn btn-primary btn-sm"">View</a> <a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-primary btn-sm"">Edit</a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<div class="col-md-3">
			<div class="well">
				<form method="POST" action="{{ route('tags.store') }}">
					<h2>New Tag</h2>
					<div class="form-group">
						<label name="name">Name:</label>
						<input type="text" name="name" class="form-control">
					</div>
					<input type="submit" value="Create New Tag" class="btn btn-primary btn-block">
					<input type="hidden" name="_token" value="{{ Session::token() }}">
				</form>
			</div>
		</div>
	</div>

@endsection