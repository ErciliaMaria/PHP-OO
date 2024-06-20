<?php

require_once 'Produto.php';
require_once 'Fabricante.php';

$produto1 = new Produto('Café', 50, 20);
$fabricante1 = new Fabricante('Nescafé', 'Rua Tal', '93.757686');


$produto1->setFabricante($fabricante1);
print "O Fabricante do produto {$produto1->getDescricao()} é
{$produto1->getFabricante()->getNome()}";
var_dump($produto1);
var_dump($fabricante1);