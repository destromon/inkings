@extends('master')
<style>
	div .container { width: 500px; }
	.boxes .image-content .image-loaded {
		border-radius: 10px;
		-moz-border-radius: 10px;
		-o-border-radius: 10px;
		-webkit-border-radius: 10px;
	}
	
	.boxes .image-content {
		margin-top: 5px;		
	}

	.boxes .image-content a img {
		margin: 10px;
		-webkit-box-shadow: 7px 7px 5px 0px rgba(50, 41, 46, 0.14);
		-moz-box-shadow:    7px 7px 5px 0px rgba(50, 41, 46, 0.14);
		box-shadow:         7px 7px 5px 0px rgba(50, 41, 46, 0.14);
	}

	.boxes .image-content h4 {
		margin-bottom: 20px;
		margin-left:5px;
		padding: 2px;
		text-shadow: 1px 1px 2px rgba(150, 150, 150, 1);
	}

	.boxes .image-content h4 strong {
		letter-spacing: 1px;
		margin-bottom: 20px;
		margin-left:5px;
		padding: 2px;
		text-shadow: 1px 1px 1px #B1B1B1;
	}

	.boxes .image-content h4 a {		
		font-size: 16px;
		letter-spacing: 1.5px;
		margin-bottom: 20px;
		padding: 2px;	
		text-shadow: 1px 1px 1px #222222;	
		padding-left: 5px;
	}

	.boxes .image-content h3 {
		letter-spacing: 1.2px;
		margin-left: 10px;
		margin-top: 2px;
		padding: 2px;
		text-shadow: 1px 1px 1px #222222;
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
	<div class="container boxes" id="boxes">
	@foreach($artworks as $artwork)
		<div class="image-content">
			<a class="fancybox" rel="group" title="{{$artwork->artwork_title}}" href="{{$artwork->artwork_image}}">
		    	<img src="{{$artwork->artwork_image}}" width="350"  height="350"
		    	class="img-responsive img-thumbnail img-rounded image-loaded"/> 
	    	</a>
	    	<h3> {{$artwork->artwork_title }} </h3>
	    	<h4>
	    		<strong> Tags: </strong>  	    		
	    		<?php $tags = explode(',' ,$artwork->artwork_tags) ?>
	    		@foreach($tags as $tag)
	    			<a href="{{ URL::to('tagged/' . $tag )}}" >#{{ $tag }}</a>
	    		@endforeach
	    	</h4>
    	</div>
    @endforeach
	</div>
	
	<div class="col-span-12">
	    <div class="paginate text-center" style="visibility:hidden;">
	        {{$artworks->links()}}
	    </div>
	</div>
@stop