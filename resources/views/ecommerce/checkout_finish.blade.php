@extends('layouts.ecommerce')

@section('title')
    <title>Keranjang Belanja</title>
@endsection

@section('content')
<div class="container">
<div class="row justify-content-center mt-5row">
<h3 class="title_confirmation" style="margin:100px 0px 50px 0px;">Terima kasih, pesanan anda telah kami terima , dan akan dikirimkan oleh tim kami segera</h3>
		<div class="col">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title">Informasi Pesanan</h5>
			</div>
			<div class="table-responsive" style="margin: 40px 0px 0px 0px;">
			<table class="table">
			<tbody>
				<tr>
				<td>
					<h8><a href="#" style="color:grey;"><span>Invoice</span> : {{ $order->invoice }}</a></h8>
				</td>
				</tr>
				<tr>
				<td>
					<h8><a href="#" style="color:grey;"><span>Tanggal</span> : {{ $order->created_at }}</a></h8>
				</td>
				</tr>
				<tr>
				<td>
					<h8><a href="#" style="color:grey;"><span>Total</span> : Rp {{ number_format($order->subtotal) }}</a></h8>
				</td>
				</tr>
			</tbody>
			</table>
			</div>
			</div>
		</div>
		<div class="col">
		<div class="card">
		<div class="card-body">
			<h5 class="card-title">Informasi Alamat</h5>
		</div>
		<div class="table-responsive" style="margin: 40px 0px 0px 0px;">
		<table class="table">
		<tbody>
			<tr>
			<td>
				<h8><a href="#" style="color:grey;"><span>Alamat</span> : {{ $order->customer_address }}</a></h8>
			</td>
			</tr>
			<tr>
			<td>
				<h8><a href="#" style="color:grey;"><span>Kota</span> : {{ $order->district->city->name }}</a></h8>
			</td>
			</tr>
			<tr>
			<td>
				<h8><a href="#" style="color:grey;"><span>Country</span> : Indonesia</a></h8>
			</td>
			</tr>
		</tbody>
		</table>
		</div>
		</div>
		</div>
	</div>
</div>
@endsection