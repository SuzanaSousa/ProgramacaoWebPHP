<?php 
   class Ponto2D{
    private int $ponto1;
    private int $ponto2;

    
    public function __construct( int $ponto1, int $ponto2)
    {
        $this->ponto1 = $ponto1;
        $this->ponto2 = $ponto2;
    }
    public  function dfPontoPartida(Ponto2D $ponto3){
        $this->ponto1 = $ponto3 ->getPonto1() ;
        $this->ponto2 = $ponto3 ->getPonto2() ;
        

    }
    public function comparar(Ponto2D $ponto3){
        if (($this->ponto1 === $ponto3)  && 
       ( $this->ponto2 ===  $ponto3)){
         echo "Os pontos são iguais.". "<br>"."<br>";
       }else {
         echo "Os pontos são diferentes."."<br>"."<br>";
        }
        
       

    }
    public function calcularDistancia($pontoNovo){
      
        return sqrt(pow($this->ponto1 - $pontoNovo->getPonto1(),2 )  + pow(
          $this->ponto2 - $pontoNovo->getPonto2(),2));
         
    }
    public function clone(){
        return new Ponto2D($this->ponto1, $this->ponto2);
    }
    public function getPonto1(){
        return $this->ponto1;
    }
    public function getPonto2(){
        return $this->ponto2;
    }
    
    
    public function setPonto1($pontoNovo1) {
        $this->ponto1 = $pontoNovo1;
    }
    
    
    
    public function setPonto2($pontoNovo2) {
        $this->ponto2 = $pontoNovo2;
    }

   }

   $pontoA = new Ponto2D(0,2);
   $pontoB = new Ponto2D(4, 4);
   echo "<br>" ; 
   echo"------------------Inicialização do ponto -------------------"."<br>" ."<br>";
   echo "Ponta A ( {$pontoA->getPonto1()}, {$pontoA->getPonto2()} )"."<br>";
   echo "Ponto B( {$pontoB->getPonto1()}, {$pontoB->getPonto2()} )" ."<br>" ."<br>" ;

   echo"--------------------Ponto a partir de outro ponto-----------------"."<br>" ."<br>";
   $pontoB->dfPontoPartida($pontoA);
   echo "Ponto B após definir com Ponto A: {$pontoB->getPonto1()}, {$pontoB->getPonto2()}<br>";
      
   echo"------------------------------Clone---------------------------"."<br>" ."<br>";
   $pontoC = $pontoA->clone();
   echo "Ponto 3 (clone de PontoA): {$pontoC->getPonto1()}, {$pontoC->getPonto2()}\n" ."<br>" ."<br>";
   
   echo"---------------------------Comparação---------------------"."<br>" ."<br>";
   $pontoA->comparar($pontoB)."<br>" ."<br>";
   //corrigir não esta funcionando
   echo"------------------Calcular a distância-------------------"."<br>" ."<br>"; 
   $distancia = $pontoA->calcularDistancia($pontoB);
   echo "Distância entre os pontos:".$distancia ."<br>"."<br>";  
 

 
?>

 
   


