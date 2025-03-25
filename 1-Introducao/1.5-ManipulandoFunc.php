<?php
function calcula_imc(float $peso, float $altura): float
{
    return $peso / ($altura * $altura);
}

//echo calcula_imc(75, 1.85);

function kmMilhas($km)
{
    //aqui vai existir as variaveis declaradas dentro da funcao
    //porem pode declarar uma variavel global dentro desta funcao usando 'global $total';

    return $km * 0.6;
}
//echo kmMilhas(100);

function percorre($km)
{
    static $total; //só irá existir no contexto dessa funcao e retem seu valor entre uma chamada e outra
    $total += $km;
    print "percorreu mais $km de $total <br/>";
}
/*
percorre(100);
percorre(100);
percorre(100);
*/

/*
function incrementa($variavel, $valor)
{
    $variavel += $valor;
}
$teste = 100;
incrementa($teste, 20);
*/
//var_dump($teste);
//perceba no exemplo acima que a variavel $teste não sofreu alteracao

function incrementa(&$variavel, $valor)
{
    $variavel += $valor;
}
$teste = 100;
incrementa($teste, 20);
//var_dump($teste);
//ao usar o & na frente da variavel, ela passa a ser passada por referencia e sofre alteracao


//$lista = ['a', 'c', 'b'];
//sort($lista);
//var_dump($lista);


//Funcao anônima

$remove_acento = function ($str) {
    return str_replace(
        ['á', 'é', 'í', 'ó', 'ú'],
        ['a', 'e', 'i', 'o', 'u'],
        $str
    );
};
var_dump($remove_acento('bábébíbóbú'));

//a funcao anônima pode ser passada como parâmatro para outra funcao:
function teste($palavra, $funcao)
{
    $palavra = $funcao($palavra);
    return strtoupper($palavra);
}
var_dump(teste('bábébíbóbú', $remove_acento));
