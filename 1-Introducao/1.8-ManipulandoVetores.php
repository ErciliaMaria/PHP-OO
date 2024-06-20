<?php
//maneira mais velha de declarar array
//$cores = array('vermelho', 'azul', 'verde', 'amarelo', 'roxo', 'preto', 'branco', 'cinza', 'rosa', 'laranja');
//var_dump($cores);

//maneira mais nova:
$cores = ['vermelho', 'azul', 'verde'];
//var_dump($cores);

//para acrescentar elementos a um novo vetor basta:
$cores = [];

$cores[] = 'vermelho';
$cores[] = 'branco';
$cores[] = 'azul';
//var_dump($cores);

//para indicar a posição do vetor basta:
$cores2 = [];

$cores2[3] = 'vermelho';
$cores2[1] = 'branco';
$cores2[2] = 'azul';
//var_dump($cores2[1]); //vai imprimir branco


//outro exemplo prático:
$pessoa = [];

$pessoa['nome'] = 'Ercília';
$pessoa['sobrenome'] = 'Maria';
$pessoa['nascimento'] = '1991-02-15';
$pessoa['endereco'] = 'Av. Santos Dumont';
//var_dump($pessoa);
//var_dump($pessoa['nascimento']);

//para percorrer esse vetor usando foreach:

foreach ($pessoa as $informacao) {
    //print $informacao . '<br>';
}

//caso queira exibir a chave e valor:
foreach ($pessoa as $chave => $informacao) {
   // print $chave . ': ' . $informacao . '<br>';
}

//outro exemplo porém com um formato diferente de vetor(multidimensional):
    $carros = [
        'palio' => [
            'cor' => 'azul',
            'ano' => 2000,
            'marca' => 'fiat'
        ],
        'corsa' => [
            'cor' => 'vermelho',
            'ano' => 2001,
            'marca' => 'chevrolet'
        ]
        ];
//print $carros['palio']['cor'];

//para percorrer esse vetor com foreach:
    foreach ($carros as $modelo => $informacoes) {
        print "<b>$modelo </b> <br>";
        foreach ($informacoes as $chave => $valor) {
            print "$chave  :  $valor <br> ";
        } 
    };

//para add novo elemento ao vetor:
$cores3 = ['vermelho', 'azul', 'verde'];
$cores3[] = 'rosa';
print '<br>';
//var_dump($cores3);

//funcao que adiciona tbm um novo elemento ao final do vetor:
array_push($cores3, 'preto');
//var_dump($cores3);

//funcao que add um novo elemento no final do vetor:
array_push($cores3, 'ciano');
//var_dump($cores3);

//funcao que add no inicio
array_unshift($cores3, 'escarlate');
array_shift($cores3);//remove o primeiro elemento e saiu a cor escarlate
array_pop($cores3);//remove o último elemento e saiu a cor ciano
array_reverse($cores3);//inverte a ordem dos elementos
//var_dump($cores3);
$resultado = array_merge($cores3, ['branco', 'preto']);//junta dois vetores
//var_dump($resultado);

//Funções de ordenação:
$carros = [];
$carros[10001] = 'Palio 2002';
$carros[10556] = 'Corsa 2003';
$carros[10567] = 'Celta 2005';
$carros[10846] = 'Uno 1999';
//sort($carros);//ordena os elementos do vetor 
//asort($carros);//ordena os valores do vetor
//ksort($carros);//ordena as chaves do vetor
//var_dump($carros);
echo '<pre>';

//var_dump(array_keys($carros));//retorna as chaves do vetor
//var_dump(array_values($carros));//retorna os valores do vetor

//var_dump(count($carros));//retorna a quantidade de elementos do vetor
//var_dump( in_array('Celta 2005', $carros));//retorna true se o valor estiver no vetor

$data = '2013-10-20';

$partes = explode('-', $data);//transforma uma string em um vetor
print $partes[1] . '<br>';

$vetor = ['2013', '10', '20'];
print implode('/', $vetor);//transforma um vetor em uma string