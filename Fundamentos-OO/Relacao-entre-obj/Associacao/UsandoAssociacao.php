<?php

require_once 'Produto.php';
require_once 'Fabricante.php';

$produto1 = new Produto('Café', 50, 20);
$fabricante1 = new Fabricante('Nescafé', 'Rua Tal', '93.757686');


$produto1->setFabricante($fabricante1);
$descricao = $produto1->getDescricao();

//usando encadiamento de chamada já que o fabricante é um objeto
$nomeFabrica = $produto1->getFabricante()->getNome();

print "O Fabricante do produto {$descricao} é
{$nomeFabrica}";


var_dump($produto1);
var_dump($fabricante1);