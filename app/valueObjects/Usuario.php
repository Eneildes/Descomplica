<?php
    class Usuario{
    
        private int $id;
        private string $nome;
        private string $CPF;
        private string nascimento;
        private string $regime;
        private string $telefone1;
        private string $telefone2;
        private string $cidade;
        private string $bairro;
        private string $logradouro;
        private int $numero;
        private string $formacao;
        private string $situacao;
        private string $instituicao;
        public function getId():int{
            return $this->id;
        }
        public function getNome():string{
            return $this->nome;
        }
        public function getCPF():string{
            return $this->CPF;
        }
        public function getNascimento():string{
            return $this->nascimento;
        }
        public function getRegime():string{
            return $this->regime;
        } 
        public function getTelefone1():string{
            return $this->telefone1;
        }
        public function getTelefone2():string{
            return $this->telefone2;
        }
        public function getCidade():string{
            return $this->cidade;
        }
        public function getBairro():string{
            return $this->bairro;
        }
        public function getLogradouro():string{
            return $this->logradouro;
        }
        public function getNumero():int{
            return $this->numero;
        }
        
        public function getFormacao():string{
            return $this->formacao;
        }
        public function getSituacao():string{
            return $this->situacao;
        }
        
        public function getInstituicao():string{
            return $this->instituicao;
        }
        public function setId(int $id):void{
            $this->id = $id;
        }
        public function setNome(string $nome):void{
            $this->nome = $nome;
        }
        public function setCPF(string $cpf):void{
            $this->CPF = $cpf;
        }
        public function setNascimento(string $nascimento):void{
            $this->nascimento = $nascimento;
        }
        public function setRegime(string $regime):void{
            $this->regime = $regime;
        }
        public function setTelefone1(string $telefone1):void{
            $this->telefone1 = $telefone1;
        }
        public function setTelefone2(string $telefone2):void{
            $this->telefone2 = $telefone2;
        }
        public function setCidade(string $cidade):void{
            $this->cidade = $cidade;
        }
        public function setBairro(string $bairro):void{
            $this->bairro = $bairro;
        }
        public function setLogradouro(string $logradouro):void{
            $this->logradouro = $logradouro;
        }
        public function setNumero(string $numero):void{
            $this->numero = $numero;
        }
        
        public function setFormacao(string $formacao):void{
            $this->formacao = $formacao;
        }
        public function setSituacao(string $situacao):void{
            $this->situacao = $situacao;
        }
        public function setInstituicao(string $instituicao):void{
            $this->instituicao = $instituicao;
        }
    }
?>