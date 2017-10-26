@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Berita</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    {!! Form::model($berita, ['url'=>route('berita.update', $berita->id), 'method'=>'put', 'files'=>'true','class'>'form-horizontal']) !!}


                    <div class="form-group{{ $errors->has('judul') ? ' has-error': '' }}">
                        {!! Form::label('judul', 'judul', ['class' => 'col-md-6 control-label']) !!}

                        <div class="col-md-6">
                            {!! Form::textarea('judul', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('judul', '<p class="help-block">:message</p>') !!}
                        </div>

                    </div> <br><br>
                    <div class="form-group{{ $errors->has('konten') ? ' has-error': '' }}">
                        {!! Form::label('konten', 'konten', ['class' => 'col-md-6 control-label']) !!}

                        <div class="col-md-6">
                            {!! Form::textarea('konten', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('konten', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>

                   

                    <div class="form-group{{ $errors->has('foto') ? ' has-error': '' }}">
                        {!! Form::label('foto', 'foto Yayasan', ['class' => 'col-md-6 control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::file('foto') !!}
                            @if (isset($berita) && $berita->foto)
                                <p>
                                    <br>
                                    {!! Html::image(asset('img/'.$berita->foto), null, ['class' => 'img-rounded img-responsive']) !!}
                                </p>
                            @endif
                            {!! $errors->first('foto', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>

                    
                    
                    <div class="form-group">
                        <div class="col-md-12"><br>
                            {!! Form::submit('Simpan', ['class' => 'btn btn-primary pull-right']) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
