<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalarioController extends Controller
{
    public function index()
    {
        return view('exercicios.salario');
    }

    public function calcular(Request $request)
    {
        $minimo = $request->minimo;
        $horas = $request->horas;
        $dependentes = $request->dependentes;
        $extras = $request->extras;

        $valorHora = $minimo * 0.2;
        $salarioMes = $valorHora * $horas;
        $valorDependente = $dependentes * 32;
        $valorExtra = ($extras + ($extras*0.5)) * $valorHora;

        $salarioBruto = $salarioMes + $valorDependente + $valorExtra;

        if($salarioBruto < 2000){
            $imposto = 0;
        } elseif($salarioBruto <= 5000){
            $imposto = 0.1;
        } else {
            $imposto = 0.2;
        }

        $salarioLiquido = $salarioBruto - ($salarioBruto*$imposto);

        $gratificacao = $salarioLiquido <= 3500 ? 1000 : 500;

        $salarioReceber = $salarioLiquido + $gratificacao;

        $aResultado = [
            'minimo'=>$minimo,
            'horas'=>$horas,
            'dependentes'=>$dependentes,
            'extras'=>$extras,
            'valorHora'=>$valorHora,
            'salarioMes'=>$salarioMes,
            'valorDependente'=>$valorDependente,
            'valorExtra'=>$valorExtra,
            'salarioBruto'=>$salarioBruto,
            'imposto'=>$imposto,
            'salarioLiquido'=>$salarioLiquido,
            'gratificacao'=>$gratificacao,
            'salarioReceber'=>$salarioReceber,
        ];

        return view('exercicios.resultado', $aResultado);
    }
}
