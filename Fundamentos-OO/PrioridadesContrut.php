<?php

class PrioridadesContrut{

    public function __construct( private string $descricao, private float $estoque,private float $preco){
       // $this->setDescricao($descricao);
       // $this->setEstoque($estoque);
       // $this->setPreco($preco);
       echo $this->descricao;
    }

    public function setDescricao($descricao)
    {
        //para definir o atributo descricao
        if (is_string($descricao))
        {
            $this->descricao = $descricao;
        }

    }
    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setEstoque($estoque)
    {
        if (is_numeric($estoque) and $estoque > 0 )
        {
            $this->estoque = $estoque;
        }
    }

    public function getEstoque(){
        return $this->estoque;
    }

    public function setPreco($preco)
    {
        if (is_numeric($preco) and ($preco > 0) )
        {
            $this->preco = $preco;
        }
    }

    public function getPreco(){
        return $this->preco;
    }

    public function aumentarEstoque($unidades)
    {
        if  (is_numeric($unidades) and ($unidades >= 0) )
        {
            $this->estoque += $unidades;
        }
    }
    public function diminuirEstoque($unidades)
    {
        if  (is_numeric($unidades) and ($unidades >= 0) )
        {
            $this->estoque -= $unidades;
        }
    }   
}
$produto1 = new PrioridadesContrut('Chocolate', 10, 80);
/*
print 'Descrição: ' . $produto1->getDescricao() . '<br>';
print 'Estoque: ' . $produto1->getEstoque() . '<br>';
print 'Preço: ' . $produto1->getPreco() . '<br>';
*/