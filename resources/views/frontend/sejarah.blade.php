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
			<div class="col-md-12 wow fadeInDown" data-wow-duration="2000ms" data-wow-delay="300ms">
				<center><img class="img-responsive" src="images/7.png"/></center>
				<h2><b>A. Sejarah Yayasan Assalaam</b></h2>
					@foreach($sejarah as $data)
					<h5>{!! $data->sejarah !!}</h5>
					@endforeach
			</div>
			<div class="col-md-5 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
								
			</div>
		</div>
	</div>
	
	</div>
		@endsection