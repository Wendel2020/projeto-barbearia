<?php

namespace ProjetoBarbearia\Core;

abstract class DAO{

    protected static string $tabela = "";
    protected static string $classe = \stdClass::class;

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

      public static function inserir(Entity $entidade){
        $db = new Database();
        $tabela = static::$tabela;
        
        $sql = "INSERT INTO {$tabela}";

        $propriedades = $entidade->getProps();
        $campos = [];
        $coringas = [];
        $dados = [];

        foreach($propriedades as $propriedade =>$valor){
          if (!is_null($entidade->$propriedade)) {
            array_push($campos,$propriedade);
            array_push($dados,$valor);
            array_push($coringas,'?');
          }
        }
        $campos = implode(',',$campos);
        $coringas = implode(',',$coringas);
       $sql .= " ({$campos})  VALUES ({$coringas})"; 

                  
      
        return $db->execute($sql, $dados);
      }
      
      
      public static function editar ( Entity $entidade){
        $db = new Database;
        $tabela = static::$tabela;
       /* 
        $sql = "UPDATE {$tabela} SET 
                    nome = ?, email = ?, login = ?, senha = ?, tipo =? WHERE id =?";
       */
      $sql = "UPDATE {$tabela} SET";

      $propriedades = $entidade->getProps();
      $dados = [];
      $campos = "";

      foreach ($propriedades as $propriedade => $valor) {
        if($propriedade != 'id' && !is_null($entidade->$propriedade) ){
          $campos .= " {$propriedade} = ?,";
          array_push($dados,$valor);
        }
      }
      $campos = rtrim($campos. ',');
      $sql .= "{$campos} WHERE id = ?";
      array_push($dados,$entidade->id);
       
      
        return $db->execute($sql, $dados);
      }

      
      public static function excluir(Entity $entidade){
        $tabela = static::$tabela;
        $db = new Database;
        $sql = "DELETE FROM {$tabela} WHERE id =?";
        return $db->execute($sql,[$entidade->id]); 
      }


}