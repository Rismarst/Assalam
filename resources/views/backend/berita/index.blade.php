 @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            @foreach($berita as $data)
                <div class="panel-heading">Dashboard <a class="btn btn-primary btn-xs pull-right" href="{{ route('berita.edit',$data->id) }}">Ubah</a></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <div class="panel panel-default">
                        <div class="panel-heading">Judul</div>
                        <div class="panel-body">
                            {{$data->judul}}
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">Konten</div>
                        <div class="panel-body">
                            {{$data->konten}}
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">Foto</div>
                        <div class="panel-body">
                            <img  class="img img-responsive" src="{{ asset('/img/'.$data->foto) }}">
                        </div>
                    </div>

                                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
