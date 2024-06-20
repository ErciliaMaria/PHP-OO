<?php

declare(strict_type=1);

function create_link(string $action, string $label): string
{
    return "<a href='$action'>$label<a/>";
}
print create_link('delete.php','Excluir');