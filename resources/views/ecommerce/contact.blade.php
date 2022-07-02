@extends('layouts.ecommerce')

@section('title')
    <title>Contact</title>
@endsection

@section('content')
<div class="container" style="margin-top:50px;">
<div class="row mt-5">
	<div class="col-md-6">
  		<div class="jumbotron">
  			<p>
  				<center>Untuk informasi lengkapnya bisa contact ke beberapa aplikasi dibawah maupun bisa datang secara langsung di tempat untk info yang paling jelas	
  				</center>
  			</p>
  		</div>		
  	</div>
  	<div class="col-md-6">
  		<img src="{{asset('UserInterface/assets/img/contact.jpg')}}" style="background-size: cover; height:400px; width: 100%;">
  	</div>
</div>
<div class="row justify-content-center mt-5">
	<div class="col"><center>
	<i class="fa fa-phone-square" style="color:grey;"></i> +628-956-364-616-52
	</center></div>
	<div class="col">
		<center><i class="fa fa-envelope" style="color:grey;"></i> widiw598@Gmail.com</center>
	</div>
	<div class="col">
	<center><i class="fa fa-paper-plane" style="color:grey;"></i> @widiw598</center>
	</div>
	<div class="col">
	<center><i class="fa fa-facebook-square" style="color:grey;"></i> Wahyu Widi</center>
	</div>
	<div class="col">
	<center><i class="fa fa-map-marker" style="color:grey;"></i> Ds.Putat Purwodadi Jateng</center>
	</div>
</div>
</div>
@endsection