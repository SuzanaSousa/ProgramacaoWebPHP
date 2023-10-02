<?php
class Empregado{

    private $primeiroNome;
    private $sobrenome;
    private $salario;

    public function __construct( string $primeiroNome, string $sobrenome, float $salario){
        $this->primeiroNome = $primeiroNome;
        $this->sobrenome = $sobrenome;
        $this->salario = max(0.0, $salario);


    }
    public function getPrimeiroNome(){
        return $this->primeiroNome;
    }
    public function getSobrenome(){
        return $this->sobrenome;
    }
    public function getSalario(){
        return $this->salario;
    }
    public function setPrimeiroNome(string $descricao){
        $this->primeiroNome = $descricao;

    }
    public function setSobrenome(string $descricao){
        $this->sobrenome = $descricao;

    }
    public function setSalario(float $salario){
        if (($salario < 0) ){
           $this->salario =  max(0.0, $salario);
         
        }else{
            $this->salario = $salario;

        }
    
    }
    public function getSalarioAnual(){
       
        return $this->salario  * 12;

    }
    public function getAumentoSalario(){
       
        return $this->salario  *= 1.10;

    }
    public function mostrarDados() {
        echo " {$this->primeiroNome} {$this->sobrenome} Salário Mensal de: {$this->salario} ". "<br>";
      
    }
   

}
echo" ------------- Primeiro empregado------------- ." ."<br>" ."<br>" ;
$E1 = new Empregado("João", "Silva", 5000.0);
$E1->mostrarDados();
echo "Salário Anual:{$E1->getSalarioAnual() }"."<br>" ;
echo "Salário com Aumento:{$E1->getAumentoSalario()}" ."<br> "."<br>";

echo"------------- Segundo empregado com salario negativo---------- ." ."<br>" ."<br>" ;

$E2 = new Empregado("Caio", "Silva", -1);
$E2->mostrarDados();
echo "Salário Anual:{$E2->getSalarioAnual()}"."<br>";
echo "Novo Salário Mensal:{$E2->getAumentoSalario()}"."<br>";

?>