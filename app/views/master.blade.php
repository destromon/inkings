<!DOCTYPE html>
<html>
<head>
	<title> Inkings Official Website </title>
	@include('global/css')
</head>
<body>
	@include('page/header')

	@yield('content')

	@include('page/footer')

	@include('global/js')
</body>
</html>