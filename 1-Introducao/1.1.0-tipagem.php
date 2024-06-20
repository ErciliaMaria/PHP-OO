<?php

/**
 * Esse arquivo é para testar tipagens .
 */

 /**$numero = 5;
 $nome = 'teste';
 var_dump($numero);
 var_dump($nome);

 //Usando concatenacao
 $number1 = 5;
 $number2 = 6;
 var_dump(5 . 6);
 var_dump(4 + 5);
 var_dump('6' + '8');
 */
declare(strict_types=1); //variáveis deve ser passada conforme o solicidado, 
//se passar uma string responde fatal error

 function calcularImc(float $peso, float $altura): float
 {
    return $peso / ($altura * $altura);
 }
 $peso = '77';
 var_dump( calcularImc( (float) $peso, 1.8) );