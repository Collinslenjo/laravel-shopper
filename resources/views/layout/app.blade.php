<!DOCTYPE html>
<html>
<head>
	<title>Shopper</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>

<div class="wrapper">
	<div class="container-fluid">
		@yield('content')
	</div>
</div>

<script type="{{ asset('js/app.js') }}"></script>
</body>
</html>