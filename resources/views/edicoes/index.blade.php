@extends('layouts.telaPrincipalAdmin')

@section('content')
    <br>
    <br>
    @include('shared.alert')

    <hr>

    <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
            <input type="text" id="txtpesquisar" class="form-control" placeholder="Pesquisar">
        </div>
    </form>

    <table id="tabela" class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th>Id</th>
            <th>NrEdicao</th>
            <th>DataInico</th>
            <th>DataFim</th>
            <th>Descricao</th>
            <th colspan="3">Acções</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($edicoes as $edicao)
            <tr>
                <td>{{ $edicao->id }}</td>
                <td>{{ $edicao->nrEdicao }}</td>
                <td>{{ $edicao->dataInicio }}</td>
                <td>{{ $edicao->dataFim }}</td>
                <td>{{ $edicao->descricao }}</td>
                <td><a href="{{url('edicoes',$edicao->id)}}" class="btn btn-primary">Ler</a></td>
                <td><a href="{{route('edicoes.edit',$edicao->id)}}" class="btn btn-warning">Alterar</a></td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['edicoes.destroy', $edicao->id]]) !!}
                    {!! Form::submit('Apagar', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

        </tbody>

    </table>
@endsection
