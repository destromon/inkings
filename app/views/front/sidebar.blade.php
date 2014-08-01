<style type="text/css">
	
	.sidebar-wrapper {
		background: url('/images/side.jpg') repeat fixed top #BFBFBF;
		position:fixed;
		width: 180px;
		margin-left: -15px;
		margin-top: 108px;
		max-height: 659px;
		min-height: 659px;
	}

	.sidebar-wrapper .sidebar-content {
		bottom:50;
		position: absolute;
		margin-left: 10%;
	}

	.sidebar-wrapper .sidebar-content p {
		font-family: calibri;
		font-size: 18px;
		padding: 0;
		margin: 0;
	}

	/* Large desktop */
	@media (min-width: 1200px) {
		
	}

	/* Medium devices (desktops, 992px and up) */
	@media (min-width: @screen-md-min) {

	}

	/* Portrait tablet to landscape and desktop */
	@media (min-width: 768px) and (max-width: 979px) {
		
	}

	/* Landscape phone to portrait tablet */
	@media (max-width: 767px) {
		.sidebar-wrapper {
			background: url('/images/side.jpg') repeat fixed top #BFBFBF;
			position:relative;
			width: auto;
			margin-left: 0;
			margin-top: 69px;
			max-height: 500px;
			min-height: 500px;
		}

		.sidebar-wrapper .sidebar-content {
			width: auto;
			position: absolute;
			margin-left: 15%;
		}
	}

	/* Landscape phones and down */
	@media (max-width: 480px) {

		.sidebar-content .logo {
			margin-left: 15px;
		}
	}
</style>

<div class="sidebar-wrapper">
	<div class="sidebar-content">
		<p class="pull-right"> CONTACT US</p> <br/>
		<p class="pull-right"> Inkings etc etc</p> <br/>
		<p class="pull-right"> Email here</p> <br/>
		<p class="pull-right"> Website here</p> <br/>
		<p class="pull-right"> Office address here</p> <br/> <br/> <br/>
		<p class="pull-right"> Copyright Inkings</p> <br/>
		
	</div>
</div>