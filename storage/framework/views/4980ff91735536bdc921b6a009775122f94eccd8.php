<?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="cart-sec">
	<div class="cart-item cyc">
		 <img src="<?php echo e(asset('public/images/' . $cart->image)); ?>"/>
	</div>
   <div class="cart-item-info">
		 <h3><?php echo e($cart->name); ?></h3>
		 <h4><span>Rs. $ </span><?php echo e($cart->price); ?></h4>
		 <p class="qty">Qty ::</p>
		 <input min="1" type="number" id="quantity" name="quantity" value="1" class="form-control input-small">
		 <a class="submitremoveone" id="<?php echo e($cart->id); ?>" href="#"><button type="submit"  class="btn btn-danger">Del</button></a>
		 <!-- <div><a class="btn btn-danger submitremoveone listbuttonremove" id="<?php echo e($cart->id); ?>" href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a></div>  -->
   </div>
   <div class="clearfix"></div>				
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /var/www/html/laravel-workshop/resources/views/shop/cart-standard.blade.php ENDPATH**/ ?>