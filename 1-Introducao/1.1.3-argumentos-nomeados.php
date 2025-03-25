<?php

/**
 * Argumentos nomeados
 * exemplo abaixo
 * @return 
 */
function Calcula_Juros_simples(float $valor,float $periodo,float $taxa=10)
{
    return $valor + $valor * $periodo * ($taxa / 100);
}
//print Calcula_Juros_simples(100, 5, 10);
//print Calcula_Juros_simples(valor:200, periodo:5, taxa:10);
//print Calcula_Juros_simples(valor:200, taxa:5, periodo:10);

//$vetor = array_fill(start_index:0, count:50, value:'ABC');
//print_r($vetor);

//print str_repeat(string: ' .o0o ', times:5);

//Parâmetros opcionais
//print calcula_juros_simples(valor:100, periodo: 5);

function Monta_saudacao(string $saudacao,string $nome, string $sobrenome = '', string $tratamento ='')
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
print Monta_saudacao('Boa tarde', 'Ercilia');
print Monta_saudacao('Bom dia', 'Clara', '', 'Dra.');

//desempacota para usar parãmetros da funcao
$args = ['Olá', 'Maria', 'da Silva', 'senhora'];
$args2 = ['saudacao' => 'Olá', 'nome' => 'Davi', 'sobrenome' => 'Coelho', 'tratamento' => 'Sr.' ];
print Monta_saudacao(...$args2); 
