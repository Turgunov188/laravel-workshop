

<?php $__env->startSection('main'); ?>

<?php
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
?>

<!--Single Page starts Here-->
<div class="product-main">
	 <div class="container">
		 <ol class="breadcrumb">
		  <li><a href="<?php echo e(route('index')); ?>">Home</a></li>
		  <li class="active">Single</li>
		 </ol>
		 <div class="ctnt-bar cntnt">
			 <div class="content-bar">
			 	 <?php if($errors->any()): ?>
                     <?php $__env->startComponent('shop.components.alert'); ?>
                        <?php $__env->slot('type'); ?>
                            danger
                        <?php $__env->endSlot(); ?>
                      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <?php echo e($error); ?><br>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php echo $__env->renderComponent(); ?>
                <?php endif; ?>
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
								<img class="etalage_source_image" src="<?php echo e(asset('public/images/' . $product->image)); ?>" />
								</a>
							 </li>
							 <div class="clearfix"></div>
						 </ul>
					 </div>
					 <div class="details-left-info">
							<h3><?php echo e($product->name); ?></h3>
								<h4>Pellentesque pretium </h4>							
							<p>$<?php echo e($product->price); ?></p>
							<p class="qty">Qty ::</p><input min="1" type="number" id="quantity" name="quantity" value="1" class="form-control input-small">
							<div class="btn_form">
								<a href="#">Add to cart</a>
								<form name="form_tocart" method="post" action="<?php echo e(route('tocart')); ?>" style="display: none;">
									<?php echo e(csrf_field()); ?>

									<input type="hidden" name="name" value="<?php echo e($product->name); ?>">
									<input type="hidden" name="price" value="<?php echo e($product->price); ?>">
									<input type="hidden" name="image" value="<?php echo e($product->image); ?>">
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

<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>

<script>
	$(document).ready(function(){
		$('.btn_form').click(function(){
            form_tocart.submit();
            return false;
		});
	});
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('shop.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/laravel-workshop/resources/views/shop/single.blade.php ENDPATH**/ ?>