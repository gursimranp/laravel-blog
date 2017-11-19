<!doctype html>
<html lang="en">
@include('partials._head')

<body>

@include('partials._nav')

<main role="main" class="container-fluid">
	<div class="starter-template">
		@include('partials._messages')
		@yield('content')
	</div>
</main><!-- /.container -->

@include('partials._footer')

</body>
</html>
