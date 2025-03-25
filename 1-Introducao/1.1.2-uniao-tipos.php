<?php

/**declare(strict_type=1);

function calcular_juros_simples(int|float $valor, int|float $periodo, int|float $taxa)
{
    return $valor + $valor * $periodo * ($taxa/100);
}

print calcular_juros_simples(100.5, 5, 10);
*/

//Outro exemplo

function soma_data($data_base, DateInterval|int $interval)
{
    $date = new DateTime($data_base);
    if($interval instanceof DateInterval)
    {
        $date->add($interval);
    }
    else
    {
        $date->add( new DateInterval('P'.$interval.'D'));
    }
    return $date->format('Y-m-d');
}
print soma_data('2023-12-10', 5);
print "<br>\n";
print soma_data('2023-12-10', new DateInterval('P12M'));