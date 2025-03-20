<?php
require_once("model/Model.php");
require_once("model/UsuarioModel.php");
require_once("valueObjects/usuario.php");
class UsuarioController{
    public function mostrarCadastro(){
        require_once("./view/pags/cad_usuario.php");
    }
    public function cadastrar(){
        $usuarioJson = json_decode(file_get_contents("php://input"));
        $usuarioModel = new UsuarioModel (Model::abrirConexao());
        $usuario = new Usuario();
        $usuario->setCPF($usuarioJson->Cpf);  
        $usuario->setNascimento($usuarioJson->nascimento);
        $usuario->setRegime($usuarioJson->regime);
        $usuario->setTelefone1($usuarioJson->telefone1);
        $usuario->setTelefone2($usuarioJson->telefone2);
        $usuario->setCidade($usuarioJson->cidade);
        $usuario->setBairro($usuarioJson->bairro);
        $usuario->setLogradouro($usuarioJson->logradouro);
        $usuario->setNumero($usuarioJson->numero);
        $usuario->setformacao($usuarioJson->formação);
        $usuario->setSituacao($usuarioJson->situação);
        $usuario->setInstituicao($usuarioJson->instituição);

        echo $usuarioModel->cadastrar($usuario) ? "Cadastrado com sucesso" : "Ocorreu um erro no cadastro";
    }
    public function atualizar(){
        $usuarioJson =json_decode(file_get_contents("php://input"));
        $usuarioModel = new UsuarioModel(Model::abrirconexao());
        $usuario = new Usuario();
        $usuario->setCPF($usuarioJson->Cpf);
        $usuario->setNascimento($usuarioJson->nascimento);
        $usuario->setRegime($usuarioJson->regime);
        $usuario->setTelefone1($usuarioJson->telefone1);
        $usuario->setTelefone2($usuarioJson->telefone2);
        $usuario->setCidade($usuarioJson->cidade);
        $usuario->setBairro($usuarioJson->bairro);
        $usuario->setLogradouro($usuarioJson->logradouro);
        $usuario->setNumero($usuarioJson->numero);
        $usuario->setFormacao($usuarioJson->formação);
        $usuario->setSituacao($usuarioJson->situação);
        $usuario->setInstituicao($usuarioJson->instituição);
        $usuario->setId($usuarioJson->id);

        echo $usuarioModel->atualizar($usuario) ? "Atualizado com sucesso" : "Ocorreu um erro na atualização";
    }
    public function listarUsuarios() {
        $usuarioModel = new UsuarioModel(Model::abrirConexao());
        $usuarios = $usuarioModel->listarTodos();
        require_once("view/pags/lista_usuario.php");
    }
    public function mostraModificar(){
        $usuarioModel = new UsuarioModel(Model::abrirConexao());
        $usuario = $usuarioModel->selecionarPorId(isset($_GET["id"])?$_GET["id"]:-1);
        require_once("view/pags/mod_usuario.php");
    }
}
    
    

