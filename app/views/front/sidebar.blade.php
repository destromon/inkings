<style type="text/css">
	.sidebar-content .logo {
		margin-left: 5px;
		width: 180px;
		height: 180px;
	}
	.sidebar-content {
		background: url('/images/side.jpg') repeat fixed top;
		height: 100%;
		padding: 10px;
		position:fixed;
		width: 215px;
	}

	.sidebar-content h4 {
		text-shadow: 1px 1px 2px #525252;
	}

	/* Large desktop */
	@media (min-width: 1200px) {
		
	}

	/* Medium devices (desktops, 992px and up) */
	@media (min-width: @screen-md-min) {
		.sidebar-content {
			position:fixed;
			width: auto;
			height: 100%;
		}
	}

	/* Portrait tablet to landscape and desktop */
	@media (min-width: 768px) and (max-width: 979px) {


	}

	/* Landscape phone to portrait tablet */
	@media (max-width: 767px) {
		.sidebar-content {
			position:relative;
			width: auto;
			height: 100%;
		}

		.sidebar-content .logo {
			margin-left: 35%;
			width: 180px;
			height: 180px;
		}
	}

	/* Landscape phones and down */
	@media (max-width: 480px) {
		.sidebar-content {
			position:relative;
			height: 100%;
		}
		.sidebar-content .logo {
			margin-left: 15px;
		}
	}
</style>

<div class="sidebar-content">
	<!-- START: logo -->
		<a href="{{URL::to('/')}}"> {{ HTML::image('images/logo.png', 'a logo',  array('class' => 'logo') )}} </a>
	<!-- END: logo -->
	<hr/>
	<h4>
	MAIKO G. PASCUAL
	</h4>
	</p>
	<p>
	University of the Philippines Diliman 
	B. Fine Arts, Visual Communication 2010 <br/>
	Tarlac Local Designers Program 2011 <br/>
	</p>

	<address>
	  <strong>Address:</strong><br>
	  795 Folsom Ave, Suite 600
	  San Francisco, CA 94107
	  <abbr title="Phone">P:</abbr> (123) 456-7890
	</address>

	<address>
	  <strong>Email:</strong><br>
	  <a href="mailto:#">first.last@email.com</a>
	</address>

	<address>
	  <strong>Facebook:</strong><br>
	  <a href="mailto:#">first.last@facebook.com</a>
	</address>

	
	<p> Copyright &copy; 2014. All Rights Reserved. </p>
</div>