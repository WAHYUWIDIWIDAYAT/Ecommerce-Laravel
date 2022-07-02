<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container">
<a class="navbar-brand" href="#" style="color:grey;">E-Health</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item active" style="margin-right:15px;">
        <a href="{{ route('front.index') }}" class="icons">
        <i class="fa fa-home fa-2x" style="color:grey;"></i></a>
        </li>
        <li class="nav-item" style="margin-right:15px;" class="icons">
        <a href="{{ route('front.product') }}">
		<i class="fa fa-cubes fa-2x" style="color:grey;"></i></a>
        </li>
        <li class="nav-item" class="margin-right:15px;">
		<a href="{{ route('front.list_cart') }}" class="icons">
		<i class="fa fa-shopping-cart fa-2x" style="color:grey;"></i></a>
        </li>
    </div>
    </div>
</nav>
<header>
  	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    	<ol class="carousel-indicators">
      		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    	</ol>
    	<div class="carousel-inner" role="listbox">
			<div class="carousel-item active" style="background-image:url('{{asset('UserInterface/assets/img/banner-03.png')}}')">
			  <div class="carousel-caption d-none d-md-block">
				<h2 class="display-4"><strong>E-Health</strong></h2>
				<p class="lead"><strong>Market Health For Everyone</strong></p>
			  </div>
			</div>
			<div class="carousel-item" style="background-image: url('{{asset('UserInterface/assets/img/banner-02.jpg')}}">
			<div class="carousel-caption d-none d-md-block" style="color:grey;">
				<h2 class="display-4"><strong>Your Health</strong></h2>
				<p class="lead"><strong>Is Our Responsbility</strong></p>
			  </div>
			</div>
			<div class="carousel-item" style="background-image: url('{{asset('UserInterface/assets/img/img.jpg')}}">
			</div>
		</div>
    	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          	<span class="carousel-control-next-icon" aria-hidden="true"></span>
          	<span class="sr-only">Next</span>
        	</a>
  	</div>
</header>