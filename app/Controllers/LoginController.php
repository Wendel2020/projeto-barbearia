<?php

namespace ProjetoBarbearia\Controllers;

use ProjetoBarbearia\Core\Controller;

class LoginController extends Controller{
    public function login(){

        $this->view('login',['pagina'=> 'Pagina de Login']);
    }
    public function criarconta(){
        $this->view('conta');
    }
}