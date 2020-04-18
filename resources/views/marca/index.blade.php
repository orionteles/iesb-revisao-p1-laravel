@extends('layouts.default')

@section('conteudo')

    <h1>Marcas</h1>

    <a href="/marcas/create" class="btn btn-warning">Novo</a>

    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
            <th>Ações</th>
            <th>Id</th>
            <th>Nome</th>
        </tr>
        </thead>
        <tbody>
            @foreach($marcas as $marca)
                <tr>
                    <td>
                        <a href="/marcas/{{$marca->id}}/edit">Alterar</a>
                        <a href="/marcas/{{$marca->id}}/destroy" class="excluir">Excluir</a>
                    </td>
                    <td>{{$marca->id}}</td>
                    <td>{{$marca->nome}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection