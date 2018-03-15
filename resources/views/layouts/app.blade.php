<!DOCTYPE html>
<html>
<head>
	<title>To do</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
	@include('inc.navbar')
	<main role="main" class="container">
		@if(Request::is('/'))
			@include('inc.showcase')
		@endif
		<div class="row">
			<div class="col-md-8 col-lg-8">
				@include('inc.messages')
				@yield('content')
			</div>
			<div class="col-md-4 col-lg-4">
				@include('inc.sidebar')
			</div>
		</div>
	</main>

    <footer class="footer mt-3">
      <div class="container">
        <span class="text-muted">Copyright 2018 &copy; BasicApp</span>
      </div>
    </footer>
</body>
</html>