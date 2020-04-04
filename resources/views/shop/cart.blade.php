@extends('shop.layout')

@section('main')

<div class="cart">
	 <div class="container">

@php
//print_r($carts);
@endphp

			 <ol class="breadcrumb">
		  <li><a href="{{ route('index') }}">Home</a></li>
		  <li class="active">Cart</li>
		 </ol>
		 <div class="cart-top">
			<a href="index.html"><< home</a>
		 </div>	
			
		 <div class="col-md-9 cart-items">
			 <h2>My Shopping Bag ALL</h2>
				<script>$(document).ready(function(c) {
					$('.close1').on('click', function(c){
						$('.cart-header').fadeOut('slow', function(c){
							$('.cart-header').remove();
						});
						});	  
					});
			   </script>

			 <div class="cart-header">
<!--  ALL DELETE -->
             <h4>All Remove</h4>
			 <div class="close1"></div>
			    <form style="display: none;" name="form_clearall" method="post" action="{{route('clearall')}}">
			 	         {{ csrf_field() }}
			    </form>
<!--  end ALL DELETE -->
                  @include('shop.cart-standard')
			 </div>
			 <script>
			 	$(document).ready(function(c) {
					$('.close2').on('click', function(c){
							$('.cart-header2').fadeOut('slow', function(c){
						$('.cart-header2').remove();
					});
					});	  
					});
			 </script>	


		 </div>
		 
		 <div class="col-md-3 cart-total">
			 <a class="continue" href="#">Continue to basket</a>
			 <div class="price-details">
				 <h3>Price Details</h3>
				 <span>Total</span>
				 <span class="total">350.00</span>
				 <span>Discount</span>
				 <span class="total">---</span>
				 <span>Delivery Charges</span>
				 <span class="total">100.00</span>
				 <div class="clearfix"></div>				 
			 </div>	
			 <h4 class="last-price">TOTAL</h4>
			 <span class="total final">450.00</span>
			 <div class="clearfix"></div>
			 <a class="order" href="#">Place Order</a>
			 <div class="total-item">
				 <h3>OPTIONS</h3>
				 <h4>COUPONS</h4>
				 <a class="cpns" href="#">Apply Coupons</a>
				 <p><a href="#">Log In</a> to use accounts - linked coupons</p>
			 </div>
			</div>
	 </div>
</div>

@endsection

@section('js')
<script src="{{ asset('public/js/main.js') }}"></script>
<script>
	$(document).ready(function(){
		$('.close1').click(function(){
            //form_clearall.submit();
            BaseRecord.clearall();
            return false;
		});

	});
</script>

@endsection