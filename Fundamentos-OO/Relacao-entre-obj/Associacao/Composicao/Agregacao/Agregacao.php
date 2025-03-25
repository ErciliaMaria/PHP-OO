<?php 
require_once 'Cesta.php';
require_once 'Produto.php';

$cesta = new Cesta();
$produto1 = new Produto('Café', 50, 20);
$produto2 = new Produto('Chocolate', 20, 50);
$produto3 = new Produto('Açucar', 10, 10);

$cesta->addItem($produto1);
$cesta->addItem($produto2);
$cesta->addItem($produto3);

var_dump($cesta);
foreach($cesta->getItems() as $itens){
    print "Item: {$itens->getDescricao()} <br>";
}