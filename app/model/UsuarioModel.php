<?php
  require_once("valueObjects/Usuario.php");
  class UsuarioModel extends Model{

    public function listarTodos():array{
      $listaDeUsuarios = array();

      try{
        $stmt = Model::abrirConexao()->prepare("SELECT*FROM usuarios");
        $stmt->execute();
        while($row = $stmt->fetch()){
          $usuario = new Usuario();
          $usuario->setId($row["id_usuario"]);
          $usuario->setCpf($row["Cpf"]);
          $usuario->setNascimento($row["nascimento"]);
          $usuario->setRegime($row["regime"]);
          $usuario->setTelefone1($row["telefone1"]);
          $usuario->setTelefone2($row["telefone2"]);
          $usuario->setCidade($row["cidade"]);
          $usuario->setBairro($row["bairro"]);
          $usuario->setLogradouro($row["logradouro"]);
          $usuario->setNumero($row["numero"]);
          $usuario->setFormação($row["formação"]);
          $usuario->setSituação($row["situação"]);
          $usuario->setInstituição($row["instituição"]);

          $listaDeUsuario[] = $usuario;
        }
      }catch(Exception $e){
        return array();
      }
      return $listaDeUsuario;
    }
    public function selecionarPorId($id){
      $usuario = new Usuario();

      try{
        $stmt = Model::abrirConexao()->prepare("SELECT*FROM usuarios where id_usuario = ?");
        $stmt->bindValue(1,$id);
        $stmt->execute();
        while($row = $stmt->fetch()){
            $usuario = new Usuario();
            $usuario->setId($row["id_usuario"]);
            $usuario->setNome($row["nome"]);
            $usuario->setCpf($row["Cpf"]);
            $usuario->setNascimento($row["nascimento"]);
            $usuario->setRegime($row["regime"]);
            $usuario->setTelefone1($row["telefone1"]);
            $usuario->setTelefone2($row["telefone2"]);
            $usuario->setCidade($row["cidade"]);
            $usuario->setBairro($row["bairro"]);
            $usuario->setLogradouro($row["logradouro"]);
            $usuario->setNumero($row["numero"]);
            $usuario->setFormação($row["formação"]);
            $usuario->setSituação($row["situação"]);
            $usuario->setInstituição($row["instituição"]);
        }
      }catch(Exception $e){
        return new Usuario();
      }
      return $usuario;
    }
    public function deletarPorId($id){

    }
    public function atualizar($obj):bool{
      try{
        $stmt = Model::abrirConexao()->prepare("UPDATE usuarios SET nome=?,Cpf=?,ascimento=?,regime=?,telefone1=?,telefone2=?
        cidade=?,bairro=?,logradouro=?,numero=?,formacao=?,situacao=?,instituição  where id_usuario = ?");
        //Associa os valores das caracteristicas objeto usuario na string SQL <th>nome</th>
        $stmt->bindValue(1,$obj->getNome());
        $stmt->bindValue(2,$obj->getCPF());
        $stmt->bindValue(3,$obj->getNascimento());
        $stmt->bindValue(4,$obj->getRegime());
        $stmt->bindValue(5,$obj->getTelefone1()); 
        $stmt->bindValue(6,$obj->getTelefone2());
        $stmt->bindValue(7,$obj->getCidade());
        $stmt->bindValue(8,$obj->getBairro());
        $stmt->bindValue(9,$obj->getLogradouro()); 
        $stmt->bindValue(10,$obj->getNumero());
        $stmt->bindValue(11,$obj->getformação());
        $stmt->bindValue(12,$obj->getSituação());
        $stmt->bindValue(13,$obj->getInstituição());            
        $stmt->bindValue(14,$obj->getId());
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
        $stmt = Model::abrirConexao()->prepare("INSERT INTO usuarios (nome,Cpf,ascimento,regime,telefone1,telefone2,cidade,bairro,logradouro,numero,formacao,situacao,instituição) VALUES (?,?,?,?)");
        //Associa os valores das caracteristicas objeto Orgao na string SQL 
        $stmt->bindValue(1,$obj->getNome());
        $stmt->bindValue(2,$obj->getCPF());
        $stmt->bindValue(3,$obj->getNascimento());
        $stmt->bindValue(4,$obj->getRegime());
        $stmt->bindValue(5,$obj->getTelefone1()); 
        $stmt->bindValue(6,$obj->getTelefone2());
        $stmt->bindValue(7,$obj->getCidade());
        $stmt->bindValue(8,$obj->getBairro());
        $stmt->bindValue(9,$obj->getLogradouro()); 
        $stmt->bindValue(10,$obj->getNumero());
        $stmt->bindValue(11,$obj->getformação());
        $stmt->bindValue(12,$obj->getSituação());
        $stmt->bindValue(13,$obj->getInstituição());  
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