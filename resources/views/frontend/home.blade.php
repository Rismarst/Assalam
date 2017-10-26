@extends('layouts.saya')

@section('content')
	<section id="main-slider" class="no-margin">
        <div class="carousel slide">      
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(images/slider/bg1.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="co
                     ">
                                <div class="carousel-content">
                     
                                    <h2 class="animation animated-item-1">
                                    <center>Selamat Datang <span><br>Di Yayasan 
                                    @foreach($nama_yayasan as $data)
									{{ $data->nama_yayasan }}
									@endforeach</span></center></h2>


                                    






                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                
                                    
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->             
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
    </section><!--/#main-slider-->
	
	<div class="feature">
		<div class="container">
			<div class="text-center">
				<div class="col-md-3">
				@php
				$yayasan = App\UnitPendidikan::find(1);
			@endphp
					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" >
						<img src="{{ asset('img/'.$yayasan->logo) }}"" width="200" height="200"></i>	
						<h2><a href="{!! $yayasan->link !!}">{!! $yayasan->nama_instansi !!}</a></h2>
					</div>
				</div>
				
				<div class="col-md-3">
				@php
				$yayasan = App\UnitPendidikan::find(2);
			@endphp
					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" >
						<img src="{{ asset('img/'.$yayasan->logo) }}" width="200" height="200"></i>	
						<h2><a href="{!! $yayasan->link !!}">{!! $yayasan->nama_instansi !!}</a></h2>
					</div>
				</div>
				
				<div class="col-md-3">
				@php
				$yayasan = App\UnitPendidikan::find(3);
			@endphp
					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" >
						<img src="{{ asset('img/'.$yayasan->logo) }}"" width="200" height="200"></i>	
						<h2><a href="{!! $yayasan->link !!}">{!! $yayasan->nama_instansi !!}</a></h2>
					</div>
				</div>
				
				<div class="col-md-3">
				@php
				$yayasan = App\UnitPendidikan::find(4);
			@endphp
					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" >
						<img src="{{ asset('img/'.$yayasan->logo) }}"" width="200" height="200"></i>	
						<h2><a href="{!! $yayasan->link !!}">{!! $yayasan->nama_instansi !!}</a></h2>
					</div>
				</div>

				<div class="col-md-3">
				@php
				$yayasan = App\UnitPendidikan::find(5);
			@endphp
					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" >
						<img src="{{ asset('img/'.$yayasan->logo) }}"" width="200" height="200"></i>	
						<h2><a href="{!! $yayasan->link !!}">{!! $yayasan->nama_instansi !!}</a></h2>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	
	<div class="about">
		<div class="container">
			<div class="col-md-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" >

			@php
				$yayasan = App\yayasan::find(1);
				@endphp


				<h2><b>Yayasan {{ $yayasan->nama_yayasan }}</h2></b>



				
						
				<img src="{{ asset('img/'.$yayasan->gambar) }}"
				 class="img-responsive" width="300" height="80" />


		<center>
                
                <a class="preview" href="images/map.png" rel="prettyPhoto"><i class="fa fa-eye"></i> <b>Lihat Lokasi</b></a>
            	</center>
			</div>
			
			<div class="col-md-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" >
				<h2><b>A. Sejarah Yayasan Assalaam</b></h2>
				<p>1.Masa Awal Pendirian </p>
				<p>&nbsp; &nbsp; &nbsp; Yayasan ASsalaam di dirikan pada tanggal 18 November 1952 melalui akta notaris Mr.Raden Soedja Nomor : 105 Tahun 1952 oleh K.H Habib Utsman Al-Aydrus. Kendati baru mendapatkan badan hukum nya pada tahun itu, berbagai kegiatan sosial keagamaan yang di laksanakan oleh tokoh pendiri yayasan keislaman ini telah di mulai beberapa tahun ke belakang.</p>
				<p>&nbsp; &nbsp; &nbsp; Sekembalinya dari beberapa pesantren untuk menuntut ilmu, pada tahun 1930, Sayyid Utsman -- yang lebih di kenal dengan panggilan Habib Utsman -- mulai mengadakan pengajian dari rumah ke rumah. Peserta pengajian ini pada mulanya adalah kalangan orang tua. Rumah yang paling sering di jadikan tempat pengajian adalah rumah R.K.Hardja Diwinangun, dengan memanfaatkan ruangan tengah sebagai tempat pengajian kaum ibu dan ruangan depan untuk ruangan bapak.</p>
					<div role="presentation"><a href="/sejarah"><b>Lihat Selengkapnya</b></a></div>	
				


			</div>
		</div>
	</div>
	
	
	
	
	

@endsection