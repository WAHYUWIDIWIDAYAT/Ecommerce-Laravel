@extends('layouts.ecommerce')

@section('title')
    <title>{{ $product->name }}</title>
@endsection

@section('content')
		<div id="product">
  	<div class="container">
  		<div class="row">
  			<div class="col">
  			<br><br>
  				<div class="card" style="width: 350px; margin: auto;">
    				<img src="{{ asset('storage/products/' . $product->image) }}" alt="{{ $product->name }}" class="card-img-top" alt="product1">
    				<div class="card-body">
        				<h5 class="card-title">{{ $product->name }}</h5>
        				<p class="card-text">Rp {{ number_format($product->price) }},-</p>
    				</div>
    				<div class="table-responsive" style="margin: 40px 0px 0px 0px;">
              <table class="table">
                <tbody>
                  <tr>
                    <td>
                      <h8>Nama</h8>
                    </td>
                    <td>
                      <h8>{{ $product->name }}</h8>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <h8>Harga</h8>
                    </td>
                    <td>
                      <h8>Rp {{ number_format($product->price) }},-</h8>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <h8>Berat</h8>
                    </td>
                    <td>
                      <h8>{{ $product->weight }} gr</h8>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <h8>Kategori</h8>
                    </td>
                    <td>
                      <h8>{{ $product->category->name }}</h8>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
				</div>
  			</div>
  			<div class="col">
  				<div class="card" style="width:100%; float:left; margin:50px 0px 30px 0px">
  					<div class="card-body">
  						<h5 class="card-title">{{ $product->name }}</h5>
  						<p class="card-text">
  							<div class="jumbotron">
								{!! $product->description !!}
  							</div>					
  							<div class="product_count">
                				<form action="{{ route('front.cart') }}" method="POST">
									@csrf
									<div class="product_count">
										<label for="qty">Quantity:</label>
										<input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:" class="input-text qty">
										<input type="hidden" name="product_id" value="{{ $product->id }}" class="form-control">
										<button class="btn btn-success">Add to Cart</button>
									</div>
									@if (session('success'))
									<div class="alert alert-success mt-2">{{ session('success') }}</div>
									@endif
								</form>
             			 </div>
  						</p>
  					</div>
  				</div>
  			</div>
  		</div>
  		</div>
  	</div>
@endsection