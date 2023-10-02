<?php

class Veiculo {
    private int $id;
    private string $marca;
    private string $modelo;
    private string $cor;  
    private int $ano_fabricacao;  
    private int $ano_modelo;
    private string $combustivel;
    private float $preco;
    private string $detalhes;
    private string $foto;

    public function getId() : int
    {
        return $this->id;
    }

    public function setId(int $id) : void
    {
        $this->id = $id;
    }
    
    public function getMarca() : string
    {
        return $this->marca;
    }

    public function setMarca(string $marca) : void
    {
        $this->marca = $marca;
    }
    
    public function getModelo() : string
    {
        return $this->modelo;
    }

    public function setModelo(string $modelo) : void
    {
        $this->modelo = $modelo;
    }
    
    public function getCor() : string
    {
        return $this->cor;
    }

    public function setCor(string $cor) : void
    {
        $this->cor = $cor;
    }
    
    public function getAnoFabric() : int
    {
        return $this->ano_fabricacao;
    }

    public function setAnoFabric(int $ano_fabricacao) : void
    {
        $this->ano_fabricacao = $ano_fabricacao;
    }
    
    public function getAnoModelo() : int
    {
        return $this->ano_modelo;
    }

    public function setAnoModelo(int $ano_modelo) : void
    {
        $this->ano_modelo = $ano_modelo;
    }
    
    public function getCombustivel() : string
    {
        return $this->combustivel;
    }

    public function setCombustivel(string $combustivel) : void
    {
        $this->combustivel = $combustivel;
    }
    
    public function getPreco() : float
    {
        return $this->preco;
    }

    public function setPreco(float $preco) : void
    {
        $this->preco = $preco;
    }
    
    public function getDetalhes() : string
    {
        return $this->detalhes;
    }

    public function setDetalhes(string $detalhes) : void
    {
        $this->detalhes = $detalhes;
    }
    
    public function getFoto() : string
    {
        return $this->foto;
    }

    public function setFoto(string $foto) : void
    {
        $this->foto = $foto;
    }

}