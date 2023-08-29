<?php 
class Contador{
    private $valor;
    

    function setValor(int $valor){
        $this->valor = $valor;

    }
    
    public function __construct( int $PrimeiroValor = 0) {
        $this->valor = $PrimeiroValor;
    }
    public function Zerar ( ){
        
         return $this->valor = 0;
        
        
    }
    public function Incrementar(){
        
         $this->valor ++;
        
    }
    function getValor(){
        return $this->valor;
    }

}
echo" ------------Contador------------------". "<br>"."<br>";
$contador = new Contador(10);
echo "Valor atual do contador : " . $contador->getValor() . "<br>"."<br>";

$contador->incrementar();
echo "Valor após incrementar: " . $contador->getValor() . "<br>"."<br>";

$contador->Zerar();
echo "Valor após zerar: " . $contador->getValor() . "<br>";
?>