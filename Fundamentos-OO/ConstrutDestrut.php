<?php

class ConstrutDestru
{
    private $descricao;
    private $estoque;
    private $preco;

    public function __construct($descricao,$estoque,$preco){
        $this->setDescricao($descricao);
        $this->setEstoque($estoque);
        $this->setPreco($preco);
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
    public function reajustarPreco($percentual)
    {
        if  (is_numeric($percentual) and ($percentual >= 0) )
        {
            $this->preco *= (1 + ($percentual/100));
        }
    }
    public function __destruct()
    {
        echo "DESTRUÌDO: Objeto {$this->getDescricao()}<br>";
    }
}

$produto1 = new ConstrutDestru("Chocolate", 10, 8);
$produto2 = new ConstrutDestru("Café", 100, 5);

echo "O estoque de {$produto1->getDescricao()} é {$produto1->getEstoque()} <br>";
echo "O preço de {$produto1->getDescricao()} é {$produto1->getPreco()} <br>";

unset($produto1);
unset($produto2);