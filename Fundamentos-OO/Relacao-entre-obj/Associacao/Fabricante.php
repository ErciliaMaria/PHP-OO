<?php

class Fabricante
{
    private $nome;
    private $endereco;
    private $produto;

    public function __construct($nome, $endereco, $produto){
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->produto = $produto;
    }
    public function getNome(){
        return $this->nome;
    }
}
