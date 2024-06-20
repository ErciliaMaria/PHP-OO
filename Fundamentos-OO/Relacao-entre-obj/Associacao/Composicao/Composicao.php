<?php

require_once 'Produto.php';
require_once 'Caracteristica.php';

$produto = new Produto('Chocolate', 20, 50);

$produto->addCaracteristica('Sabor', 'Amargo');
$produto->addCaracteristica('Peso', '400gr');

//var_dump($produto);

print 'Produto :' . $produto->getDescricao() . '<br>'; 
foreach($produto->getCaracteristica() as $caracteristicas)
{
    $nome = $caracteristicas->getNome();
    $valor = $caracteristicas->getValor();

    print "Característica: {$nome} -  {$valor} <br>";
}