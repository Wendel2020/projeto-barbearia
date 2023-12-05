<?php

namespace ProjetoBarbearia\Core;

abstract class Controller {
    protected function view($arquivo, $dados=[]){
       extract($dados);
        require PASTA_VIEW."{$arquivo}.view.php";
    
      }
}