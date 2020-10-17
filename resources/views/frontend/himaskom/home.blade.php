@extends('frontend.layouts.layout')

{{-- page title --}}
@section('title','Himpunan Mahasiswa Teknik Komputer')

{{-- vendor styles --}}
@section('vendor-style')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/animate-css/animate.css')}}">
@endsection

{{-- page styles --}}
@section('page-style')
<style type="text/css">
	
	#main-wrapper {
		position: relative;
	}
	.carousel {
		height: 700px !important;
		position: relative;
		top: -64px !important;
	}
	.carousel-item {
		height: 700px !important;	
	}
	.carousel-item img {
		/* Add the blur effect */
		-webkit-filter: blur(1px);
		-moz-filter: blur(1px);
		-o-filter: blur(1px);
		-ms-filter: blur(1px);
		filter: blur(1px);
		position: fixed;
	  	width: 100%;
	  	height: 100%;
	  	top: 0;
	  	left: 0;
	  	z-index: -1;
	}
	.carousel-item h2 {
		font-size: 3.56rem !important;
		margin-top: 16rem;
		color: #fff;
	} 
	section:after {
		display: block;
		height: 8px;
	}
	/*Carousel*/
	.middle-indicator{
		position:absolute;
		top:50%;
	}
	.middle-indicator-text{
		font-size: 3.3rem;
	}
	.content-indicator{
		margin-left: 16px;
		margin-right: 16px;
		width: 48px;
		height: 48px;
		background: none;
		-moz-border-radius: 50px;
		-webkit-border-radius: 50px;
		border-radius: 50px; 
	}
	figure.effect-sadie h2 {
		color: rgb(255, 167, 38);
	}

	.overlay {
		position: fixed;
		background: rgba(66,66,66,0.7);
	    overflow: hidden;
	    width: 100%;
	    height: 100%;
	    z-index: 2;
	}

	.carousel-item h2,h3,h4,h5 {
		position: relative;
		z-index: 3;
	}
</style>
@endsection

{{-- page content --}}
@section('content')
<section class="first" style="height: 620px;">
	<div class="carousel carousel-slider center">
		<!-- <div class="carousel-fixed-item center middle-indicator">
		    <div class="left">
		      <a href="#" class="movePrevCarousel middle-indicator-text waves-effect waves-light content-indicator"><i class="material-icons left middle-indicator-text white-text">chevron_left</i></a>
		     </div>
		     
		    <div class="right">
		    <a href="#" class="moveNextCarousel middle-indicator-text waves-effect waves-light content-indicator"><i class="material-icons right middle-indicator-text white-text">chevron_right</i></a>
		    </div>
	    </div> -->
	  	<div class="carousel-item white-text" href="#one!">
	  		<img src="{{asset('images/himaskom/tampak_muka.png')}}">
	  		<div class="overlay"></div>
		    <h2 class="himaskomfont animated zoomIn " style="opacity: 1">HIMASKOM</h2>
		    <h3 class="himaskomfont animated zoomIn white-text ">Universitas Diponegoro</h3>
		    <h3 class="himaskomfont animated zoomIn orange-text text-lighten-2">2020</h3>
		    <h5 class="himaskomfont animated zoomIn white-text">"Satukan Tekad Bawa Perubahan"</h5>
		    <!-- <h5 class="white-text">this is my story. tell me yours.</h5> -->
		</div>
		<div class="carousel-item amber white-text" href="#two!">
		    <img src="{{asset('images/himaskom/bghimaskom.png')}}">
		    <div class="overlay"></div>
		</div>
		<div class="carousel-item green white-text" href="#three!">
		    <img src="{{asset('images/himaskom/bghimaskom.png')}}">
		    <div class="overlay"></div>
		</div>
	</div>
</section>
<section class="second white">
	
</section>
<section class="third">
	<div class="container" style="background: #252625;">
		<div class="row ">
			<div class="col s12 m6 l4">
		      <div class="card transparent z-depth-0 pt-5 pb-8 pr-2 pl-2 white-text">
		        <h5 class="white-text">ABOUT</h5>
				
		      </div>
		    </div>
		    
		</div>
	</div>
</section>
@endsection

{{-- vendor scripts --}}
@section('vendor-script')
@endsection

{{-- page scripts --}}
@section('page-script')
<script type="text/javascript">
	$(document).ready(function(){
		$('.parallax').parallax();
		$('.carousel.carousel-slider').carousel({fullWidth: true});

		// move next carousel
	   	$('.moveNextCarousel').click(function(e){
	      e.preventDefault();
	      e.stopPropagation();
	      $('.carousel').carousel('next');
	   	});

	   	// move prev carousel
	   	$('.movePrevCarousel').click(function(e){
	      e.preventDefault();
	      e.stopPropagation();
	      $('.carousel').carousel('prev');
	   	});

	   	var doc = $(document);
		var navbar = $('.navbar');
		var navbarWrap = $('.navbar .navbar-main');

		doc.on('scroll', function(){
			if (doc.scrollTop() > 80) {
				navbarWrap.removeClass('navcustom');
			} else {
				navbarWrap.addClass('navcustom');
			}
		});

	});
</script>
@endsection