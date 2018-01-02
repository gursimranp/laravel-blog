@extends('main')

@section('title', ' | Contact Me');

@section('content')

<div class="row">
	<div class="col-md-12">
		<h1>Contact Page</h1>
		<hr>
		<form method="POST" action="{{ url('contact') }}">
			<div class="form-group">
				<label for="email" name="email">Email:</label>
				<input type="text" id="email" name="email" class="form-control">
			</div>
			<div class="form-group">
				<label for="subject" name="subject">Subject:</label>
				<input type="text" id="subject" name="subject" class="form-control">
			</div>
			<div class="form-group">
				<label for="bodyMessage" name="bodyMessage">Message:</label>
				<textarea id="bodyMessage" name="bodyMessage" class="form-control"></textarea>
			</div>
			<input type="hidden" name="_token" value="{{ Session::token() }}">
			<input type="submit" class="btn btn-primary" value="Send Message">
		</form>
	</div>
</div>
@endsection