<?php

namespace ProjetoBarbearia\Controllers;

use ProjetoBarbearia\Core\Controller;
use ProjetoBarbearia\Models\DAO\CabelosDAO;
use ProjetoBarbearia\Models\Entities\Cabelo;

class CabeloController extends Controller{
 
     public function mostrar (){
       
        $this->view('cabelo');
     }

     public function cadastro(){
      $this->view('cadastrarCabelo');
     }

    public function cadastrarcabelo(){
      
      $cabelo = new Cabelo($this->post());
      

       if(CabelosDAO::inserir($cabelo)){
         flash("Corte {$cabelo->nome} cadastrado com sucesso!");
         redireciona('cabelo');
        }

    }
        
    
}