@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Yayasan</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    {!! Form::model($yayasan, ['url'=>route('yayasan.update', $yayasan->id), 'method'=>'put', 'files'=>'true','class'>'form-horizontal']) !!}
                    <div class="form-group{{ $errors->has('nama_yayasan') ? ' has-error': '' }}">
                        {!! Form::label('nama_yayasan', 'Nama', ['class' => 'col-md-6 control-label']) !!}

                        <div class="col-md-6">
                            {!! Form::text('nama_yayasan', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('nama_yayasan', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div> <br><br>
                    <div class="form-group{{ $errors->has('alamat') ? ' has-error': '' }}">
                        {!! Form::label('alamat', 'Alamat', ['class' => 'col-md-6 control-label']) !!}

                        <div class="col-md-6">
                            {!! Form::textarea('alamat', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <br><br>
                    <div class="form-group{{ $errors->has('logo') ? ' has-error': '' }}">
                        {!! Form::label('logo', 'Lambang Yayasan', ['class' => 'col-md-6 control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::file('logo') !!}
                            @if (isset($yayasan) && $yayasan->logo)
                                <p>
                                    <br>
                                    {!! Html::image(asset('img/'.$yayasan->logo), null, ['class' => 'img-rounded img-responsive']) !!}
                                </p>
                            @endif
                            {!! $errors->first('logo', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('gambar') ? ' has-error': '' }}">
                        {!! Form::label('gambar', 'Gambar Yayasan', ['class' => 'col-md-6 control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::file('gambar') !!}
                            @if (isset($yayasan) && $yayasan->gambar)
                                <p>
                                    <br>
                                    {!! Html::image(asset('img/'.$yayasan->gambar), null, ['class' => 'img-rounded img-responsive']) !!}
                                </p>
                            @endif
                            {!! $errors->first('gambar', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('sejarah') ? ' has-error': '' }}">
                        {!! Form::label('sejarah', 'Sejarah', ['class' => 'col-md-12 control-label']) !!}

                        <div class="col-md-12">
                            {!! Form::textarea('sejarah', null, ['class' => 'ckeditor','id'=>'1','name'=>'sejarah',]) !!}
                            {!! $errors->first('sejarah', '<p class="help-block">:message</p>') !!}
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
