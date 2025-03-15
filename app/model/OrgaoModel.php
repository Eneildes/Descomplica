<?php
  class OrgaoModel extends Model{


    public function listarTodos(){

    }
    public function selecionarPorId($id){

    }
    public function deletarPorId($id){

    }
    public function atualizar($obj){

    }
    public function cadastrar($obj):bool{
      try{
        $stmt = Model::abrirConexao()->prepare("INSERT INTO orgao (nome,cidade,bairro,logradouro) VALUES (?,?,?,?)");
        //Associa os valores das caracteristicas objeto Orgao na string SQL 
        $stmt->bindValue(1,$obj->getNome());
        $stmt->bindValue(2,$obj->getCidade());
        $stmt->bindValue(3,$obj->getBairro());
        $stmt->bindValue(4,$obj->getLogradouro());
        //Executa a string SQL
        $stmt->execute();
      }catch(Exception $e){
        //Retorna false caso algum erro ocorra no processo acima 
        return false;
      }
      return true;
    }
  }
?>