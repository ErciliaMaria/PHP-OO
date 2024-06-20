<?php
declare(strict_types=1);
class Estado
{
    private string $nome;
    public function __construct(string $nome, Estado $estado = null){
        $this->nome = $nome;
    }
    public function getNome():string
    {
        return $this->nome;
    }
}
class Cidade
{
    private string $nome;
    private ?Estado $estado;

    public function __construct(string $nome, Estado $estado = null)
    {
        $this->nome = $nome;
        $this->estado = $estado;
    }
    public function getEstado()
        {
            return $this->estado;
        }
}
/*
$estado = new Estado('Rio Grande do Sul');
$cidade = new Cidade('Porto Alegre', $estado);
print $cidade->getEstado()->getNome();
*/
/*
$cidade = new Cidade('Lajeado');
//teste para usar além do nullsafe:
if($cidade->getEstado() instanceof Estado) {
    print $cidade->getEstado()->getNome();
}
*/
/*
$cidade = new Cidade('Lajeado');
//Nullsafe operator:
//não segue com o print pois não existe objeto estado:
print $cidade->getEstado()?->getNome();
*/

