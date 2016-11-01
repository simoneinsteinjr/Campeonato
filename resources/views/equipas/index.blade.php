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
            <th>Nome</th>,
            <th>TotalGolos</th>,
            <th>GolosSofridos</th>,
            <th>empates</th>,
            <th>Descricao</th>
            <th colspan="3">Acções</th>
        </tr>
        </thead>


        <tbody>
        @foreach ($equipas as $equipa)
            <tr>
                <td>{{ $equipa->id }}</td>
                <td>{{ $equipa->nome }}</td>
                <td>{{ $equipa->golosMarcados }}</td>
                <td>{{ $equipa->golosSofridos }}</td>
                <td>{{ $equipa->empates }}</td>
                <td>{{ $equipa->descricao }}</td>
                <td><a href="{{url('equipas',$equipa->id)}}" class="btn btn-primary">Ler</a></td>
                <td><a href="{{route('equipas.edit',$equipa->id)}}" class="btn btn-warning">Alterar</a></td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['equipas.destroy', $equipa->id]]) !!}
                    {!! Form::submit('Apagar', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

        </tbody>

    </table>
@endsection
