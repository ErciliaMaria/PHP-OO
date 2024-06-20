<?php

/**
 * Estudando variáveis
 */

$nome = 'Davi';
$sobrenome = 'Santos';

$nome_completo = $nome . ' ' . $sobrenome;
$outro_nome_completo = "$nome $sobrenome";

//outra forma isolando as variáveis 
//e tbm estou usando o \ para incobrir o " no meio do texto
$novo_nome_completo = "{$nome} é nome,\" e {$sobrenome} é sobrenome ";


print $nome_completo;
print $outro_nome_completo;
print $novo_nome_completo;

$num1 = 2;
$num2 = 4.5;
var_dump($num1 * $num2);

//passage por referência
print 'Passagem por referência';
$b = 5;
$a = &$b;

$b = 10;

var_dump($b);
var_dump($a);

print 'Variáveis booleanas:  ';

$peso = 30;

if ($peso > 25)
{
    print 'multa';
}

print 'Variáveis com if:  ';

$nome = 'hhhhhh';

if (!empty($nome))
{
    print 'Nome tem conteúdo';
}

print 'Variável tipo array: ';

$lista = ['cor' => 'vermelho', 'peso' => 20];

print 'Tipo objeto: ';

$pessoa = new stdClass;

$pessoa-> nome = 'Pedro';
$pessoa-> altura = 1.8;
var_dump($pessoa);