<?php 

class Invoice{

    private $numeroItem;
    private $descricao;
    private $quantidade;
    private $preco;

    public function __construct( int $numeroItem , string $descricao, int $quantidade, float $preco )
    {
        $this->numeroItem = $numeroItem;
        $this->descricao = $descricao;
        $this->setQuantidade($quantidade);
        $this->setPreco($preco);
        

    }
    public function getNumeroItem(){
        return $this->numeroItem;
    }
    public function getDescricao(){
        return $this->descricao;
    }
    public function getQantidade(){
        return $this->quantidade; 
    }

    public function getPreco(){
        return $this -> preco;
    }
    public function setDescricao(string $descricao){
        $this->descricao = $descricao;

    }
    public function setNumeroItem(string $numeroItem){
        $this->numeroItem= $numeroItem;

    }
    public function setQuantidade(string $quantidade){
        if (($quantidade < 0) ){
           $this->quantidade = 0 ;
        }else{
            $this->quantidade = $quantidade;

        }
        

    }
    public function setPreco(float $preco){
        if(($preco < 0) ){
           $this->preco = 0.0;
        }else{
            $this->preco = $preco;
        }
       

    }
    public function getInvoiceAmount(){
       
        return $this->quantidade  * $this->preco;

    }
    
    public function  verDados(){

        echo "Número do item :  {$this->numeroItem}. Descrição do produto: {$this->descricao }. Quantidade comprada do produto: {$this->quantidade }. Preço do produto: {$this->preco}" ."<br>" ."<br>";
        
    }


  
}
echo" ------------- Primeiro Produto ------------- ." ."<br>" ."<br>";
$l1 = new Invoice(1 ,"Teclado", 4,200.00);
$l1->verDados();
echo "O valor da fatura foi R$:" .$l1->getInvoiceAmount() ."<br>" ."<br>";
echo" ------------- Segundo Produto com preço negativo ------------- ." ."<br>" ."<br>";
$l2 = new Invoice(1 ,"Mause", 4,-2);
$l2->verDados();
echo "O valor da fatura foi R$:" .$l2->getInvoiceAmount() ."<br>" ."<br>";

echo" ------------- Teceiro Produto com quantidade negativa ------------- ." ."<br>" ."<br>";
$l3 = new Invoice(1 ,"Carregador", -1 ,300);
$l3->verDados();
echo "O valor da fatura foi R$:" .$l3->getInvoiceAmount() ."<br>" ."<br>";

?>
