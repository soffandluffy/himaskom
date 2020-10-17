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

	.third .container .row .visi-misi h4{
		color: white;
		font-style: normal;
		font-weight: bold;
	}

	#quote{
		font-size: 30px;
		font-weight: bold;
		color: white;
		background-image: url("{{asset('images/himaskom/fotobareng.png')}}");
		background-repeat: no-repeat;
		background-attachment: fixed;
		filter: grayscale(10%);
		padding: 50px;
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
	<div class="container" style="margin: 30px 0px;">
		<div class="row">
			<div class="col s12 m12 l12">
				<h4><b>Artikel</b></h4>
			</div>

			<div class="col s4 m4 l4">
				<div class="card">
					<div class="card-image">
					  <img src="{{asset('images/himaskom/dami.jpg')}}" style="filter :blur(2px)">
					  <span class="card-title white-text"><b>Judul artikel</b></span>
					</div>
					<div class="card-content">
					  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
						  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div class="card-action">
					  <a href="#">Lanjutkan membaca</a>
					</div>
				  </div>
			</div>

			<div class="col s4 m4 l4">
				<div class="card">
					<div class="card-image">
					  <img src="{{asset('images/himaskom/dami.jpg')}}" style="filter :blur(2px)">
					  <span class="card-title white-text"><b>Judul artikel</b></span>
					</div>
					<div class="card-content">
					  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
						  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div class="card-action">
					  <a href="#">Lanjutkan membaca</a>
					</div>
				  </div>
			</div>

			<div class="col s4 m4 l4">
				<div class="card">
					<div class="card-image">
					  <img src="{{asset('images/himaskom/dami.jpg')}}" style="filter :blur(2px)">
					  <span class="card-title white-text"><b>Judul artikel</b></span>
					</div>
					<div class="card-content">
					  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
						  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div class="card-action">
					  <a href="#">Lanjutkan membaca</a>
					</div>
				  </div>
			</div>

			

			

		</div>
	</div>
	
</section>

<section class="third">
	<div class="container" style="background:#053b4c;">
		<div class="row">
			<div class="col s12 m12 l12 white-text">
				<h4 style="color: white; font-style: normal; font-weight: bold;"><b>Tentang Kami</b></h4>
				<P>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
					Senectus et netus et malesuada fames ac. Donec ac odio tempor orci dapibus ultrices in. 
					Maecenas volutpat blandit aliquam etiam erat. Amet mattis vulputate enim nulla aliquet.</P>
			</div>
			<div class="col s4 m4 l4 visi-misi white-text">
				<h4><b>Visi</b></h4>
				<ul>
					<li>among us aja</li>
					<li>among us aja</li>
					<li>among us aja</li>
					<li>among us aja</li>
					<li>semakin aktif bun</li>
				</ul>
			</div>

			<div class="col s4 m4 l4 visi-misi white-text">
				<h4><b>Misi</b></h4>
				<ul>
					<li>among us aja</li>
					<li>among us aja</li>
					<li>among us aja</li>
					<li>among us aja</li>
					<li>semakin aktif bun</li>
				</ul>
			</div>

			<div class="col s3 m3 l3 ">
				<img src="{{asset('images/himaskom/logohimaskom.png')}}" width="70%" height="70%">
			</div>

		</div>
	</div>
</section>

<section class="fourth">
	<div class="container" >
		<div class="row" width="50%" height="100%">
			<div class="col s12 m12 l12 center" id="quote">
				<p><b>"We Are Family"</b></p>
			</div>
			
		</div>
	</div>

</section>


<section class="fifth">
	<div class="container" style="background: #053b4c;">
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