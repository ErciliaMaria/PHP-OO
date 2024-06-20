<?php

//$valor = 100;

//$valor = $valor + 5;
//$valor ++;
//$valor --;
//$valor += 5;
//$valor *= 5;
//$valor /= 5;  

//var_dump($valor);

//avaliando resultados com incrementacao a direita
//$valor = 100;
//$teste = $valor ++;

//avaliando resultado com incremento a esquerda
$valor = 100;
$teste = ++$valor ;
//var_dump($valor);
//var_dump($teste);

//variaveis de comparacao
/** 
$valor1 = 100;
$valor2 = '100';

if( $valor1 === $valor2)
{
    echo 'são iguais';
}
*/

$salario = 1000;
$cargo = 'gerente';
//ou => or ou ||
if($salario > 800 and $cargo == 'gerente')// ou && ou AND
{
    echo 'ok';
}