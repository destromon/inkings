@extends('master')
<style>
	div .container {
		width: 500px;
	}
	/* Large desktop */
	@media (min-width: 1200px) {
	}

	/* Portrait tablet to landscape and desktop */
	@media (min-width: 768px) and (max-width: 979px) {
		div .container {
			width: 800px;
		}
	}

	/* Landscape phone to portrait tablet */
	@media (max-width: 767px) {
		div .container {
			width: 400px;
		}
	}

	/* Landscape phones and down */
	@media (max-width: 480px) {
		div.container {
			width: auto;
		}
		div.container h3 { font-size: 20px;}
		div.container h4 { font-size: 18px;}
		div.container strong { font-size: 18px;}
	}
</style>
@section('content')
	<div class="container">
	@foreach($artworks as $artwork)
    	<img src="uploads/{{$artwork->artwork_image}}" width="400"  height="400"
    	class="img-responsive img-thumbnail"/>
    	<h3> {{$artwork->artwork_title }} </h3>
    	<h4> <strong> Tags: </strong> {{$artwork->artwork_tags }} </h4>
    @endforeach
	</div>
@stop
