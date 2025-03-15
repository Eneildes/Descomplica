<?php
  abstract class Model {

    private static ?PDO $conexao = null;

    //Garantir que a função 'abrirConexao()' seja chamada antes da criação de um objeto que extenda as caracteristicas e comportamentos de Model.
    public function __construct(PDO $conexao){}

    public static final function abrirConexao():PDO{
        if(Model::$conexao != null){
            return Model::$conexao;
        }
        Model::$conexao = new PDO("pgsql: host=localhost; port=5432; dbname=descomplica; password=mqrlg; user=postgres");
        return Model::$conexao;
    }

    
    public abstract function listarTodos();
    public abstract function selecionarPorId($id);
    public abstract function deletarPorId($id);
    public abstract function atualizar($obj);
    public abstract function cadastrar($obj):bool;
  }
?>