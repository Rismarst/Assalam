 @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            @foreach($profil as $data)
                <div class="panel-heading">Dashboard <a class="btn btn-primary btn-xs pull-right" href="{{ route('profil.edit',$data->id) }}">Ubah</a></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                   
                    <div class="panel panel-default">
                        <div class="panel-heading">Sejarah</div>
                        <div class="panel-body">
                            {!! $data->sejarah !!}
                        </div>

                         <div class="panel panel-default">
                        <div class="panel-heading">Misi</div>
                        <div class="panel-body">
                            {!! $data->misi !!}
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">Visi</div>
                        <div class="panel-body">
                            {!! $data->visi !!}
                        </div>
                    </div>

                     <div class="panel panel-default">
                        <div class="panel-heading">Moto</div>
                        <div class="panel-body">
                            {!! $data->moto !!}
                        </div>
                    </div>


                     <div class="panel panel-default">
                        <div class="panel-heading">Tujuan</div>
                        <div class="panel-body">
                            {!! $data->tujuan !!}
                        </div>
                    </div>

                  

                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
