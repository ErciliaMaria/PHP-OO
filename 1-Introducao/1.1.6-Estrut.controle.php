<?php

//constantes:
var_dump(__FILE__);//mostra o caminho do arquivo
var_dump(__DIR__);//mostra o caminho do diretório
var_dump(__LINE__);//mostra a linha do código


//variaveis:
$salario = 1800;
$tempo = 12;

if( ($salario > 1000) and ($tempo >= 12) )//ou AND ou &&
{
        print 'promoção';
}
else
{
    print 'sem promoção';
}
 

$valor_venda = 110;


 if ($valor_venda > 100)
{
    $resultado = 'muito caro';
}
else
{
    $resultado = 'pode comprar';
}
echo($resultado);
 

//operador ternario:
//$resultado = ($valor_venda > 100)? 'muito caro' : 'pode comprar';
//echo($resultado);

//operador while:

    $cont = 1;
    while ($cont <= 5)
    {
        print $cont . ' - ';
        $cont++;
    }
    


    for($cont = 1; $cont <=10 ; $cont++)
    {
        print $cont . ' ';
    }
    
/*
$tipo = 'pdf';
switch ($tipo) 
{
case 'pdf':
    print 'pdf';
    break;
case 'doc':
    print 'doc';
    break;
case 'txt':
    print 'txt';
    break;
default:
    print 'outro';
    break;
}
*/

$lista = ['maça', 'laranja', 'banana', 'uva'];

foreach ($lista as $fruta)
{
    print $fruta . ' ';
}
