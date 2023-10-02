<?php 
class Pessoa{
    private string $nome;
    private int $cpf;
    private string $email;


    public function  verDados(){

        echo " Nome: " .$this->nome ."<br>". " CPF: " .$this->cpf ."<br>". " E-mail: " .$this->email ."<br>";

    }
    public function __construct($nome, $cpf, $email){

        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->email = $email;
    
        
    }

}
class Aluno  extends Pessoa{
    private int $ra;
    private string $curso;
    private string $termo;

    
    public function verDados() {
        parent::verDados();
        echo "RA: " . $this->ra . "<br>" . "Curso: " . $this->curso . "<br>" . "Termo: " . $this->termo . "<br>";
    }

    public function __construct($nome, $cpf, $email,$ra, $curso, $termo){
        parent::__construct($nome, $cpf, $email);
            $this ->ra = $ra;
            $this->curso = $curso;
            $this->termo = $termo;
            
    }
    
   
}

class Professor extends Pessoa{
    private int $matricula;
    private int $cargaHoraria;
    private float $salario;
    private string $departamento;
    
    public function verDados() {
        parent::verDados();
        echo "Matrícula: " . $this->matricula . "<br>" . "Carga Horária: " . $this->cargaHoraria . "<br>" . "Salário: " . $this->salario . "<br>" . "Departamento: " . $this->departamento . "<br>";
    }
    public function __construct($nome, $cpf, $email,$matricula, $cargaHoraria, $salario,$departamento){
        parent::__construct($nome, $cpf, $email);
            $this ->matricula = $matricula;
            $this->cargaHoraria = $cargaHoraria;
            $this->salario = $salario;
    }
}

$d1 = new Pessoa("Caio", 1111111111,"Caio1@gmail.com");
$d1->verDados();


$a1 = new Aluno("Bia",222222222,"Bia23@gmail.com",1290000000,"ADS","4ºTermo");
$a1->verDados();

$p1 = new Professor("Cintia",222222222,"Cintia23@gmail.com",129,"48:00","3500","Tecnologia da informação");
$p1->verDados();
?>