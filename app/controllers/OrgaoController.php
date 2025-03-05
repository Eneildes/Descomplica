<?php
    class OrgaoController{
        public function mostrarCadastro(){
            require_once("./view/pags/cad_orgao.php");
        }
        public function mostrarListagem(){
            require_once("./view/pags/lista_orgao.php");
        }
    }
?>