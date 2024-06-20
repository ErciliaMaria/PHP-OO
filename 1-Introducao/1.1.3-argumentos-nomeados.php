<?php

function calcula_juros_simples(float $valor,float $periodo,float $taxa=10)
{
    return $valor + $valor * $periodo * ($taxa / 100);
}
//print calcula_juros_simples(100, 5, 10);
//print calcula_juros_simples(valor:200, periodo:5, taxa:10);
//print calcula_juros_simples(valor:200, taxa:5, periodo:10);

//$vetor = array_fill(start_index:0, count:50, value:'ABC');
//print_r($vetor);

//print str_repeat(string: ' .o0o ', times:5);

//Parâmetros opcionais
//print calcula_juros_simples(valor:100, periodo: 5);

function monta_saudacao(string $saudacao,string $nome, string $sobrenome = '', string $tratamento ='')
{
    $frase = '';
    $frase .= $saudacao;

    if ($tratamento) {
        $frase .= ' ' . $tratamento;
    }

    $frase .= ' ' . $nome;

    if ($sobrenome) {
        $frase .= ' ' . $sobrenome;
    }

    return $frase;
}
//print monta_saudacao('Olá', 'Maria', 'da Silva', 'Sra');
print monta_saudacao('Boa tarde', 'Ercilia');
print monta_saudacao('Bom dia', 'Clara', '', 'Dra.');

//desempacota para usar parãmetros da funcao
$args = ['Olá', 'Maria', 'da Silva', 'senhora'];
$args2 = ['saudacao' => 'Olá', 'nome' => 'Davi', 'sobrenome' => 'Coelho', 'tratamento' => 'Sr.' ];
print monta_saudacao(...$args2); 
