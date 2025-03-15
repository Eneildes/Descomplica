<?php
  require_once("valueObjects/Orgao.php");
  class OrgaoModel extends Model{

    public function listarTodos():array{
      $listaDeOrgaos = array();

      try{
        $stmt = Model::abrirConexao()->prepare("SELECT*FROM orgao");
        $stmt->execute();
        while($row = $stmt->fetch()){
          $orgao = new Orgao();
          $orgao->setId($row["id_orgao"]);
          $orgao->setNome($row["nome"]);
          $orgao->setCidade($row["cidade"]);
          $orgao->setBairro($row["bairro"]);
          $orgao->setLogradouro($row["logradouro"]);
          $listaDeOrgaos[] = $orgao;
        }
      }catch(Exception $e){
        return array();
      }
      return $listaDeOrgaos;
    }
    public function selecionarPorId($id){
      $orgao = new Orgao();

      try{
        $stmt = Model::abrirConexao()->prepare("SELECT*FROM orgao where id_orgao = ?");
        $stmt->bindValue(1,$id);
        $stmt->execute();
        while($row = $stmt->fetch()){
          $orgao = new Orgao();
          $orgao->setId($row["id_orgao"]);
          $orgao->setNome($row["nome"]);
          $orgao->setCidade($row["cidade"]);
          $orgao->setBairro($row["bairro"]);
          $orgao->setLogradouro($row["logradouro"]);
        }
      }catch(Exception $e){
        return new Orgao();
      }
      return $orgao;
    }
    public function deletarPorId($id){

    }
    public function atualizar($obj):bool{
      try{
        $stmt = Model::abrirConexao()->prepare("UPDATE orgao SET nome=?,cidade=?,bairro=?,logradouro=? where id_orgao = ?");
        //Associa os valores das caracteristicas objeto Orgao na string SQL 
        $stmt->bindValue(1,$obj->getNome());
        $stmt->bindValue(2,$obj->getCidade());
        $stmt->bindValue(3,$obj->getBairro());
        $stmt->bindValue(4,$obj->getLogradouro());
        $stmt->bindValue(5,$obj->getId());
        //Executa a string SQL
        $stmt->execute();
      }catch(Exception $e){
        //Retorna false caso algum erro ocorra no processo acima 
        return false;
      }
      return true;
      
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