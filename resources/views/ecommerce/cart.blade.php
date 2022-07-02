@extends('layouts.ecommerce')

@section('title')
    <title>Keranjang Belanja</title>
@endsection

@section('content')
	<section class="cart_area" style="margin-top:50px;">
		<div class="container">
			<div class="cart_inner">
                <form action="{{ route('front.update_cart') }}" method="post">
                    @csrf
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Product</th>
								<th scope="col">Price</th>
								<th scope="col">Quantity</th>
								<th scope="col">Total</th>
							</tr>
						</thead>
						<tbody>
                            @forelse ($carts as $row)
							<tr>
								<td>
									<div class="media">
										<div class="d-flex">
                                            <img src="{{ asset('storage/products/' . $row['product_image']) }}" width="100px" height="100px" alt="{{ $row['product_name'] }}">
										</div>
										<div class="media-body" style="margin-top:25px; margin-left:25px;">
                                            <p>{{ $row['product_name'] }}</p>
										</div>
									</div>
								</td>
								<td>
									<div class="price" style="margin-top:25px;">
                                    <h5>Rp {{ number_format($row['product_price']) }}</h5>
									</div>
								</td>
								<td>
									<div class="product_count" style="margin-top:25px;">
                                        <input type="text" name="qty[]" id="sst{{ $row['product_id'] }}" maxlength="12" value="{{ $row['qty'] }}" title="Quantity:" class="input-text qty" style="height:35px; border-radius:10px; color:grey;">
                                        <input type="hidden" name="product_id[]" value="{{ $row['product_id'] }}" class="form-control">
                    
										<button onclick="var result = document.getElementById('sst{{ $row['product_id'] }}'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
										 class="btn btn-primary" type="button">
											<i class="lnr lnr-chevron-up"></i>
										</button>
										<button onclick="var result = document.getElementById('sst{{ $row['product_id'] }}'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
										 class="btn btn-warning" type="button">
											<i class="lnr lnr-chevron-down"></i>
										</button>
									</div>
								</td>
								<td>
									<div class="qty" style="margin-top:25px;">
                                    <h5>Rp {{ number_format($row['product_price'] * $row['qty']) }}</h5>
									</div>
								</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4">Tidak ada belanjaan</td>
                            </tr>
                            @endforelse
							<tr class="bottom_button">
								<td>
									<button class="btn btn-warning">Update Cart</button>
								</td>
								<td></td>
								<td></td>
								<td></td>
                            </tr>
                            </form>
							<tr>
								<td>

								</td>
								<td>

								</td>
								<td>
									<h5>Subtotal</h5>
								</td>
								<td>
                                    <h5>Rp {{ number_format($subtotal) }}</h5>
								</td>
							</tr>
							<tr class="out_button_area">
								<td></td>
								<td></td>
								<td></td>
								<td>
									<div class="checkout_btn_inner">
                                    <button class="btn btn-success"><a href="{{ route('front.product') }}" style="color:white; text-decoration:none;">Continue Shopping</button></a>
									<button class="btn btn-primary"><a href="{{ route('front.checkout') }}" style="color:white; text-decoration:none;">Proceed to checkout</button></a>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
	<!--================End Cart Area =================-->
@endsection