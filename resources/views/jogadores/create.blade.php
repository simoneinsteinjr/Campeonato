@extends('layouts.telaPrincipalAdmin')

@section('content')
    <br>
    <br>
    {!! Form::open(['url' => 'jogadores', 'files'=>true]) !!}

    @include('shared.alert')

    <div class="form-group col-md-7 col-md-offset-1">
        {!! Form::label('Nome', 'Nome:') !!}
        {!! Form::text('nome',null,['class'=>'form-control', 'placeholder'=>'Introduza o Nome']) !!}
    </div>

    <div class="form-group col-md-7 col-md-offset-1">
        {!! Form::label('NrCamisa', 'NrCamisa:') !!}
        {!! Form::number('nrCamisa',null,['class'=>'form-control', 'placeholder'=>'Introduza o Numero da Camisa']) !!}
    </div>

    <div class="form-group col-md-7 col-md-offset-1">
        {!! Form::label('Posicao', 'Posicao:') !!}
        {!! Form::select('posicao', array(
                      'Selecione Uma Posicao',
                      'defesa'=>'Defesa',
                      'medio'=>'Medio',
                      'avancado'=>'Avancado'
                      ),null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group col-md-7 col-md-offset-1">
        {!! Form::label('Equipa', 'Equipa:') !!}
        {!! Form::select('equipa_id', $equipas, null, ['class'=>'form-control']) !!}
    </div>

    <br>
    <div class="form-group col-md-7 col-md-offset-1">
        {!! Form::submit('GRAVAR', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop