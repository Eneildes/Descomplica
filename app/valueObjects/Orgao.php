<?php
  class Orgao{
    
    private int $id;
    private string $nome;
    private string $cidade;
    private string $bairro;
    private string $logradouro;

    public function getId():int{
        return $this->id;
    }
    public function getCidade():string{
        return $this->cidade;
    }
    public function getNome():string{
        return $this->nome;
    }
    public function getBairro():string{
        return $this->bairro;
    }

    public function getLogradouro():string{
        return $this->logradouro;
    }

    public function setId(int $id):void{
        $this->id = $id;
    }
    public function setNome(string $nome):void{
        $this->nome = $nome;
    }
    public function setBairro(string $bairro):void{
        $this->bairro = $bairro;
    }

    public function setLogradouro(string $logradouro):void{
        $this->logradouro = $logradouro;
    }

    public function setCidade(string $cidade):void{
        $this->cidade = $cidade;
    }
  }
?>