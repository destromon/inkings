@include('login/session');
<!DOCTYPE html>
<html>
<head>
	<title> Inkings Admin Panel </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	@include('global/css')
	<style>
		body {
			margin-top: 55px;
			padding:10px;
		}
	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="row wrapper">
			<!-- START: header -->
			<div class="header">
			@include('back/header')
			</div>
			<!-- END: header -->			
		</div>
	</div>
	@include('global/js')
</body>
</html>