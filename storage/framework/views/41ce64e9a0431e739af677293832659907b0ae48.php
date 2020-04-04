<!DOCTYPE html>
<html>
<head>
<title><?php echo e(config('app.name')); ?></title>
<!-- CSRF Token -->
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

<link href="<?php echo e(asset('public/css/bootstrap.css')); ?>" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo e(asset('public/css/form.css')); ?>" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo e(asset('public/css/style.css')); ?>" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Raleway:400,200,600,800,700,500,300,100,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Arimo:400,700,700italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/css/component.css')); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/css/etalage.css')); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/css/normalize.css')); ?>" />

<link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/styles/bootstrap-4.1.2/bootstrap.min.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/styles/main_styles.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/styles/responsive.css')); ?>">

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="New Fashions Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design"/>

<script src="<?php echo e(asset('public/styles/bootstrap-4.1.2/popper.js')); ?>"></script>
<script src="<?php echo e(asset('public/styles/bootstrap-4.1.2/bootstrap.min.js')); ?>"></script>

<script src="<?php echo e(asset('public/js/jquery.easydropdown.js')); ?>"></script>
<script src="<?php echo e(asset('public/js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/js/simpleCart.min.js')); ?>"> </script>
<script src="<?php echo e(asset('public/js/jquery.etalage.min.js')); ?>"></script>
<!-- start menu -->
<link href="<?php echo e(asset('public/css/megamenu.css')); ?>" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="<?php echo e(asset('public/js/megamenu.js')); ?>"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<?php echo $__env->yieldContent('js'); ?>
<!-- start menu -->
</head>
<body>
<div class="header2 text-center">
	 <div class="container">
		 <div class="main-header">
			  <div class="carting">
				 <ul><li><a href="<?php echo e(route('login')); ?>"> LOGIN</a></li></ul>
				 </div>
			 <div class="logo">
				 <h3><a href="index.html">NEW FASHIONS</a></h3>
			  </div>			  
			 <div class="box_1">				 
				 <a href=""><h3>Cart: <span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)<img src="<?php echo e(asset('public/images/cart.png')); ?>" alt=""/></h3></a>
				 <p><a href="javascript:;" class="simpleCart_empty">empty cart</a></p>
			 
			 </div>
			 
			 <div class="clearfix"></div>
		 </div>		 
				<!-- start header menu -->
	    <ul class="megamenu skyblue">
			<li class="grid"><a class="color1" href="<?php echo e(route('index')); ?>">Home</a></li>
			<li class="grid"><a href="<?php echo e(route('women')); ?>">Women</a></li>				
			<li class="grid"><a href="<?php echo e(route('men')); ?>">MEN</a></li>
			<li class="grid"><a href="<?php echo e(route('about')); ?>">ABOUT US</a></li>
	   	</ul> 			 
			  <div class="clearfix"></div> 
			    <?php if(\Request::is('/')): ?>  
                <!-- Search -->
                <div class="header_search">
                    <form action="<?php echo e(route('index')); ?>" id="header_search_form" method="get">
                        <input type="text" name="search" class="search_input" placeholder="Поиск...">
                        <button type="button" class="header_search_button" value="Search"><img src="<?php echo e(asset('public/images/search.png')); ?>" alt=""></button>
                    </form>
                </div>
               <?php endif; ?>
	 </div>
</div>
<!--header//-->
<?php echo $__env->yieldContent('main'); ?>
<!--fotter-->
<div class="fotter">
	 <div class="container">
	 <div class="col-md-6 contact">
		  <form>
			 <input type="text" class="textname" value="" placeholder="Name...">
			 <input type="text" class="textemail" value="" placeholder="Email...">
	
			 <div class="clearfix"></div><br>
			 <!-- <input type="button" class="" value="SUBMIT"> -->
			 <span class="result_to_email">&nbsp;</span><br>
			 <button type="button" class="pass btn btn-success" >pass</button>

		 </form>

	 </div>
	 <div class="col-md-6 ftr-left">
		 <div class="ftr-list">
			 <ul>
				 <li><a href="<?php echo e(route('index')); ?>">Home</a></li>
				 <li><a href="<?php echo e(route('about')); ?>">About</a></li>
				 <li><a href="blog.html">Blog</a></li>
				 <li><a href="products.html">Top Seller</a></li>
				 <li><a href="shop.html">New Models</a></li>
				 <li><a href="404.html">Combos</a></li>
				 <li><a href="products.html">Collection</a></li>
				 <li><a href="contact.html">Contact</a></li>
			 </ul>
		 </div>
		 <div class="ftr-list2">
			 <ul>				 
				 <li><a href="#">Combos</a></li>
				 <li><a href="#">Trendy</a></li>
				 <li><a href="#">Fashion</a></li>
				 <li><a href="#">College</a></li>
				 <li><a href="#">Party</a></li>
				 <li><a href="#">Dress</a></li>
				 <li><a href="#">Kurtas & kurtis</a></li>
			 </ul>
		 </div>
		 <div class="clearfix"></div>
		 <h4>FOLLOW US</h4>
		 <div class="social-icons">
		 <a href="#"><span class="in"> </span></a>
		 <a href="#"><span class="you"> </span></a>
		 <a href="#"><span class="be"> </span></a>
		 <a href="#"><span class="twt"> </span></a>
		 <a href="#"><span class="fb"> </span></a>
		 </div>
	 </div>	 
	 <div class="clearfix"></div>
	 </div>
</div>
<!--fotter//-->
<div class="fotter-logo">
	 <div class="container">
	 <div class="ftr-logo"><h3><a href="index.html">NEW FASHIONS</a></h3></div>
	 <div class="ftr-info">
	 <p>&copy; 2020 All Rights Reseverd Design by <a href="http://w3layouts.com/">W3layouts</a> </p>
	 </div>
	 <div class="clearfix"></div>
	 </div>
</div>
<!--fotter//-->
<script src="<?php echo e(asset('public/js/main.js')); ?>"></script>
<script>
	$(document).ready(function(){
      $('.pass').click(function(){
         BaseRecord.mailer($('.textname').val(), $('.textemail').val());
      });
    });
</script>
<?php echo $__env->yieldContent('js'); ?>
</body>
</html><?php /**PATH /var/www/html/laravel-workshop/resources/views/shop/layout.blade.php ENDPATH**/ ?>