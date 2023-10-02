<?php 
class Datas{
    private $dia;
    private $mes;
    private $ano;


    public function __construct(int $dia,  int $mes,  int $ano)
    {    
         $this->setData($dia, $mes, $ano);
    }
    public function setData(int $dia,  int $mes,  int $ano){
        if($this->validarData($dia,$mes,$ano)){
            $this->dia = $dia;
            $this->mes = $mes;
            $this->ano = $ano;

        }else{
            throw new InvalidArgumentException("Data inválida");
        }
        
    }  
    public function getDia(){
        return $this->dia;
        
    }
    public function getMes(){
        return $this->mes;
        
    }
    public function getAno(){
        return $this->ano;
        
    }
    private function validarData($dia,$mes,$ano){
        if(checkdate($mes, $dia, $ano)){
            return true;
        }
        return false;
    }
    public function MostrarDate(){
        echo" Data:  {$this->dia}/{$this->mes}/{$this->ano}" ."<br>"."<br>";
    }
    public function AvancarUmDia(){
        if($this->validarData($this->dia + 1, $this->mes, $this->ano)){
            $data = mktime(0, 0, 0, $this->mes, $this->dia + 1, $this->ano);
            $this->dia = date('d', $data);
            $this->mes = date('m', $data);
            $this->ano = date('Y', $data);
        } 
    }
}

$data = new Datas(23,03,2023);
$data->MostrarDate();  
$data->AvancarUmDia();
$data->MostrarDate();  

?>