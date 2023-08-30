<?php 
    class Fabricante{
        private string $nome;

        public function _construct($nome){
            $this->nome = $nome;
        }
        public function getNome(){
            return $this->nome;
        }
        public function setNome(string $nome){
            return $this->nome;
        }

    }
    class Pruduto{
        
        private int $codigo;
        private string $descricao;
        private float $preco;
        private Fabricante $fabricante;

            
        public function _construct(int $codigo, string $descricao, float $preco, Fabricante $fabricante){
                
            $this->codigo = $codigo;
            $this->descricao = $descricao;
            $this->preco = $preco;
            $this->fabricante = $fabricante;
        }
        public function getDescricao(){
            return $this->descricao;
        }
        public function getPreco(){
            return $this->preco;

        }
        public function setDescricao(string $descricao){
            $this->descricao = $descricao;

        }
        public function setPreco(float $preco){
            $this->preco = $preco;

        }
        public function getFabricante(){
            return $this->fabricante->getNome();
        }
            


        public function getProduto()
        {
            return " O produto {$this->descricao} custa {$this->preco} reias." ;
            

        }
    }
        $fabi = new Fabricante("LBTY");
        $prod1 = new Pruduto();
        //$prod2 = new Produto();



        $prod1->setDescricao(2);
        $prod1->setDescricao("Mause black");
        $prod1->setPreco(590.00);

        $prod2->setDescricao(2);
        $prod2->setDescricao("Teclado");
        $prod2->setDescricao(1600.00);

        echo $prod1->getProduto();
        echo $prod2->getProduto();

        echo "<br>";
        echo " O produto {$prod1}"
?>  