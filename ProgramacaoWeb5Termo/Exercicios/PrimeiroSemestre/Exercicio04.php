<?php 
   class Ponto2D{
    private int $ponto1;
    private int $ponto2;

    
    public function __construct( int $ponto1, int $ponto2)
    {
        $this->ponto1 = $ponto1;
        $this->ponto2 = $ponto2;
    }
    public  function dfPontoPartida($ponto3){
        $this->ponto1 = $ponto3 ->getPonto1() ;
        $this->ponto2 = $ponto3 ->getPonto2() ;
        

    }
    public function comparar($ponto3){
        return $this->ponto1 === $ponto3->getPonto1() && 
        $this->ponto2 ===  $ponto3->getPonto2();
     
            
        
       

    }
    public function calcularDistancia($ponto1 , $ponto2){
      
        $distancia  = sqrt(pow($ponto2 - $ponto1, 2) + pow($ponto2 - $ponto1, 2));
          return $distancia;
         
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

   $pontoA = new Ponto2D(3,15);
   $pontoB = new Ponto2D(9, -2);
   echo "<br>" ; 
   echo "Ponta A ( {$pontoA->getPonto1()}, {$pontoA->getPonto2()} )"."<br>";
   echo "Ponto B( {$pontoB->getPonto1()}, {$pontoB->getPonto2()} )" ."<br>" ."<br>" ;

   $pontoB->dfPontoPartida($pontoA);
   echo "Ponto A após definir com Ponto B: {$pontoB->getPonto1()}, {$pontoB->getPonto2()} "."<br>";

   echo "Pontos são iguais? " . ($pontoA->comparar($pontoB) ? "Sim" : "Não") . "<br>" ;

   $distancia = $pontoA->calcularDistancia($ponto1 , $ponto2);
   echo "Distância entre os pontos:".$distancia ."<br>";
     
   $pontoC = $pontoA->clone();
   echo "Ponto 3 (clone de Ponto1): {$pontoC->getPonto1()}, {$pontoC->getPonto2()}\n"; 

 
?>

 
   


