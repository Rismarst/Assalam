@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Unit Pendidikan</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    {!! Form::model($UnitPendidikan, ['url'=>route('unitpendidikan.update', $UnitPendidikan->id), 'method'=>'put', 'files'=>'true','class'>'form-horizontal']) !!}









                    <div class="form-group{{ $errors->has('logo') ? ' has-error': '' }}">
                        {!! Form::label('logo', 'logo', ['class' => 'col-md-6 control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::file('logo') !!}
                            @if (isset($UnitPendidikan) && $UnitPendidikan->logo)
                                <p>
                                    <br>
                                    {!! Html::image(asset('img/'.$UnitPendidikan->logo), null, ['class' => 'img-rounded img-responsive']) !!}
                                </p>
                            @endif
                            {!! $errors->first('logo', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>


                    <div class="form-group{{ $errors->has('nama_instansi') ? ' has-error': '' }}">
                        {!! Form::label('nama_instansi', 'nama_instansi', ['class' => 'col-md-12 control-label']) !!}

                        <div class="col-md-12">
                            {!! Form::textarea('nama_instansi', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('nama_instansi', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>



                    <div class="form-group{{ $errors->has('link') ? ' has-error': '' }}">
                        {!! Form::label('link', 'link', ['class' => 'col-md-12 control-label']) !!}

                        <div class="col-md-12">
                            {!! Form::textarea('link', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('link', '<p class="help-block">:message</p>') !!}
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
s