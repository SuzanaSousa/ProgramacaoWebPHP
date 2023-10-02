<?php 

class Pais {
    private $nome;
    private $capital;
    private $dimensao_km2;
    private $paisFronteiras;

    public function __construct($nome, $capital, $dimensao_km2) {
        $this->nome = $nome;
        $this->capital = $capital;
        $this->dimensao_km2 = $dimensao_km2;
        $this->paisFronteiras = array();
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCapital() {
        return $this->capital;
    }

    public function getDimensaoKm2() {
        return $this->dimensao_km2;
    }

    public function paisIguais($outroPais) {
        if( $this->nome === $outroPais->getNome() && $this->capital === $outroPais->getCapital()){
            echo " Os países iguais: ";
        }else{
            echo"Os países diferentes: ";
        }
        echo "{$this->nome}, {$outroPais->getNome()}";

    }

    public function definirFronteiras($paisesFronteira) {
        foreach ($paisesFronteira as $pais) {
            if ($pais !== $this) {
                $this->paisFronteiras[] = $pais;
            }
          
        }
    }

    public function getPaisFronteiras() {
        return $this->paisFronteiras;
           
    }
    function apresentarFronteiras($pais) {
        $fronteiras = $pais->getPaisFronteiras();
        echo "Países que fazem fronteira com {$pais->getNome()}:"."<br>";
        foreach ($fronteiras as $fronteira) {
            echo $fronteira->getNome() . "<br>";
        }
    }
    
     

    public function vizinhosComuns($outroPais) {
        $vizinhosComuns = array();
        foreach ($this->paisFronteiras as $pais) {
            if (in_array($pais, $outroPais->getPaisFronteiras())) {
                $vizinhosComuns[] = $pais;
            }
        }
        return $vizinhosComuns;
    }
    function apresentarVizinhosComuns($pais1, $pais2) {
        $vizinhosComuns = $pais1->vizinhosComuns($pais2);
        if (!empty($vizinhosComuns)) {
            echo "Países vizinhos em comum entre {$pais1->getNome()} e {$pais2->getNome()}:\n";
            foreach ($vizinhosComuns as $vizinho) {
                echo $vizinho->getNome()  ."<br>"."<br>";
            }
        } else {
            echo "Não há países vizinhos em comum entre {$pais1->getNome()} e {$pais2->getNome()}"."<br>"."<br>";
        }
    }
}

// Criar países
$pais1 = new Pais("Brasil", "Brasília", 8515767);
$pais2 = new Pais("Argentina", "Buenos Aires", 2780400);
$pais3 = new Pais("Uruguai", "Montevidéu", 176215);
$pais4 = new Pais("Paraguai", "Assunção", 406752);

// Definir fronteiras apenas uma vez
$pais1->definirFronteiras(array($pais2, $pais3, $pais4));
$pais2->definirFronteiras(array($pais1, $pais3));
$pais3->definirFronteiras(array($pais1, $pais2));
$pais4->definirFronteiras(array($pais1));
echo"-----------.";
$pais4->apresentarFronteiras($pais1);
echo"-----------.";
echo "\nPaíses vizinhos comuns entre :"."<br>"."<br>";
$pais1->apresentarVizinhosComuns($pais1,$pais2);

echo"-----------.";
echo "\nVerificando  se dois países são iguais:"."<br>"."<br>";
$pais1->paisIguais($pais3);
   


?>