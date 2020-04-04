@extends('shop.layout')

@section('main')

<div class="registration-form">
	 <div class="container">
		 <ol class="breadcrumb">
		  <li><a href="{{ route('index') }}">Home</a></li>
		  <li class="active">Registration</li>
		 </ol>
		 <h2>Registration</h2>
		 <div class="col-md-6 reg-form">
			 <div class="reg">
				 <p>Welcome, please enter the folling to continue.</p>
				 <p>If you have previously registered with us, <a href="#">click here</a></p>
				 <form>
					 <ul>
						 <li class="text-info">First Name: </li>
						 <li><input type="text" value=""></li>
					 </ul>
					 <ul>
						 <li class="text-info">Last Name: </li>
						 <li><input type="text" value=""></li>
					 </ul>				 
					<ul>
						 <li class="text-info">Email: </li>
						 <li><input type="text" value=""></li>
					 </ul>
					 <ul>
						 <li class="text-info">Password: </li>
						 <li><input type="password" value=""></li>
					 </ul>
					 <ul>
						 <li class="text-info">Re-enter Password:</li>
						 <li><input type="password" value=""></li>
					 </ul>
					 <ul>
						 <li class="text-info">Mobile Number:</li>
						 <li><input type="text" value=""></li>
					 </ul>						
					 <input type="submit" value="Register Now">
					 <p class="click">By clicking this button, you agree to my modern style <a href="#">Pollicy Terms and Conditions</a> to Use</p> 
				 </form>
			 </div>
		 </div>
		 <div class="col-md-6 reg-right">
			 <h3>Completely Free Accouent</h3>
			 <p>Pellentesque neque leo, dictum sit amet accumsan non, dignissim ac mauris. Mauris rhoncus, lectus tincidunt tempus aliquam, odio 
			 libero tincidunt metus, sed euismod elit enim ut mi. Nulla porttitor et dolor sed condimentum. Praesent porttitor lorem dui, in pulvinar enim rhoncus vitae. Curabitur tincidunt, turpis ac lobortis hendrerit, ex elit vestibulum est, at faucibus erat ligula non neque.</p>
			 <h3 class="lorem">Lorem ipsum dolor sit amet elit.</h3>
			 <p>Tincidunt metus, sed euismod elit enim ut mi. Nulla porttitor et dolor sed condimentum. Praesent porttitor lorem dui, in pulvinar enim rhoncus vitae. Curabitur tincidunt, turpis ac lobortis hendrerit, ex elit vestibulum est, at faucibus erat ligula non neque.</p>
		 </div>
		 <div class="clearfix"></div>		 
	 </div>
</div>
		
@endsection