<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Player Management App</title>
	<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
	<link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div class="container">
		@yield('main')
	</div>
	<script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
</body>
</html>