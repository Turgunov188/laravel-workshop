@foreach($carts as $cart)
<div class="cart-sec">
	<div class="cart-item cyc">
		 <img src="{{ asset('public/images/' . $cart->image) }}"/>
	</div>
   <div class="cart-item-info">
		 <h3>{{$cart->name}}</h3>
		 <h4><span>Rs. $ </span>{{$cart->price}}</h4>
		 <p class="qty">Qty ::</p>
		 <input min="1" type="number" id="quantity" name="quantity" value="1" class="form-control input-small">
		 <a class="submitremoveone" id="{{$cart->id}}" href="#"><button type="submit"  class="btn btn-danger">Del</button></a>
		 <!-- <div><a class="btn btn-danger submitremoveone listbuttonremove" id="{{$cart->id}}" href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a></div>  -->
   </div>
   <div class="clearfix"></div>				
</div>
@endforeach