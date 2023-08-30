<?php 
trait utils
{
    public function buscaCep(){

    }
    public function validaCep(){

    }
}
class Conta
{
    private  $agencia;
    private $conta;
    protected $saldo;



    public function depositar ($valor) {
        $this->saldo +=  $valor;

    }
    public function __construct($valor)
    {
        $this->saldo = $valor;
    }
    public function sacar($valor){
        if (($this->saldo > 0) && ($this->saldo >= $valor )){
            $this->saldo -= $valor ;
            
        }
        else{
            echo"Saldo insuficiente";
        }
    }


    public function  verSaldo(){

        echo "Saldo atual:" .$this->saldo . "<br>";

    }
}   
class ContaPoupanca extends Conta{

    use utils;
    private float $rendimento;
    private  float $taxa = 10.00;

    public function _set($atrib,$valus){
       return $this->$atrib = $valus;

    }
    public function _get($atrib){
        $this->$atrib;

    }

   /*  public function depositar($valor)
    {
        
    } */
    public function sacar($valor)
    {
        if (($this->saldo > 0) && ($this->saldo >= $valor + $this->taxa)){
            $this->saldo -= $valor + $this->taxa;
            
        }
    }
}
class ContaCorrente extends Conta{
    private float $limite = 800.00;
    public function depositar($valor){
        
    }
    public function sacar($valor){
         if (($this->saldo > 0) && ($this->saldo >= $valor + $this->limite)){
            $this->saldo -= $valor + $this->limite;
            
        } 
        
        else{
            echo"Saldo insuficiente";
        }
    }
//metodo abtrato cosigo escrever o metado pode criar atributos
//interface de que inplementar p metado obrigatoriamente
//primeiro heraança depois interface
}
$c1 = new Conta(500);
$c1->verSaldo();
$c1->depositar(50);
$c1->verSaldo();
$c1->sacar(90);
$c1->verSaldo();
"<br>";
echo "conta poupança";
$c2 = new ContaPoupanca(1000);
$c2->verSaldo();
$c2->depositar(200);
$c2->verSaldo();
$c2->sacar(90);
$c2->verSaldo();
"<br>";
echo"conta corrente";
/* $c2 = new ContaCorrente();
$c2->verSaldo();
$c2->depositar(200);
$c2->verSaldo();
$c2->sacar(90);
$c2->verSaldo(); */
utils::buscaCep();

?>