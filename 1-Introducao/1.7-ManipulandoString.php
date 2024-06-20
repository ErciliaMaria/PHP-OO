<?php

$nome = 'Maria';
$sobrenome = ' da Silva';

//$nomeCompleto = $nome . $sobrenome;
$nomeCompleto = "$nome $sobrenome";//só funciona com aspas duplas, aspas simples interpreta como texto

//variável com delimitadores:
$boasVindas = "Bem-vindo(a) {$nome} {$sobrenome}!";
//var_dump($boasVindas); 

//manipulando aspas simples dentro de aspas duplas ou o contrário:
//print "Aqui vai um exemplo de texto com 'aspas simples'.$nome";//variável dentro de aspas duplas é interpretada

//print 'Aqui vai um exemplo de texto com "aspas duplas".';

//print 'Exemplo de \'aspas\' ';//aspas serão interpretadas como caracteres
//print "Exemplo de \"aspas duplas\" ";//mesma solução para aspas duplas


//para manipular strings, usar funções específicas:
print strtoupper($nome . $sobrenome);//tudo em maiúsculo
print '<br>';
print strtolower($nome . $sobrenome);//tudo em minúsculo;
print '<br>';
print strlen($nome);//tamanho da string
echo '<br>';
print substr($nome.$sobrenome, 6, 8);//extrai parte de uma string. 6 é a partir de qual caractere e 8 é quantos caracteres
echo '<br>';
print substr($nome.$sobrenome, -3);
echo '<br>';
print str_replace('a', 'e', $nome.$sobrenome);//substitui a primeira letra pela segunda
