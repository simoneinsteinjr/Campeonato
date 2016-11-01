@extends('layouts.telaPrincipalAdmin')

@section('content')

    <form class="form-horizontal">

        <div class="form-group">
            <label for="nome" class="col-sm-2 control-label">Nome</label>
            <div class="col-sm-10">
                {{$jogador->nome}}
            </div>
        </div>

        <div class="form-group">
            <label for="nrCamisa" class="col-sm-2 control-label">NrCamisa</label>
            <div class="col-sm-10">
                {{$jogador->nrCamisa}}
            </div>
        </div>

        <div class="form-group">
            <label for="posicao" class="col-sm-2 control-label">Posicao</label>
            <div class="col-sm-10">
                {{$jogador->posicao}}
            </div>
        </div>

        <div class="form-group">
            <label for="equipa" class="col-sm-2 control-label">Equipa</label>
            <div class="col-sm-10">
                {{$jogador->equipa_id}}
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a href="{{ url('jogadores')}}" class="btn btn-primary">Voltar</a>
            </div>
        </div>

    </form>
@stop