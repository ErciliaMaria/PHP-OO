<?php

$produto = new stdClass;//cria um objeto vazio
$produto->descricao = 'Chocolate';
$produto->estoque = 10;
$produto->preco = 8;

$vetor1 = (array) $produto;//converte o objeto em vetor

$vetor2 = [
    'descricao' => 'Café',
    'estoque' => 100,
    'preco' => 7
];

$produto2 = (object) $vetor2;//converte o vetor em objeto

echo '<pre>';
//var_dump($produto2);
//print $produto2->descricao . '<br>';

//conversao array para objeto:
$produto4 = [];
$produto4['descricao'] = 'Chá';
$produto4['estoque'] = 100;
$produto4['preco'] = 7;

$objeto = new stdClass;
foreach ($produto4 as $chave => $valor)
{
    $objeto->$chave = $valor;
}
echo '<pre>';
print_r($objeto);


