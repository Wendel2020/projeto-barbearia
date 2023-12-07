<?php
declare(strict_types=1);

use ProjetoBarbearia\Core\Router;

require __DIR__ . "/vendor/autoload.php";
require __DIR__. "/app/rotas.php";
require __DIR__. "/app/config.php";

function css (string $arquivo):string{
    return URL_BASE."public/css/{$arquivo}.css";
}

function imagens(string $arquivo):string {
    return URL_BASE."public/img-index/{$arquivo}.png";
}

function componente (string $componente){
    require PASTA_VIEW."componentes/{$componente}.view.php";

}
$url = $_GET['url'] ?? "";


Router::exec($url);
