<?php

$codigo = 2;

$status = match($codigo) {
    1 => 'Incicializado',
    2 => 'Em atendimento',
    3 => 'Finalizado',
    default => 'Status desconhecido'
};
echo $status;