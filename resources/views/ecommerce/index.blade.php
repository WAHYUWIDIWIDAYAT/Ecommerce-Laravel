@extends('layouts.ecommerce')

@section('title')
    <title>E-Health</title>
@endsection

@section('content')
    <div class="container">
		<div class="row justify-content-center mt-5row">
			@forelse($products as $row)
			<div class="card" style="width: 200px; margin: 40px;">
				<img src="{{ asset('storage/products/' . $row->image) }}" alt="{{ $row->name }}" class="card-img-top" alt="product1">
				<div class="card-body">
					<h5 class="card-title">{{ $row->name }}</h5>
					<p class="card-text">Rp {{ number_format($row->price) }},-</p>
					<a href="{{ url('/product/' . $row->slug) }}" class="btn btn-warning">Detail</a>
					<a href="{{ url('/product/' . $row->slug) }}" class="btn btn-primary">Beli</a>
				</div>
			</div>
			@empty       
			@endforelse
		</div>
		</div>
@endsection
@section('banner')
<div class="container" style="margin-top:50px;">
<center><h4><font color="#5cb85c">E-HEALTH</font> <strong><font color="red">POST NEWS</font></strong></h4></center><br>
<center><i>"Kami berharap anda mengikuti protokol kesehatan untuk menjaga diri anda maupun orang lain <br>dan untuk menghormati kami yaitu dokter yang telah merawat pasien COVID lainnya"</i></center>
<div class="row justify-content-center mt-5row" style="margin-top:50px;"><br>
	<div class="col-md-6">
		<center><div class="banner" style="background-image:url(../UserInterface/assets/img/poster1.jpg); width:auto; height:500px; background-size: cover;"></div></center>
	</div>
	<div class="col-md-6">
		<center><div class="banner" style="background-image:url(../UserInterface/assets/img/poster2.jpg); width:auto; height:500px; background-size: cover;"></div>
		</center>
	</div>
	</div>
</div>
@endsection