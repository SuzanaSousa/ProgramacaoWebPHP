<?php

class Vendedor {
    private int $id;
    private string $nome;
    private string $email;
    private string $telefone;

    public function getId() : int
    {
        return $this->id;
    }

    public function setId(int $id) : void
    {
        $this->id = $id;
    }
    
    public function getNome() : string
    {
        return $this->nome;
    }

    public function setNome(string $nome) : void
    {
        $this->nome = $nome;
    }
    
    public function getEmail() : string
    {
        return $this->email;
    }

    public function setEmail(string $email) : void
    {
        $this->email = $email;
    }
    
    public function getTelefone() : string
    {
        return $this->telefone;
    }

    public function setTelefone(string $telefone) : void
    {
        $this->telefone = $telefone;
    }

}