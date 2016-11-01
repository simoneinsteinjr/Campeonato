@extends('layouts.telaPrincipalAdmin')

@section('content')

    <form class="form-horizontal">

        <div class="form-group">
            <label for="nrEdicao" class="col-sm-2 control-label">NrEdicao</label>
            <div class="col-sm-10">
                {{$edicao->nrEdicao}}
            </div>
        </div>

        <div class="form-group">
            <label for="dataInicio" class="col-sm-2 control-label">DataInicio</label>
            <div class="col-sm-10">
                {{$edicao->dataInicio}}
            </div>
        </div>

        <div class="form-group">
            <label for="dataFim" class="col-sm-2 control-label">DataFim</label>
            <div class="col-sm-10">
                {{$edicao->DataFim}}
            </div>
        </div>

        <div class="form-group">
            <label for="descricao" class="col-sm-2 control-label">Descricao</label>
            <div class="col-sm-10">
                {{$edicao->descricao}}
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a href="{{ url('edicoes')}}" class="btn btn-primary">Voltar</a>
            </div>
        </div>

    </form>
@stop