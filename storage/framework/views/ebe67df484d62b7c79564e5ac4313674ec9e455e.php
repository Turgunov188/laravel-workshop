

<?php $__env->startSection('main'); ?>

<?php
//print_r($products);
?>

<div class="categoires">
	 <div class="container">
		 <a href="#"><div class="col-md-4 sections fashion-grid-a">
			 <h4>Fashion</h4>
			 <p>dignissim</p>			 					
		 </div></a>
		 <a href="#"><div class="col-md-4 sections fashion-grid-b">
			 <h4>Beauty</h4>
			 <p>fermentum</p>			 					
		 </div></a>
		 <a href="#"><div class="col-md-4 sections fashion-grid-c">
			 <h4>Creativity</h4>
			 <p>vulputate</p>				
		 </div></a>
	 </div>
</div>
<!---->
<div class="features" id="features">
	 <div class="container">
		 <div class="tabs-box">
			<ul class="tabs-menu">
				<li><a href="#tab1">Best seller</a></li>
				<li><a href="#tab2">Popular</a></li>
				<li><a href="#tab3">New Arrivals</a></li>
			</ul>
			<div class="clearfix"> </div>
		 <div class="tab-grids">
			 <div id="tab1" class="tab-grid1">	
<?php echo $__env->make('shop.brick-standard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			 </div>	
        <div class="btn btn-warning"><a href="#" class="link_again">больше</a>			 
		 </div>

	 </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

<script>
$(document).ready(function(){
    $('.btn').click(function() {
        BaseRecord.top6=0;
        BaseRecord.more();
        return false;
    });
    $('.header_search_button').click(function(){
        BaseRecord.search=$('.search_input').val();
        BaseRecord.more();
    });
});
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('shop.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/laravel-workshop/resources/views/shop/index.blade.php ENDPATH**/ ?>