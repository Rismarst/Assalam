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
				<img src="images/7.png" >
				<h2>A. Visi Assalaam</h2>



				@foreach($visimisi as $data)
					<h5>{!! $data->visi !!}</h5>
					@endforeach

			</div>

			<div class="col-md-12 wow fadeInDown" data-wow-duration="2000ms" data-wow-delay="300ms">
				<h2>B. Misi Assalaam</h2>



				@foreach($visimisi as $data)
					<h5>{!! $data->misi !!}</h5>
					@endforeach

			</div>

			
						
			</div>
		</div>
	</div>
		@endsection