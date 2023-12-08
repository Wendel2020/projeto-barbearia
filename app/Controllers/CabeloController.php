<?php

namespace ProjetoBarbearia\Controllers;

use ProjetoBarbearia\Core\Controller;
use ProjetoBarbearia\Models\DAO\CabelosDAO;
class CabeloController extends Controller{
     public function mostrar (){
        $dados = CabelosDAO ::getAll();
        $this->view('cabelo', $dados);

     }

}