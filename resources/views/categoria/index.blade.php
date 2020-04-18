@extends('layouts.default')

@section('conteudo')

    <h1>Categorias</h1>

    <a href="/categorias/create" class="btn btn-warning">Novo</a>

    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
            <th>Ações</th>
            <th>Id</th>
            <th>Nome</th>
        </tr>
        </thead>
        <tbody>
            @foreach($categorias as $categoria)
                <tr>
                    <td>
                        <a href="/categorias/{{$categoria->id}}/edit">Alterar</a>
                        <a href="/categorias/{{$categoria->id}}/destroy" class="excluir">Excluir</a>
                    </td>
                    <td>{{$categoria->id}}</td>
                    <td>{{$categoria->nome}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection