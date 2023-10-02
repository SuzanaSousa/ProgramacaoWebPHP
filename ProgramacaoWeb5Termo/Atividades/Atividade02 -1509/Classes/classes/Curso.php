<?php
class Curso {
    private int $id;
    private string $dataCadastro;
    private string $nome;
    private string $descricao;
    private string $imagem;
  /*   private string $acao; */
 
  /*   public function __construct($id, $dataCadastro, $nome, $descricao, $imagem) {
        $this->id = $id;
        $this->dataCadastro = $dataCadastro;
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->imagem = $imagem;
       /*  $this->acao = $acao;  
    } */
     
    public function getId() : int
    {
         return $this->id;
    }
 
    public function setId(int $id) : void
    {
         $this->id = $id;
    }
     public function getDataCadastro() : string
    {
        return $this->dataCadastro;
    }

    public function setDataCadastro(string $dataCadastro) : void
    {
        $this->dataCadastro = $dataCadastro;
    }
    public function getNome() :string
    {
        return $this->nome;
    }

    public function setNome( string $nome) : void
    {
        $this->nome = $nome;
    }
    public function getDescricao() : string
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao) : void
    {
        $this->descricao = $descricao;
    }
    public function getImagem() : string
    {
        return $this->imagem;
    }

    public function setImagem(string $imagem) : void
    {
        $this->imagem = $imagem;
    }
   /*  public function getAcao() : string
    {
        return $this->acao;
    }

    public function setAcao(string $acao) : void
    {
        $this->acao = $acao;
    } */
    
   
}
?>