@extends('layouts.saya')

@section('content')


	<div id="breadcrumb">
		<div class="container">	
			<div class="breadcrumb">							
				<li><a href="/">Home</a></li>
				<li>Berita</li>			
			</div>		
		</div>	
	</div>

	<section id="contact-page">
        <div class="container">
            <h3>Berita Terbaru Yayasan Assalaam</h3>    
            <br>
            <br>
            <br>


            @php
                $berita = App\berita::find(1);
            @endphp
            <div class="text-center">


                <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <img src="{{ asset('img/'.$berita->foto) }}" class="img-responsive" alt="" >
                    <h4><a href="{!! $berita->judul !!}">{!! $berita->konten !!}</a></h4>
                </div>


                <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <img src="{{ asset('img/'.$berita->foto) }}" class="img-responsive" alt="" >
                    <h4><a href="{!! $berita->judul !!}">{!! $berita->konten !!}</a></h4>
                </div>


                <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <img src="{{ asset('img/'.$berita->foto) }}" class="img-responsive" alt="" >
                    <h4><a href="{!! $berita->judul !!}">{!! $berita->konten !!}</a></h4>
                </div>


                

            </div>
        </div>

        </div><!--/.container-->
        
    </section><!--/#contact-page-->
	@endsection