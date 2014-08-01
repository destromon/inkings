<style type="text/css">
	
	.sidebar-wrapper {
		background: url('/images/side.jpg') repeat fixed top #BFBFBF;
		height: 100%;
		margin-left: -15px;
		margin-top: 108px;
		position:fixed;
		width: 180px;
	}

	.sidebar-wrapper .sidebar-content {
		height: 100%;
		margin-left: 15%;
		float: center;
		text-align: right;
	}

	.sidebar-wrapper .sidebar-content .sidebar-data {
		bottom: 150;
		font-family: calibri;
		font-size: 16px;
		margin-bottom: 20px;
		margin: 0;
		padding-bottom: 20px;
		padding: 0;
		position: absolute;
		width: auto;
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
			padding: 20px;
			margin-left: 0;
			margin-top: 0;
			width: auto;
			height: 70%;
		}

		.sidebar-wrapper .sidebar-content {
			height: 70%;
			margin-left: 15%;
			float: center;
			text-align: right;
		}

		.sidebar-wrapper .sidebar-content .sidebar-data {
			bottom: 150;
			font-family: calibri;
			font-size: 16px;
			margin-bottom: 20px;
			margin: 0;
			padding-bottom: 20px;
			padding: 0;
			position: absolute;
			width: auto;
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
		<div class="sidebar-data">
			 CONTACT US <br/>
			 Inkings etc etc <br/>
			 Email here <br/>
			 Website here <br/>
			 Office address here <br/><br/>
			 Copyright Inkings <br/>
		</div>		
	</div>
</div>