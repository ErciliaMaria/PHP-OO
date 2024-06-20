<?php

declare(strict_types=1);

function create_link(string $action, string $label=null): string
{
    $label = $label ?? 'Clique aqui';
    return "<a href = '$action'>$label</a>";
}

print create_link('delete.php');

//inducao ao tipo objeto em geral

function aplica_configuracao(object $configuracoes)
{
    date_default_timezone_set($configuracoes->timezone);
    $_SESSION['language'] = $configuracoes->language;

    print "Aplicou configurações: {$configuracoes->timezone} e idioma {$configuracoes->language}";
}
$config = new stdClass;
$config->timezone = 'America/Fortaleza';
$config->language = "pt_BR";

//aplica_configuracao($config);
aplica_configuracao((object) parse_ini_file('config.ini'));//convertendo vetor para objeto