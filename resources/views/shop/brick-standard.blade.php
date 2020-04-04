@foreach($products as $product)
	<a href="{{ route('single' , [$product->id]) }}"><div class="product-grid">					  
		<div class="more-product-info"><span>NEW</span></div>						
		<div class="product-img b-link-stripe b-animate-go  thickbox">						   
			<img src="{{ asset('public/images/' . $product->image) }}" class="img-responsive" alt=""/>
			<div class="b-wrapper">
			<h4 class="b-animate b-from-left  b-delay03">							
			<button class="btns">ORDER NOW</button>
			</h4>
			</div>
		</div></a>						
		<div class="product-info simpleCart_shelfItem">
			<div class="product-info-cust">
				 <h4>{{$product->name}}</h4>
				<span class="item_price">${{$product->price}}</span>
				<input type="text" class="item_quantity" value="1" />
				<input type="button" class="item_add" value="ADD">
			</div>													
			<div class="clearfix"> </div>
		</div>	
		</div>		
@endforeach 