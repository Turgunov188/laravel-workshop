

<?php $__env->startSection('main'); ?>

<div class="login">
	 <div class="container">
			<ol class="breadcrumb">
		  <li><a href="<?php echo e(route('index')); ?>">Home</a></li>
		  <li class="active">Login</li>
		 </ol>
		 <h2>Login</h2>
		 <div class="col-md-6 log">			 
				 <p>Welcome, please enter the folling to continue.</p>
				 <p>If you have previously Login with us, <span>click here</span></p>
				 <form>
					 <h5>User Name:</h5>	
					 <input type="text" value="">
					 <h5>Password:</h5>
					 <input type="password" value="">					
					 <input type="submit" value="Login">
					  <a href="#">Forgot Password ?</a>
				 </form>				 
		 </div>
		  <div class="col-md-6 login-right">
			  	<h3>NEW REGISTRATION</h3>
				<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
				<a class="acount-btn" href="<?php echo e(route('registration')); ?>">Create an Account</a>
		 </div>
		 <div class="clearfix"></div>		 
		 
	 </div>
</div>


<?php $__env->stopSection(); ?>		
<?php echo $__env->make('shop.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/laravel-workshop/resources/views/shop/login.blade.php ENDPATH**/ ?>