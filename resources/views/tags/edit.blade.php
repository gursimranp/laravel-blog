@extends('main')

@section('title', "Edit Tag: $tag->name")

@section('content')
<div class="row">
	<div class="col-sm-12 col-md-3">
		<form method="POST" class="form-inline" action="{{ route('tags.update', $tag->id) }}">
			<div class="form-group">
				<label for="name" class="sr-only">Name:</label>
				<div class="input-group">
					<input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" name="name" value="{{ $tag->name }}">
				</div>
				<button type="submit" class="btn btn-success form-control">Update</button> 
				<input type="hidden" name="_token" value="{{ Session::token() }}"> {{ method_field('PUT') }} 
			</div> 
		</form>
	</div>
</div>
<div class="row" style="margin-top: 20px">
	<div class="col-sm-12 col-md-3">
			<div class="form-group">
				<form method="POST" action="{{ route('tags.destroy', $tag->id) }}">
					<input type="submit" value="Delete" class="btn btn-danger btn-block mb-2 mr-sm-2 mb-sm-0"> 
					<input type="hidden" name="_token" value="{{ Session::token() }}"> {{ method_field('DELETE') }} 
				</form>
			</div>
	</div>
</div>
@endsection