<?php

class Produto{
    private $descricao;
    private $estoque;
    private $preco;
    private $fabricante;
    private $caracteristicas;

    public function __construct($descricao, $estoque, $preco){
    $this->descricao = $descricao;
    $this->estoque = $estoque;
    $this->preco = $preco;
    $this->caracteristicas = [];
    }
    public function addCaracteristica($nome, $valor){
        $this->caracteristicas[] = new Caracteristica($nome, $valor);
    }
    public function getCaracteristica(){
        return $this->caracteristicas;
    }
    public function getDescricao(){
        return $this->descricao;
    }
   
}