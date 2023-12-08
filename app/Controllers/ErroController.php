<?php

namespace ProjetoBarbearia\Controllers;

use ProjetoBarbearia\Core\Controller;

class ErroController extends Controller{
    public function erro($tipo){
        switch ($tipo) {
            case "404":
                $this->view('404');
                break;  
            case 'controller':
                $this->view('erro', ['msg' => 'Controller não existe']);
                break;
            case 'metodo':
                $this->view('erro', ['msg' => 'O metodo não existe não existe']);
                break;
            case 'naopermitido':
                $this->view('erro', ['msg' => 'A rota não é permitida']);
                break;
            
        }
    }
}