@extends('layouts.telaPrincipalAdmin')

@section('content')
    <br>
    <br>
    {!! Form::open(['url' => 'edicoes', 'files'=>true]) !!}

    @include('shared.alert')

    <div class="form-group col-md-7 col-md-offset-1">
        {!! Form::label('NrEdicao', 'NrEdicao:') !!}
        {!! Form::text('nrEdicao',null,['class'=>'form-control', 'placeholder'=>'Introduza o Nr da Edicao']) !!}
    </div>

    <div class="form-group col-md-7 col-md-offset-1">
        {!! Form::label('DataInicio', 'DataInicio:') !!}
        {!! Form::date('dataInicio',null,['class'=>'form-control', 'placeholder'=>'Introduza a Data do Inico']) !!}
    </div>

    <div class="form-group col-md-7 col-md-offset-1">
        {!! Form::label('DataFim', 'DataFim:') !!}
        {!! Form::date('dataFim',null,['class'=>'form-control', 'placeholder'=>'Introduza a data do Fim']) !!}
    </div>

    <div class="form-group col-md-7 col-md-offset-1">
        {!! Form::label('Descricao', 'Descricao:') !!}
        {!! Form::text('descricao',null,['class'=>'form-control', 'placeholder'=>'Introduza a Descricao']) !!}
    </div>

    <br>
    <div class="form-group col-md-7 col-md-offset-1">
        {!! Form::submit('GRAVAR', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop