@extends('shop.layout')

@section('main')

<div class="about">
	 <div class="container">
			<ol class="breadcrumb">
		  <li><a href="{{ route('index') }}">Home</a></li>
		  <li class="active">About</li>
		 </ol>
		 <h2>ABOUT US</h2>
		 <div class="about-sec">
			 <div class="about-pic"><img src="{{ asset('public/images/a1.jpg') }}" class="img-responsive" alt=""/></div>
			 <div class="about-info">
				 <p>Sed condimytui etorem ipsum dolor sitrol ametyre consectetur adipet tymolotymon wertunio wercinaloisyuing elit. 
				 Ted nectro placerat turpis nec rutrumit est. Maecholi enas toro aliquet tristique tellus.Sed condimytui etorem ipsum dolor sitrol ametyre consectetur adipet tymolotymon wertunio wercinaloisyuing elit. 
				 Ted nectroTed nectro placerat turpis nec rutrumit est. Maecholi enas toro aliquet tristique tellus. Maecholi enas toro aliquet tristique tellus.Sed condimytui etorem ipsum dolor sitrol ametyre consectetur adipet tymolotymon wertunio wercinaloisyuing elit. 
				 Morbi bibendum, lectus sed pretium semper, mauris ipsum laoreet justo, vel efficitur nisi elit sed felis. Aenean vel ipsum odio.</p>
				 <a href="#">Read More..</a>
			 </div>
			 <div class="clearfix"></div>
		 </div>
		 <h3>OUR SPECIALS</h3>
		 <div class="about-grids">
			 <div class="col-md-3 about-grid">
				 <img src="{{ asset('public/images/ab1.jpg') }}" class="img-responsive" alt=""/>
				 <a href="blog-single.html"><h4>Kurtis & Kurtas</h4></a>
				 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, recusandae, minima deserunt pariatur illo eos doloremque
				 Asperiores modi temporibus consequuntur tempore quibusdam!</p>
			 </div>
			 <div class="col-md-3 about-grid">
				 <img src="{{ asset('public/images/ab2.jpg') }}" class="img-responsive" alt=""/>
				 <a href="blog-single.html"><h4>Salwars</h4></a>
				 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, recusandae, minima deserunt pariatur illo eos doloremque 
				 Asperiores modi temporibus consequuntur tempore quibusdam!</p>
			 </div>
			 <div class="col-md-3 about-grid pot-2">
				 <img src="{{ asset('public/images/ab3.jpg') }}" class="img-responsive" alt=""/>
				 <a href="blog-single.html"><h4>Desi Look</h4></a>
				 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, recusandae, minima deserunt pariatur illo eos doloremque
				 Asperiores modi temporibus consequuntur tempore quibusdam!</p>
			 </div>
			 <div class="col-md-3 about-grid pot-1">
				 <img src="{{ asset('public/images/ab4.jpg') }}" class="img-responsive" alt=""/>
				 <a href="blog-single.html"><h4>Designersaree</h4></a>
				 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, recusandae, minima deserunt pariatur illo eos doloremque 
				 Asperiores modi temporibus consequuntur tempore quibusdam!</p>
			 </div>
			 <div class="clearfix"></div>
			 <div class="bottom-grids">
			 <div class="col-md-3 about-grid flwr">
				 <img src="{{ asset('public/images/ab5.jpg') }}" class="img-responsive" alt=""/>
				 <a href="blog-single.html"><h4>NEWLOOK</h4></a>
				 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, recusandae, minima deserunt pariatur illo eos doloremque
				 Asperiores modi temporibus consequuntur tempore quibusdam!</p>
			 </div>
			 <div class="col-md-3 about-grid flwr">
				 <img src="{{ asset('public/images/ab6.jpg') }}" class="img-responsive" alt=""/>
				 <a href="blog-single.html"><h4>Meriea</h4></a>
				 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, recusandae, minima deserunt pariatur illo eos doloremque 
				 Asperiores modi temporibus consequuntur tempore quibusdam!</p>
			 </div>
			 <div class="col-md-3 about-grid flwr pot-2">
				 <img src="{{ asset('public/images/ab7.jpg') }}" class="img-responsive" alt=""/>
				 <a href="blog-single.html"><h4>Woolen Shurg</h4></a>
				 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, recusandae, minima deserunt pariatur illo eos doloremque
				 Asperiores modi temporibus consequuntur tempore quibusdam!</p>
			 </div>
			 <div class="col-md-3 about-grid flwr pot-1">
				 <img src="{{ asset('public/images/ab8.jpg') }}" class="img-responsive" alt=""/>
				 <a href="blog-single.html"><h4>Black Shurg</h4></a>
				 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, recusandae, minima deserunt pariatur illo eos doloremque 
				 Asperiores modi temporibus consequuntur tempore quibusdam!</p>
			 </div>
			 <div class="clearfix"></div>
			 </div>
		 </div>
	 </div>
</div>

@endsection
