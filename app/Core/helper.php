<?php

function css (string $arquivo):string{
    return URL_BASE."public/css/{$arquivo}.css";
}

function imagens(string $arquivo):string {
    return URL_BASE."public/img-index/{$arquivo}.png";
}

function componente (string $componente){
    require PASTA_VIEW."componentes/{$componente}.view.php";

}
function linkrota($rota = ""){
    return URL_BASE . "{$rota}";
}
 function redireciona($rota = ""){
    header("location: ", linkrota($rota));
    die;
}
function flash($mensagem = "",$tipo = "sucesso"){
if (!empty($mensagem)) {
    $_SESSION['__mensagem'] = [$mensagem, $tipo];
}else if (empty($mensagem) && isset($_SESSION['__mensagem'])) {
    
    [$mensagem, $tipo] = $_SESSION['__mensagem'];
    $retorno  = "";
    $retorno .= "<div class ='mensagem {$tipo}'>";
    $retorno .= $mensagem;
    $retorno .= "</div>";
    unset($_SESSION['__mensagem']);
    return $retorno;
    
}
else {
    return "";
}
}