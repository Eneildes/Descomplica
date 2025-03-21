<?php
require_once("model/Model.php");
require_once("model/OrgaoModel.php");
require_once("valueObjects/Orgao.php");
class OrgaoController{
    public function mostrarCadastro()
    {
        require_once("./view/pags/cad_orgao.php");
    }
    public function cadastrar()
    {
        $orgaoJson = json_decode(file_get_contents("php://input"));
        $orgaoModel = new OrgaoModel(Model::abrirConexao());
        $orgao = new Orgao();
        $orgao->setNome($orgaoJson->nome);
        $orgao->setCidade($orgaoJson->cidade);
        $orgao->setBairro($orgaoJson->bairro);
        $orgao->setLogradouro($orgaoJson->logradouro);

        echo $orgaoModel->cadastrar($orgao) ? "Cadastrado com sucesso" : "Ocorreu um erro no cadastro";
    }
    public function atualizar(){
        $orgaoJson = json_decode(file_get_contents("php://input"));
        $orgaoModel = new OrgaoModel(Model::abrirConexao());
        $orgao = new Orgao();
        $orgao->setNome($orgaoJson->nome);
        $orgao->setCidade($orgaoJson->cidade);
        $orgao->setBairro($orgaoJson->bairro);
        $orgao->setLogradouro($orgaoJson->logradouro);
        $orgao->setId($orgaoJson->id);
        
        echo $orgaoModel->atualizar($orgao) ? "Atualizado com sucesso" : "Ocorreu um erro na atualização";
    }
    public function listarOrgaos() {
        $orgaoModel = new OrgaoModel(Model::abrirConexao());
        $orgaos = $orgaoModel->listarTodos();
        require_once("view/pags/lista_orgao.php");
    }
    public function mostraModificar(){
        $orgaoModel = new OrgaoModel(Model::abrirConexao());
        $orgao = $orgaoModel->selecionarPorId(isset($_GET["id"])?$_GET["id"]:-1);
        require_once("view/pags/mod_orgao.php");
    }
}
