@extends('layouts.default')

@section('conteudo')

    <h1>Categoria</h1>

    <form action="/categorias" method="post">
        @csrf

        <input type="hidden" name="id" id="id" value="{{$categoria->id}}">

        <div class="form-group row">
            <label for="nome" class="col-sm-2 col-form-label">Nome: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nome" id="nome" value="{{$categoria->nome}}">
            </div>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-success">Salvar</button>
            <a class="btn btn-danger" href="/categoria">Voltar</a>
        </div>
    </form>

@endsection