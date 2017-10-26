@extends('layouts.saya')

@section('content')

	<div id="breadcrumb">
		<div class="container">	
			<div class="breadcrumb">							
				<li><a href="/">Home</a></li>
				<li>Unit Pendidikan</li>			
			</div>		
		</div>	
	</div>

<div class="feature">
		<div class="container">
			<div class="text-center">
			<div class="center">
               <h1><p><b>Yayasan Assalaam Bandung</b></p></h1>
            </div>

            @php
				$yayasan = App\UnitPendidikan::find(1);
			@endphp

				<div class="col-md-3">
					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" >
						<img src="{{ asset('img/'.$yayasan->logo) }}" width="200" height="200"></i>	
						<h2><a href="{!! $yayasan->link !!}">{!! $yayasan->nama_instansi !!}</a></h2>
					</div>
				</div>

				
			
			@php
				$yayasan = App\UnitPendidikan::find(2);
			@endphp

				<div class="col-md-3">
					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" >
						<img src="{{ asset('img/'.$yayasan->logo) }}" width="200" height="200"></i>	
						<h2><a href="{!! $yayasan->link !!}">{!! $yayasan->nama_instansi !!}</a></h2>
					</div>
				</div>
				

				@php
				$yayasan = App\UnitPendidikan::find(3);
			@endphp

				<div class="col-md-3">
					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" >
						<img src="{{ asset('img/'.$yayasan->logo) }}" width="200" height="200"></i>	
						<h2><a href="{!! $yayasan->link !!}">{!! $yayasan->nama_instansi !!}</a></h2>
					</div>
				</div>
				

				@php
				$yayasan = App\UnitPendidikan::find(4);
			@endphp

				<div class="col-md-3">
					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" >
						<img src="{{ asset('img/'.$yayasan->logo) }}" width="200" height="200"></i>	
						<h2><a href="{!! $yayasan->link !!}">{!! $yayasan->nama_instansi !!}</a></h2>
					</div>
				</div>
				

				@php
				$yayasan = App\UnitPendidikan::find(5);
			@endphp

				<div class="col-md-3">
					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" >
						<img src="{{ asset('img/'.$yayasan->logo) }}" width="200" height="200"></i>	
						<h2><a href="{!! $yayasan->link !!}">{!! $yayasan->nama_instansi !!}</a></h2>
					</div>
				</div>
				




				
			</div>
		</div>
	</div>
	@endsection