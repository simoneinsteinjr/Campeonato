@extends('layouts.telaPrincipalAdmin')

@section('content')

    <form class="form-horizontal">

        <div class="form-group">
            <label for="nome" class="col-sm-2 control-label">Nome</label>
            <div class="col-sm-10">
                {{$equipa->nome}}
            </div>
        </div>

        <div class="form-group">
            <label for="totalGolos" class="col-sm-2 control-label">Total-Golos</label>
            <div class="col-sm-10">
                {{$equipa->totalGolos}}
            </div>
        </div>

        <div class="form-group">
            <label for="totalJogadores" class="col-sm-2 control-label">Total-Jogadores</label>
            <div class="col-sm-10">
                {{$equipa->totalJogadores}}
            </div>
        </div>

        <div class="form-group">
            <label for="descricao" class="col-sm-2 control-label">Descricao</label>
            <div class="col-sm-10">
                {{$equipa->descricao}}
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a href="{{ url('equipas')}}" class="btn btn-primary">Voltar</a>
            </div>
        </div>

    </form>
@stop