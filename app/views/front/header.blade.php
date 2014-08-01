<style type="text/css">
	.logo {
    margin-top: 1px;
		margin-left: 40px;
    height: 99px;
    width: 99px;
	}

  .navbar-default {
      background: #FFFFFF;
      height: 110px;
      left:50%;
      margin-left:-683px;
      width: 1366px;
      border-bottom: 1px #FFFFFF solid;
      box-shadow: none;
  }

  .navbar-default .main-navbar {
     bottom:-5;
     position:absolute;
     left:169px;
     letter-spacing: .01px
  }

  .navbar-default .main-navbar ul li a {
    font-family: calibri;
    font-size:18px;
    line-height: 5px;
    color: #4F4F4F;
  }
  /* Large desktop */
    @media (min-width: 1200px) {
  
    }

    /* Portrait tablet to landscape and desktop */
    @media (min-width: 768px) and (max-width: 979px) {
        .navbar-default {
            background: #FFFFFF;
            height: 110px;
            left:0;
            margin-left:0;
            width: 1166px;
            border-bottom: 1px #FFFFFF solid;
            box-shadow: none;
        }

        .navbar-default .main-navbar {
           bottom:-5;
           position:absolute;
           left:169px;
           letter-spacing: .01px
        }
    }

    /* Landscape phone to portrait tablet */
    @media (max-width: 767px) {
      .navbar-default {
            background: #FFFFFF;
            left:0;
            margin-left:0;
            width: 600px;
            position: relative;
        }

        .navbar-default .main-navbar {
            left: 0;
            position:relative;
            letter-spacing: .01px;
            background: #FFFFFF;
        }

      .container-fluid { width: auto; }
    }

    /* Landscape phones and down */
    @media (max-width: 480px) {
      .navbar-default {
          background: #FFFFFF;
          left:0;
          margin-left:0px;
          width: auto;
          position: relative
      }

      .navbar-default .main-navbar {
          left: 0;
          position:relative;
          letter-spacing: .01px;
          background: #FFFFFF;
      }


      .logo {
        float:center;
        height: auto;
        width: 100px;
      }
      .container-fluid { width: auto; }
    }

</style>
<div class="navbar navbar-default">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
        </button>
        <!-- START: logo -->
        <a href="{{URL::to('/')}}"> {{ HTML::image('images/logo.png', 'a logo',  array('class' => 'logo') )}} </a>
        <!-- END: logo -->
    </div>
    
    <div class="main-navbar navbar-collapse navbar-responsive-collapse collapse in">
        <ul class="nav navbar-nav">
          <li><a href="{{URL::to('/')}}">HOME</a></li>
        </ul>
        <ul class="nav navbar-nav">
          <li><a href="{{URL::to('/')}}">SEARCH</a></li>
        </ul>
        <!-- 
        <form class="navbar-form navbar-left" action="{{ URL::action('SearchController@index') }}">
          <input class="form-control col-lg-8" placeholder="Search" type="text" name="tag">
        </form>
        -->
        
    </div>
</div>

