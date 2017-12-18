@extends('main')

@section('title', ' | All Categories')

@section('content')
	<div class="row">
		<div class="col-md-8">
			<h1>Categories</h1>
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($categories as $category)
					<tr>
						<td>{{ $category->id }}</td>
						<td>{{ $category->name }}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<div class="col-md-3">
			<div class="well">
				<form method="POST" action="{{ route('categories.store') }}">
					<h2>New Category</h2>
					<div class="form-group">
						<label name="name">Name:</label>
						<input type="text" name="name" class="form-control">
					</div>
					<input type="submit" value="Create New Category" class="btn btn-primary btn-block">
					<input type="hidden" name="_token" value="{{ Session::token() }}">
				</form>
			</div>
		</div>
	</div>

@endsection