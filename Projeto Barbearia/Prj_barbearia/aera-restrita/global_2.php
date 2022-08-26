<?php

spl_autoload_register('carregarClasse');

function carregarClasse($servico)
{
    if (file_exists($servico . '.php')) {
        require_once $servico . '.php';
    }
}