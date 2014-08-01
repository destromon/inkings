<!DOCTYPE html>
<html>
<head>
	<title> Inkings Official Website </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	@include('global/css')
	<style>
		body {
			background: #212121;
			overflow-y: scroll;
			overflow-x: hidden;
		}

		.container { width: 1366px; }

		.content { 
			margin-top: 108px;
			width: 1180px;
			margin-left: 180px;
		}

		/* Large desktop */
		@media (min-width: 1200px) {
	
		}

		/* Portrait tablet to landscape and desktop */
		@media (min-width: 768px) and (max-width: 979px) {
			
		}

		/* Landscape phone to portrait tablet */
		@media (max-width: 767px) {
			.content { 
				margin-top: 0;
				width: auto;
				margin-left: 0px;
			}

			.container-fluid { width: auto; }
		}

		/* Landscape phones and down */
		@media (max-width: 480px) {
			.container-fluid { width: auto; }
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row wrapper">
			<!-- START: header -->
			<div class="header col-md-12 col-sm-12" style="float:center !important;
			">
			@include('front/header')
			</div>
			<!-- END: header -->

			<!-- START: Sidebar -->
			<div class="sidebar col-md-2 col-sm-2">
			 	@include('front/sidebar')
			</div>
			<!-- End: Sidebar -->

			<!-- START: Content -->
			<div class="content col-md-10 col-sm-10">
			@yield('content')
			</div>
			<!-- End: Content -->
		</div>
	</div>
	@include('global/js')
	<script type="text/javascript">
		$(document).ready(function() {
			$('a').bind("contextmenu",function() {
		       return false;
		    }); 

		    $('a').on('dragstart', function(event) {
		    	event.preventDefault(); 
		    });

		    $('img').bind("contextmenu",function() {
		       return false;
		    }); 

		    $('img').on('dragstart', function(event) {
		    	event.preventDefault(); 
		    });

		    $(".fancybox").fancybox();
		    
		}); 
		
		$(document).scroll(function(event) {
			$('a').bind("contextmenu",function() {
		       return false;
		    }); 

		    $('a').on('dragstart', function(event) {
		    	event.preventDefault(); 
		    });


			$('img').bind("contextmenu",function() {
		       return false;
		    }); 

		    $('img').on('dragstart', function(event) {
		    	event.preventDefault(); 
		    });
		});

		$('#boxes').infinitescroll({
		    navSelector     : ".paginate",
		    nextSelector    : ".paginate a:last",
		    itemSelector    : ".image-content",
		    debug           : false,
		    dataType        : 'html',
		    path: function(index) {
		    	console.log(index);
		        return "?page=" + index;
		    }
		}, function(newElements, data, url){

		    var $newElems = $( newElements );
		    $('#boxes').masonry( 'appended', $newElems, true);
		});
	</script>
</body>
</html>