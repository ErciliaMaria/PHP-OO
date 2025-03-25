<?php

declare(strict_types=1);
//para garantir que pode aceitar valores nulos usa o ponto de interrogação(?string $label)
//outra forma é $label=null e então não é obrigatório passar o segundo parâmetro
function create_link(string $action, string $label=null): string
{
    $label = $label ?? 'Clique aqui';
    return "<a href='$action'>$label<a/>";
}
print create_link('delete.php');