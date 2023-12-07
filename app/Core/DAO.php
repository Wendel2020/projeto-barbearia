<?php

namespace ProjetoBarbearia\Core;

abstract class DAO{

    protected static string $tabela = "";
    protected static string $classe = \stdClass::class;

    public abstract static function inserir($entidade);
    public abstract static function editar($entidade);
    
    
    public static function getAll(){

        $tabela = static::$tabela;
        $db = new Database;
        $sql = "SELECT * FROM {$tabela}";
        $db->execute($sql);
        return $db->getAll(static::$classe);
      }

      public static function getById($id){
        $tabela = static::$tabela;
        $db = new Database;
        $sql = "SELECT * FROM {$tabela} WHERE id =?";
        $db->execute($sql, [$id]);
        return $db->get(static::$classe);
      }

      
      public static function excluir($entidade){
        $tabela = static::$tabela;
        $db = new Database;
        $sql = "DELETE FROM {$tabela} WHERE id =?";
        return $db->execute($sql,[$entidade->id]); 
      }


}