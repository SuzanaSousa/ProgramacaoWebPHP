<?php

trait Utils
{
    public function buscaCep() {

    }

    public function validaCPF() {

    }
}

class Utils2
{
    public static function buscaCep() {

    }

} 

abstract class Conta
{
    protected string $agencia;
    protected string $conta;
    protected float $saldo ;

    public function __construct($agencia, $conta, $saldo) {
        $this->agencia = $agencia;
        $this->conta = $conta;
        $this->saldo = $saldo;
    }
        
    public function depositar($valor) {
        $this->saldo += $valor;
    }

    public function sacar($valor) {   
        if (($this->saldo > 0) && ($this->saldo >= $valor)) {
            $this->saldo -= $valor;
        }else{
            echo "Saldo insuficiente.";
        }
    }

    public function verSaldo() {
        echo "Saldo atual: " . $this->saldo . "<br>";
    }
}

final class ContaPoupanca extends Conta
{
    use Utils;

    private float $rendimento;
    private float $taxa = 10.00;

    public function __set($atrib, $value){
        $this->$atrib = $value;
    }

    public function __get($atrib){
        return $this->$atrib;
    }

    public function sacar($valor) {
        if (($this->saldo > 0) && ($this->saldo >= $valor + $this->taxa)) {
            $this->saldo -= $valor + $this->taxa;
        }else{
            echo "Saldo insuficiente.";
        }
    }
}

class ContaCorrente extends Conta
{
    private float $limite;

    public function __construct($agencia, $conta, $saldo, $limite) {
        parent::__construct($agencia, $conta, $saldo);
        $this->limite = $limite;        
    }

    public function sacar($valor) {
        if (($this->saldo > 0) && ($valor <= $this->saldo + $this->limite)) {
            $this->saldo -= $valor;
        }else{
            echo "Saldo insuficiente.";
        }
    }

    public function verSaldo() {
        echo "Saldo atual: " . $this->saldo . " + Limite: " . $this->limite . "<br>";
    }

}


$c2 = new ContaCorrente("xxxx", "11111", 500.00, 100.00);
$c2->verSaldo();
$c2->depositar(300.00);
$c2->verSaldo();
$c2->sacar(400.00);
$c2->verSaldo();

Utils2::buscaCep();
$c3 = new ContaPoupanca("", "", 0.00);
$c3->__get("redimento");
$c3->__set("taxa",10.00);
$c3->buscaCep();
