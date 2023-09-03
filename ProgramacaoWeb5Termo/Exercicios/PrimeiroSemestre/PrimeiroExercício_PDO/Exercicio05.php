<?php 
   class Circle{
        private int $pontoX;
        private int $pontoY;
        private int $radius;
        
        public function __construct(int $raio = 1, int $X = 0, int $Y = 0)
        {
            $this->pontoX = $X;
            $this->pontoY = $Y;
            $this->radius = $raio;
        }
        public function setPontoX($pontoX){
            $this->pontoX = $pontoX;
            
        }
        public function getPontoX(){
            return $this->pontoX;
            
        }
        public function setPontoY($pontoY){
            $this->pontoY = $pontoY;
        }
        public function getPontoY(){
            return $this->pontoY;
        }

        public function setRadius($radius){
            $this->radius =  $radius;
            
        }
        public function getRadius(){
            return $this->radius;       
        }

        
        public  function Area(){
            return pi() * ($this->radius * 2);
        }
         // Métodos de inflar e desinflar
        public function inflar($value){
            $this->setRadius($this->radius +  $value);
        }
        public function desinflar($value){
            $this->setRadius($this->radius -=  $value);
            if ($this->radius < 0) {
                $this->radius = 0;
            }
        } 
        // Método para mover o círculo
        public function mover($novoX, $novoY) {
            $this->pontoX = $novoX;
            $this->pontoY = $novoY;
        }

        // Método para calcular a área do círculo
        public function calcularArea() {
            return pi() * $this->radius * $this->radius;

        }
    }   
        echo"-------------------Inicialização -----------------"."<br>";
        $circulo = new Circle(10, 9, 5);
        echo "Ponto X: {$circulo->getpontoX() }". "<br>" ."Ponto Y: {$circulo->getPontoY()}"."<br>"."<br>";
        
        echo"------------------Caluclando raio -----------------"."<br>";
        $circulo->getpontoY() ."Raio: {$circulo->getRadius()}" ."<br>"."<br>";
        echo "Área do círculo: {$circulo->calcularArea()}" . "<br>"."<br>";;
        echo"-------------------Incrementar -----------------"."<br>";
        $circulo->inflar(5);
        echo "Raio após inflar: {$circulo->getRadius()}"."<br>"."<br>";
        echo"-------------------Desincrementar -----------------"."<br>";
        $circulo->desinflar(7);
        echo "Raio após desinflar: {$circulo->getRadius()}" ."<br>"."<br>";
        echo"------------------- Mover o círculo -----------------"."<br>";
        $circulo->mover(2,9)."<br>"."<br>";
        echo "Ponto X:{$circulo->getpontoX()}". "<br>". "Ponto Y:{$circulo->getpontoY()}". "\n"."<br>"."<br>";
?>

 