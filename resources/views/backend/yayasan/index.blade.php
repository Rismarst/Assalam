 @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            @foreach($yayasan as $data)
                <div class="panel-heading">Dashboard <a class="btn btn-primary btn-xs pull-right" href="{{ route('yayasan.edit',$data->id) }}">Ubah</a></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <div class="panel panel-default">
                        <div class="panel-heading">Nama Yayasan</div>
                        <div class="panel-body">
                            {{$data->nama_yayasan}}
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">Alamat Yayasan</div>
                        <div class="panel-body">
                            {{$data->alamat}}
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">Logo Yayasan</div>
                        <div class="panel-body">
                            <img  class="img img-responsive" src="{{ asset('/img/'.$data->logo) }}">
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">Gambar Yayasan</div>
                        <div class="panel-body">
                            <img  class="img img-responsive" src="{{ asset('/img/'.$data->gambar) }}">
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">Sejarah</div>
                        <div class="panel-body">
                           <p> {!! $data->sejarah !!}
                           </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
