<?php

namespace ProjetoBarbearia\Controllers;

use ProjetoBarbearia\Core\Controller;


class HomeController extends Controller{

    public function index(){
      $dados = ['titulo' => 'Atividades IFBA'];
      $this->view('inicial', $dados);
    }
    
}