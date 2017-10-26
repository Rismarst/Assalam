 @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            @foreach($unitpendidikan as $data)
                <div class="panel-heading">Dashboard <a class="btn btn-primary btn-xs pull-right" href="{{ route('unitpendidikan.edit',$data->id) }}">Ubah</a></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    

                    <div class="panel panel-default">
                        <div class="panel-heading">Logo</div>
                        <div class="panel-body">
                            <img  class="img img-responsive" src="{{ asset('/img/'.$data->logo) }}">
                        </div>
                    </div>


                    <div class="panel panel-default">
                        <div class="panel-heading">Nama Intansi</div>
                        <div class="panel-body">
                            {{$data->nama_instansi}}
                        </div>
                    </div>

                    <hr>

                   

                    <div class="panel panel-default">
                        <div class="panel-heading">Link</div>
                        <div class="panel-body">
                            {{$data->link}}
                        </div>
                    </div>

                    <hr>







                    





                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
