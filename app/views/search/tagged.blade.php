@extends('master')
<style>
	div .container {
		width: 500px;
	}
	.boxes .image-content .image-loaded {
		border-radius: 10px;
		-moz-border-radius: 10px;
		-o-border-radius: 10px;
		-webkit-border-radius: 10px;
	}
	
	.boxes .image-content {
		margin-top: 5px;
	}

	.boxes .image-content h4 {
		margin-bottom: 20px;
		padding: 2px;
	}
	.boxes .image-content h3 {
		margin-top: 2px;
		padding: 2px;
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
    	<img src="{{$artwork->artwork_image}}" width="350"  height="350"
    	class="img-responsive img-thumbnail img-rounded image-loaded"/>
    	<h3> {{$artwork->artwork_title }} </h3>
    	<h4>
    		<strong> Tags: </strong>  
    		<?php $tags = explode(',' ,$artwork->artwork_tags) ?>
    		@foreach($tags as $tag)
    			<a href="{{ URL::to('tagged/' . $tag )}}" > #{{ $tag }} </a>
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