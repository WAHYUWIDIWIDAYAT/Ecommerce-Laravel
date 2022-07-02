<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>E-Health</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
@yield('title')
<link rel="stylesheet" href="{{ asset('UserInterface/bootstrap/css/bootstrap.min.css') }}"/>
<link rel="stylesheet" href="{{ asset('UserInterface/style/style.css') }}">
<link rel="stylesheet" href="{{ asset('ecommerce/vendors/linericon/style.css') }}">
<link rel="stylesheet" href="{{ asset('ecommerce/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('ecommerce/vendors/owl-carousel/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('ecommerce/vendors/lightbox/simpleLightbox.css') }}">
<link rel="stylesheet" href="{{ asset('ecommerce/vendors/nice-select/css/nice-select.css') }}">
<link rel="stylesheet" href="{{ asset('ecommerce/vendors/animate-css/animate.css') }}">
<link rel="stylesheet" href="{{ asset('ecommerce/vendors/jquery-ui/jquery-ui.css') }}">
@yield('css')
</head>
<body>
<div id="container-fluid">
<div class="container-fluid">
		<nav class="navbar navbar-expand-lg navbar-light bg-dark">
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				 <ul class="navbar-nav ml-auto">
					@if (auth()->guard('customer')->check())
					<li class="nav-item">
						<a class="nav-link" href="{{ route('customer.logout') }}" style="color:white;">Logout</a>
					</li>
					@endif
					<li class="nav-item">
						<a class="nav-link" href="{{ route('customer.dashboard') }}" style="color:white;">
						<i class="fa fa-user fa-2x" style="color:grey;"></i></a>
					</li>		
				</ul>
			 </div>
		</nav>
		@include('layouts.ecommerce.module.menu')
		</div>
		</div>
	<div class="container" style="margin-top: 30px;">
		<div class="row">
  			<div class="col"><a href="{{ route('front.index') }}" style="text-decoration: none; color: black">Home</a></div>
  			<div class="col"><a href="{{ route('front.product') }}" style="text-decoration: none; color: black">Product</a></div>
  			<div class="col"><a href="{{route('artikel')}}" style="text-decoration: none; color: black">Blog</a></div>
  			<div class="col"><a href="{{ route('contact') }}" style="text-decoration: none; color: black">Chat</a></div>  
  			<div class="col"><a href="{{route('about')}}" style="text-decoration: none; color: black">About Us</a></div>
  			<div class="col"><a href="{{route('kontak')}}" style="text-decoration: none; color: black">Contact</a></div>	
		</div>
	</div>
	<hr class="margin:30px 0px 30px 0px;">
	@yield('content')

	@yield('banner')
	<footer class="text-muted" style="clear: both;">
    <hr>
    <div class="container">
        <p class="float-right">
            <a href="#container">Back to top</a>
        </p>
        <p>Copyright 2020 @ wahyuwidi</p>
    </div>
</footer>
</div>
<script src="{{ asset('UserInterface/bootstrap/js/jquery.js')}}"></script> 
<script src="{{ asset('UserInterface/bootstrap/js/popper.js')}}"></script> 
<script src="{{ asset('UserInterface/bootstrap/js/jquery.slim.min.js')}}"></script>
<script src="{{ asset('UserInterface/bootstrap/js/jquery.min.js')}}"></script>
<script src="{{ asset('UserInterface/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('UserInterface/bootstrap/js/bootstrap.js')}}"></script>

	<script src="{{ asset('ecommerce/js/stellar.js') }}"></script>
	<script src="{{ asset('ecommerce/vendors/lightbox/simpleLightbox.min.js') }}"></script>
	<script src="{{ asset('ecommerce/vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
	<script src="{{ asset('ecommerce/vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
	<script src="{{ asset('ecommerce/vendors/isotope/isotope-min.js') }}"></script>
	<script src="{{ asset('ecommerce/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('ecommerce/js/jquery.ajaxchimp.min.js') }}"></script>
	<script src="{{ asset('ecommerce/vendors/counter-up/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset('ecommerce/vendors/flipclock/timer.js') }}"></script>
	<script src="{{ asset('ecommerce/vendors/counter-up/jquery.counterup.js') }}"></script>
	<script src="{{ asset('ecommerce/js/mail-script.js') }}"></script>
	<script src="{{ asset('ecommerce/js/theme.js') }}"></script>

@yield('js')
</body>
</html>
