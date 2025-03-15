<?php
    class OrgaoController{
        public function mostrarCadastro(){
            require_once("./view/pags/cad_orgao.php");
        }
        public function mostrarListagem(){
            require_once("./view/pags/lista_orgao.php");
        }
        public function cadastrar(){
            $orgaoJson = json_decode(file_get_contents("php://input"));
            require_once("model/Model.php");
            require_once("model/OrgaoModel.php");
            require_once("valueObjects/Orgao.php");

            $orgaoModel = new OrgaoModel(Model::abrirConexao());
            $orgao = new Orgao();
            $orgao->setNome($orgaoJson->nome);
            $orgao->setCidade($orgaoJson->cidade);
            $orgao->setBairro($orgaoJson->bairro);
            $orgao->setLogradouro($orgaoJson->logradouro);

            echo $orgaoModel->cadastrar($orgao)?"Cadastrado com sucesso":"Ocorreu um erro no cadastro";
        }
    }
?>