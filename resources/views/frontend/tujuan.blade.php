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
			<h3><b>Yayasan Assalaam</b></h3>
			<hr>
			<div class="col-md-10 wow fadeInDown" data-wow-duration="2000ms" data-wow-delay="300ms">
				<img src="images/7.png" >
				<h2><b>Tujuan</b></h2>





				@foreach($tujuan as $data)
					<h5>{!! $data->tujuan !!}</h5>
					@endforeach



			</div>
			<div class="col-md-5 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
								
			</div>
		</div>
	</div>
	


@endsection