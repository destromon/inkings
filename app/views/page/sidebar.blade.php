<style type="text/css">
	.sidebar-content .logo {
		margin-left: 35px;
	}
	.sidebar-content {
		background-color: #B1B1B1;
		padding: 10px;
		position:fixed;
		width: 215px;
	}
	/* Large desktop */
	@media (min-width: 1200px) {
		
	}

	/* Medium devices (desktops, 992px and up) */
	@media (min-width: @screen-md-min) {
		.sidebar-content {
			position:fixed;
			width: auto;
		}
	}

	/* Portrait tablet to landscape and desktop */
	@media (min-width: 768px) and (max-width: 979px) {
		.sidebar-content {
			position:relative;
		}

	}

	/* Landscape phone to portrait tablet */
	@media (max-width: 767px) {
		.sidebar-content {
			position:relative;
			width: auto;
		}
	}

	/* Landscape phones and down */
	@media (max-width: 480px) {
		.sidebar-content {
			position:relative;
		}
		.sidebar-content .logo {
			margin-left: 50px;
		}
	}
</style>

<div class="sidebar-content">
	<!-- START: logo -->
		<img src="images/logo.png" class="img-responsive logo"/>
	<!-- END: logo -->
	<hr/>
	<h4>
	MAIKO G. PASCUAL
	</h4>
	</p>
	<p>
	University of the Philippines Diliman
	B. Fine Arts, Visual Communication 2010
	Tarlac Local Designers Program 2011
	</p>
	<hr/>

	<address>
	  <strong>Address:</strong><br>
	  795 Folsom Ave, Suite 600
	  San Francisco, CA 94107
	  <abbr title="Phone">P:</abbr> (123) 456-7890
	</address>
	<hr/>

	<address>
	  <strong>Email:</strong><br>
	  <a href="mailto:#">first.last@email.com</a>
	</address>
	<hr/>

	<address>
	  <strong>Facebook:</strong><br>
	  <a href="mailto:#">first.last@facebook.com</a>
	</address>

	<hr/>
	Copyright &copy; 2014. All Rights Reserved.
	<hr/>
</div>