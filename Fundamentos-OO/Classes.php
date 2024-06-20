<?php

class Produto{
    //atributo public pode ser manipulado dentro e fora de uma classe
    public $descricao;
    public $estoque;
    public $preco;
}
$p1 = new Produto();
$p1->descricao = 'Chocolate';
$p1->estoque = 10;
$p1->preco = 7;

$p2 = new Produto();
$p2->descricao = 'Café';
$p2->estoque = 'vinte'; //inconsistencia de dados
$p2->preco = 10;

print $p1->descricao;