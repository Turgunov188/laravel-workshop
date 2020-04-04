@extends('shop.layout')

@section('main')

@php
//print_r($product);
/*
if($errors->any()){
	$errors_str = '';
	foreach ($errors->all() as $error){
	$errors_str .= $error . '\n';
}
echo '<script>alert("'.$errors_str.'")</script>';
}
*/
@endphp

<!--Single Page starts Here-->
<div class="product-main">
	 <div class="container">
		 <ol class="breadcrumb">
		  <li><a href="{{ route('index') }}">Home</a></li>
		  <li class="active">Single</li>
		 </ol>
		 <div class="ctnt-bar cntnt">
			 <div class="content-bar">
			 	 @if ($errors->any())
                     @component('shop.components.alert')
                        @slot('type')
                            danger
                        @endslot
                      @foreach ($errors->all() as $error)
                          {{ $error }}<br>
                      @endforeach
                    @endcomponent
                @endif
				 <div class="single-page">					 
					 <script>
							jQuery(document).ready(function($){
					
								$('#etalage').etalage({
									thumb_image_width: 300,
									thumb_image_height: 400,
									source_image_width: 700,
									source_image_height: 800,
									show_hint: true,
									click_callback: function(image_anchor, instance_id){
										alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
									}
								});
								// This is for the dropdown list example:
								$('.dropdownlist').change(function(){
									etalage_show( $(this).find('option:selected').attr('class') );
								});
					
							});
						</script>
						<!--//details-product-slider-->
					 <div class="details-left-slider">
						  <ul id="etalage">
							 <li>
								<a href="optionallink.html">
								<img class="etalage_source_image" src="{{ asset('public/images/' . $product->image) }}" />
								</a>
							 </li>
							 <div class="clearfix"></div>
						 </ul>
					 </div>
					 <div class="details-left-info">
							<h3>{{$product->name}}</h3>
								<h4>Pellentesque pretium </h4>							
							<p>${{$product->price}}</p>
							<p class="qty">Qty ::</p><input min="1" type="number" id="quantity" name="quantity" value="1" class="form-control input-small">
							<div class="btn_form">
								<a href="#">Add to cart</a>
								<form name="form_tocart" method="post" action="{{route('tocart')}}" style="display: none;">
									{{ csrf_field() }}
									<input type="hidden" name="name" value="{{$product->name}}">
									<input type="hidden" name="price" value="{{$product->price}}">
									<input type="hidden" name="image" value="{{$product->image}}">
								</form>
							</div>
							<div class="flower-type">
							<p>Mobel  ::<a href="#">Dress</a></p>
							<p>Brand  ::<a href="#">Pellentesque</a></p>
							</div>
							<h5>Description  ::</h5>
							<p class="desc">Proin vestibulum scelerisque tempus. Phasellus at fermentum erat. Pellentesque mattis velit eget elit condimentum gravida. Donec vehicula mollis velit, a eleifend est hendrerit quis. Etiam pulvinar at ex eget cursus. Etiam luctus orci ut tortor rhoncus, sit amet faucibus lorem finibus. Nulla id ornare arcu. or lowest node and working upwards) are as follows:</p>
					 </div>
					 <div class="clearfix"></div>				 	
				 </div>
			 </div>
		 </div>		 
		 <div class="clearfix"></div>
	 </div>
</div>

@endsection


@section('js')

<script>
	$(document).ready(function(){
		$('.btn_form').click(function(){
            form_tocart.submit();
            return false;
		});
	});
</script>

@endsection