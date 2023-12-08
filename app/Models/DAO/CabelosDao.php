<?php
namespace ProjetoBarbearia\Models\DAO;

use ProjetoBarbearia\Core\DAO;

use ProjetoBarbearia\Models\Entities\Cabelo;

class CabelosDAO extends DAO{
   
  protected static string $tabela = "cabelo";
  protected static string $classe = Cabelo::class;


}
