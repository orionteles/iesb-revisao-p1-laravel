@extends('layouts.default')

@section('conteudo')

    <h1>Lista 2 - Exercício 5</h1>

    <div class="alert alert-success">
        <p>O salário a receber é: <strong>R$ {{ number_format($salarioReceber, 2, ',', '.')}}</strong></p>
    </div>

    <hr>
    <p>Entenda o cálculo:</p>

    <div class="row">
        <div class="col-4">

            <div class="card">
                <div class="card-header">
                    Dados Informados
                </div>
                <div class="card-body">
                    <p><strong>Salário Mínimo: </strong> R$ {{number_format($minimo, 2, ',', '.')}}</p>
                    <p><strong>Horas Trabalhadas: </strong> {{$horas}}</p>
                    <p><strong>Horas Extras: </strong> {{$extras}}</p>
                    <p><strong>Qtd. Dependentes: </strong> {{$dependentes}}</p>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    Cálculos Brutos
                </div>
                <div class="card-body">
                    <p><strong>Valor da Hora: </strong> R$ {{number_format($valorHora, 2, ',', '.')}}</p>
                    <p><strong>Salário do Mês: </strong> R$ {{number_format($salarioMes, 2, ',', '.')}}</p>
                    <p><strong>Valor da Hora Extra: </strong> R$ {{number_format($valorExtra, 2, ',', '.')}}</p>
                    <p><strong>Valor da Dependentes: </strong> R$ {{number_format($valorDependente, 2, ',', '.')}}</p>
                    <p><strong>Salário Bruto: </strong> R$ {{number_format($salarioBruto, 2, ',', '.')}}</p>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    Cálculos Finais
                </div>
                <div class="card-body">
                    <p><strong>Imposto de Renda: </strong> R$ {{number_format($imposto, 2, ',', '.')}}</p>
                    <p><strong>Salário Líquido: </strong> R$ {{number_format($salarioLiquido, 2, ',', '.')}}</p>
                    <p><strong>Gratificação: </strong> R$ {{number_format($gratificacao, 2, ',', '.')}}</p>
                    <p><strong>Salário a Receber: </strong> R$ {{number_format($salarioReceber, 2, ',', '.')}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection

