@extends('layouts.default')

@section('conteudo')

    <h1>Lista 2 - Exercício 5</h1>

    <form action="/salario" method="post">
        @csrf

        <div class="form-group row">
            <label for="minimo" class="col-sm-2 col-form-label">Salário Mínimo: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="minimo" id="minimo">
            </div>
        </div>
        <div class="form-group row">
            <label for="horas" class="col-sm-2 col-form-label">Horas Trabalhadas: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="horas" id="horas">
            </div>
        </div>
        <div class="form-group row">
            <label for="dependentes" class="col-sm-2 col-form-label">Qtd. Dependentes: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="dependentes" id="dependentes">
            </div>
        </div>
        <div class="form-group row">
            <label for="extras" class="col-sm-2 col-form-label">Horas Extras: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="extras" id="extras">
            </div>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-success">Salvar</button>
            <a class="btn btn-danger" href="/marca">Voltar</a>
        </div>
    </form>

@endsection

