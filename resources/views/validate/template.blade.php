<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" href="/css/app.css">
</head>
<body>

	<div class="panel panel-default">
		<div class="container">
			<h2>@yield('title')</h2>
		</div>
	</div>
	<div class="container">
		@section('content')
		@show
	</div>

	<div class="panel panel-footer text-center">
		Designed by: Warodom Werapun
	</div>
</body>
</html>