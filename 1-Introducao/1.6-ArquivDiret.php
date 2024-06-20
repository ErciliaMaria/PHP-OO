<?php
//leitura de arquivo
/*$handler = fopen( 'arquivo.txt', 'r');

no exemplo abaixo o benefício é que ela não irá carregar todo o arquivo de uma vez só, o que pode ser útil para arquivos muito grandes
while ( !feof($handler) )
{
    print fgets($handler, 4096);
    print '<br>';
}
fclose($handler);
*/

//escrita de arquivo

$newHandler = fopen('arquivo2.txt', 'w');
fwrite($newHandler, 'linha 1'. PHP_EOL);
fwrite($newHandler, 'linha 2' .PHP_EOL);
fwrite($newHandler, 'linha 3' .PHP_EOL);
fclose($newHandler);

//para também leitura de arquivo
//print file_get_contents('arquivo3.txt');

//para escrever um arquivo em disco:
//file_put_contents('arquivo4.txt', "a\nb\nc");//esse comando cria o arquivo4.txt e insere os dados

//para inserir dados no arquivo preexistente
$arquivo = file('arquivo5.txt');
foreach($arquivo as $linha)
{
    print $linha . '<br>';
}