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
            <th>Nome</th>
            <th>NrCamisa</th>
            <th>Posicao</th>
            <th>Equipa</th>
            <th colspan="3">Acções</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($jogadores as $jogador)
            <tr>
                <td>{{ $jogador->id }}</td>
                <td>{{ $jogador->nome }}</td>
                <td>{{ $jogador->nrCamisa }}</td>
                <td>{{ $jogador->posicao }}</td>
                <td>{{ $jogador->equipa->nome}}</td>
                <td><a href="{{url('jogadores',$jogador->id)}}" class="btn btn-primary">Ler</a></td>
                <td><a href="{{route('jogadores.edit',$jogador->id)}}" class="btn btn-warning">Alterar</a></td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['jogadores.destroy', $jogador->id]]) !!}
                    {!! Form::submit('Apagar', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

        </tbody>

    </table>
@endsection
