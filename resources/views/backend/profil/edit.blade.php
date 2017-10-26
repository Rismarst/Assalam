@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Profile</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    {!! Form::model($profil, ['url'=>route('profil.update', $profil->id), 'method'=>'put', 'files'=>'true','class'>'form-horizontal']) !!}

                    <div class="form-group{{ $errors->has('sejarah') ? ' has-error': '' }}">
                        {!! Form::label('sejarah', 'Sejarah', ['class' => 'col-md-12 control-label']) !!}

                        <div class="col-md-12">
                            {!! Form::textarea('sejarah', null, ['class' => 'ckeditor','id'=>'1','name'=>'sejarah','rows'=>'10','cols'=>'100']) !!}
                            {!! $errors->first('sejarah', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>

                    
                    <div class="form-group{{ $errors->has('visi') ? ' has-error': '' }}">
                        {!! Form::label('visi', 'visi', ['class' => 'col-md-12 control-label']) !!}

                        <div class="col-md-12">
                            {!! Form::textarea('visi', null, ['class' => 'ckeditor','id'=>'1','name'=>'visi','rows'=>'10','cols'=>'100']) !!}
                            {!! $errors->first('visi', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('misi') ? ' has-error': '' }}">
                        {!! Form::label('misi', 'misi', ['class' => 'col-md-12 control-label']) !!}

                        <div class="col-md-12">
                            {!! Form::textarea('misi', null, ['class' => 'ckeditor','id'=>'1','name'=>'misi','rows'=>'10','cols'=>'100']) !!}
                            {!! $errors->first('misi', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>

                     
                    <div class="form-group{{ $errors->has('moto') ? ' has-error': '' }}">
                        {!! Form::label('moto', 'moto', ['class' => 'col-md-12 control-label']) !!}

                        <div class="col-md-12">
                            {!! Form::textarea('moto', null, ['class' => 'ckeditor','id'=>'1','name'=>'moto','rows'=>'10','cols'=>'100']) !!}
                            {!! $errors->first('moto', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('tujuan') ? ' has-error': '' }}">
                        {!! Form::label('tujuan', 'tujuan', ['class' => 'col-md-12 control-label']) !!}

                        <div class="col-md-12">
                            {!! Form::textarea('tujuan', null, ['class' => 'ckeditor','id'=>'1','name'=>'tujuan','rows'=>'10','cols'=>'100']) !!}
                            {!! $errors->first('tujuan', '<p class="help-block">:message</p>') !!}
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
