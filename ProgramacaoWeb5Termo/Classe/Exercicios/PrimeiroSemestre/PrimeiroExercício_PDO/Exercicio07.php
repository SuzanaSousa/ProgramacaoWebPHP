<?php 
class Porta {
    public  $aberta;
    public $cor;
    public $dimensaoX;
    public $dimensaoY;
    public $dimensaoZ;

    public  function abre(){
        $this->aberta = true;
       return $this->aberta;
    }
    public  function fecha(){
        $this->aberta = false;
        
    }
    public  function pinta(string $s){
        $this->aberta = false;
        
    }
}
class Imovel{
    public  $cor;
    public $portas;
    public function _construct(){
        $this->portas = [];
    }
    public function pinta( string $s){
        $this->cor = $s;
    }
    public  function QtdPortaAberta(){
        $count = 0;
        foreach($this->portas as $porta){
            if($porta->aberta){
                $count++;
            }
        }
        return $count;
    }
    public function addPorta($porta){
        $this->portas[] = $porta;
       
    }
    public function totPorta(){
        return count($this->portas);

    }

}
class Casa  extends Imovel{
    public function __construct(){        
        parent::_construct();
        
    }
}
class Edificio extends Imovel{
    public $totAndar;

    public function _construct()
    {
        parent::_construct();
        $this->totAndar  =  0;
    }
    public function addAndar(){
        $this->totAndar++;
    }
    public function  totAnder(){
        return  $this->totAndar;
    }
}
$porta1 = new Porta();
$porta2 = new Porta();
$porta3 = new Porta();
$porta4 = new Porta();

echo"-----------Casa------------" ."<br>"."<br>";
$casa = new Casa();
$casa->addPorta($porta1);
$casa->addPorta($porta2);
$casa->addPorta($porta3);
$casa->addPorta($porta4);
$casa->pinta("Vermelha");
$porta4->abre();
$porta1->fecha();
$porta2->abre();
$porta3->abre();

echo "Cor da Casa: {$casa->cor }"."<br>";
echo "Total de Portas:{$casa->totPorta()}" ."<br>";
echo "Quantidade de portas abertas:{$casa->QtdPortaAberta()}"."<br>";

echo"-----------Casa------------" ."<br>"."<br>";
$edificio = new Edificio();
$edificio->addAndar();
$edificio->addAndar();
$edificio->addAndar();
$edificio->addPorta($porta1);
$edificio->addPorta($porta3);
$edificio->addPorta($porta2);
$porta1->abre();
$porta3->fecha();
$porta2->abre();
$edificio->pinta("Cinza");

echo "Cor da Casa: {$edificio->cor }"."<br>";

echo"Total de portas: {$edificio->totPorta()} "."<br>";

echo "Total de Andarea: {$edificio->totAnder()}" ."<br>";

echo "Quantidade de portas abertas: {$edificio->QtdPortaAberta()}"."<br>";


?>