<!DOCTYPE html>
<html>
<head>
	<title> Inkings Official Website </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	@include('global/css')
	<style>
		body {
			background-color: #222222;
			margin-top:30px;
		}
		.container-fluid {
			width: 1366px;
		}
		.content {
			background-color: #DEDEDE;
		}
		.header {
			padding: 10px;
		}
		.sidebar {
			background-color: #B1B1B1;
			padding: 10px;
		}
		.logo {
			margin-left: 20px;
		}
	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<!-- START: header -->
			<div class="header">
			@include('page/header')
			</div>
			<!-- END: header -->
			<!-- START: Sidebar -->
			<div class="col-md-2 sidebar">
				<div class="logo">
				@include('page/logo')
				</div>
			@include('page/sidebar')
			@include('page/footer')
			</div>
			<!-- End: Sidebar -->
			<!-- START: Content -->
			<div class="col-md-10 content">
			@yield('content')
			</div>
			<!-- End: Content -->
		</div>
	</div>
	@include('global/js')
</body>
</html>