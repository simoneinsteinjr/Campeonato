@extends('layouts.telaPrincipalAdmin')

@section('content')
    <br>

    {!! Form::model($jogador,['method' => 'PATCH','files'=>true,'route'=>['jogadores.update',$jogador->id]]) !!}

    @include('shared.alert')

    <div class="form-group col-md-7 col-md-offset-1">
        {!! Form::label('Nome', 'Nome:') !!}
        {!! Form::text('nome',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group col-md-7 col-md-offset-1">
        {!! Form::label('NrCamisa', 'NrCamisa:') !!}
        {!! Form::number('nrCamisa',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group col-md-7 col-md-offset-1">
        {!! Form::label('Posicao', 'Posicao:') !!}
        {!! Form::text('posicao',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group col-md-7 col-md-offset-1">
        {!! Form::label('Equipa', 'Equipa:') !!}
        {!! Form::select('equipa_id','equipas') !!}
    </div>


    <br>

    <div class="form-group">
        {!! Form::submit('ACTUALIZAR', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop