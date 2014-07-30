<style type="text/css">
	.logo {
		float:center;
	}
	.navbar-form {
		margin-top:15px;
	}	
</style>
<div class="navbar navbar-default">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
    </button>
    <a class="navbar-brand" href="{{ URL::to('admin') }}">Dashboard</a>
  </div>
  <div style="" class="navbar-collapse navbar-responsive-collapse collapse in">
    <ul class="nav navbar-nav">
      <li class="dropdown">
        <a href="user" class="dropdown-toggle" data-toggle="dropdown">Users <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="{{ URL::to('user') }}">List of Users</a></li>
          <li><a href="{{ URL::to('user/create') }}">Create New User</a></li>
        </ul>
      </li>

      <li class="dropdown">
        <a href="artwork " class="dropdown-toggle" data-toggle="dropdown">Artworks <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="{{ URL::to('artwork') }}">List of Artworks</a></li>
          <li><a href="{{ URL::to('artwork/create') }}">Upload New Artwork</a></li>
        </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="{{ URL::to('/') }}"> Back to Site </a></li>
      <li class="dropdown">
        <a href="artwork " class="dropdown-toggle" data-toggle="dropdown">Hi  {{ Auth::user()->user_email }} ! <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="{{ URL::to('user/' . Auth::user()->id . '/edit') }}"> Edit Profile </a> </li>          
          <li><a href="{{ URL::to('logout') }}">Logout</a></li>
        </ul>
      </li>
    </ul>
  </div>
</div>