@extends('layouts.saya')

@section('content')
	<div id="breadcrumb">
		<div class="container">	
			<div class="breadcrumb">							
				<li><a href="/">Home</a></li>
				<li>Profile</li>			
			</div>		
		</div>	
	</div>

	<div class="aboutus">
		<div class="container">
			<h3>Yayasan Assalaam</h3>
			<hr>

			
			<div class="col-md-7 wow fadeInDown" data-wow-duration="2000ms" data-wow-delay="300ms">
				<img src="images/7.png" >
				<h2>C. Identitas</h2>


				@foreach($visimisi as $data)
					<h5>{!! $data->moto !!}</h5>
					@endforeach

			</div>





				
			</div>
			<div class="col-md-5 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
								
			</div>
		</div>
	</div>
	
	<div class="our-team">
		<div class="container">
			<h3>Our Team</h3>	
			<div class="text-center">
				<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
					<img src="images/services/1.jpg" alt="" >
					<h4>John Doe</h4>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing eil sed deiusmod tempor</p>
				</div>
				<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
					<img src="images/services/2.jpg" alt="" >
					<h4>John Doe</h4>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing eil sed deiusmod tempor</p>
				</div>
				<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
					<img src="images/services/3.jpg" alt="" >
					<h4>John Doe</h4>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing eil sed deiusmod tempor</p>
				</div>
			</div>
		</div>
	</div>
	
@endsection