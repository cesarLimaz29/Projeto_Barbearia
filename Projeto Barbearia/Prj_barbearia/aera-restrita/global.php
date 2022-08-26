<?php

spl_autoload_register('carregarClasse');

function carregarClasse($Cliente)
{
    if (file_exists( $Cliente . '.php')) {
        require_once $Cliente . '.php';
    }
}