<!DOCTYPE html>
<html>
<head>
	<title> Inkings Official Website </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	@include('global/css')
</head>
<body>
	@include('page/header')

	@yield('content')

	@include('page/footer')

	@include('global/js')
</body>
</html>