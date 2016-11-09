@extends('layouts.telaPrincipalAdmin')

@section('content')
    <br>

    {!! Form::model($equipa,['method' => 'PATCH','files'=>true,'route'=>['equipas.update',$equipa->id]]) !!}

        @include('shared.alert')

        <div class="form-group col-md-7 col-md-offset-1">
            {!! Form::label('Nome', 'Nome:') !!}
            {!! Form::text('nome',null,['class'=>'form-control', 'placeholder'=>'Introduza o Nome']) !!}
        </div>

        <div class="form-group col-md-7 col-md-offset-1">
            {!! Form::label('Victorias', 'Victorias:') !!}
            {!! Form::number('victorias',null,['class'=>'form-control', 'placeholder'=>'Introduza o Nr Jogos Ganhos']) !!}
        </div>

        <div class="form-group col-md-7 col-md-offset-1">
            {!! Form::label('Empates', 'Empates:') !!}
            {!! Form::number('empates',null,['class'=>'form-control', 'placeholder'=>'Introduza o Numero de Empates']) !!}
        </div>

        <div class="form-group col-md-7 col-md-offset-1">
            {!! Form::label('Derrotas', 'Derrotas:') !!}
            {!! Form::number('derrotas',null,['class'=>'form-control', 'placeholder'=>'Introduza o Numero de Derrotas']) !!}
        </div>

        <div class="form-group col-md-7 col-md-offset-1">
            {!! Form::label('GolosMarcados', 'GolosMarcados:') !!}
            {!! Form::number('golosMarcados',null,['class'=>'form-control', 'placeholder'=>'Introduza os Golos Marcados']) !!}
        </div>

        <div class="form-group col-md-7 col-md-offset-1">
            {!! Form::label('GolosSofridos', 'GolosSofridos:') !!}
            {!! Form::number('golosSofridos',null,['class'=>'form-control', 'placeholder'=>'Introduza os Sofridos']) !!}
        </div>

        <div class="form-group col-md-7 col-md-offset-1">
            {!! Form::label('Descricao', 'Descricao:') !!}
            {!! Form::textarea('descricao',null,['class'=>'form-control', 'placeholder'=>'Introduza a Descricao']) !!}
        </div>
        <br>

        <div class="form-group">
            {!! Form::submit('ACTUALIZAR', ['class' => 'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
@endsection