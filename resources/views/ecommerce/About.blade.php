@extends('layouts.ecommerce')

@section('title')
    <title>About us</title>
@endsection

@section('content')
<div class="container" style="margin-top:50px;">
<h4><center><i>"About Us"</i></center></h4>
<h6 style="color:grey;"><center><i>"Bawalah obat ke pasien jangan bawa pasien ke obatnya"</i></center></h6>
<div class="row mt-5">
	<div class="col-md-6">
  		<div class="jumbotron">
  			<p>
  				<center>E-Health merupakan aplikasi kesehatan berbasis web yang berfungsi untuk mempermudah saat pasien yang sedang sakit untuk berobat
  				
  				</center>
  			</p>
  		</div>		
  	</div>
  	<div class="col-md-6">
  		<img src="{{asset('UserInterface/assets/img/about1.jpg')}}" style="background-size: cover; height:300px; width: 100%;">
  	</div>
  	<div class="col-md-6">
  		<img src="{{asset('UserInterface/assets/img/about2.jpg')}}" style="background-size: cover; height:300px; width: 100%;">
  	</div>
  	<div class="col-md-6">
  		<div class="jumbotron">
  			<p>
  				<center>kami berkompeten dalam mengobati pasien secara online dan menerima konsultasi kesehatan secara online dan dengan biaya secara gratis
  				
  				</center>
  			</p>
  		</div>	
  	</div>
  	<div class="col-md-6">
  		<div class="jumbotron">
  			<p>
  				<center>kami juga menyediakan berbagai macam obat dan pelayanan kesehatan secara online dengan cara membawa staff kesehatan kami ke tempat anda
  				
  				</center>
  			</p>
  		</div>		
  	</div>
  	<div class="col-md-6">
  		<img src="{{asset('UserInterface/assets/img/about3.jpg')}}" style="background-size: cover; height:300px; width: 100%;">
  	</div>
</div>
</div>
@endsection