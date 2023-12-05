<?php

namespace ProjetoBarbearia\Controllers;

use ProjetoBarbearia\Core\Controller;

class ErroController extends Controller{
    public function erro404(){
        $this->view('404');
        }
}