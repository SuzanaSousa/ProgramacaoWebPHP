<?php 

/*class teste{
    public int $a;
    public int $b;
    private int $soma;

    public _construct(int $a, int $b){
        $this->$a;
        $this->$b;
    }
     public function soma($total){
        $this->soma += $total; 
    } 
}*/

/* 26/08/2023
   usar o final inpedir que a classe seja herdada
   trait utils
   */
?> 
<?php 
class Pais {
    private $nome;
    private $nomeCapital;
    private $dimensao_km2;
    private $paisesFronteira;

    public function __construct(string $nome, string $nomeCapital, int $dimensao_km2) {
        $this->nome = $nome;
        $this->nomeCapital = $nomeCapital;
        $this->dimensao_km2 = $dimensao_km2;
        $this->paisesFronteira = array();
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setNomeCapital($nomeCapital) {
        $this->nomeCapital = $nomeCapital;
    }

    public function setDimensao($dimensaoKm2) {
        $this->dimensao_km2 = $dimensaoKm2;
    }

    public function setPaisesFronteira($paisesFronteira) {
        $this->paisesFronteira = $paisesFronteira;
    } 

    public function getNome() {
        return $this->nome;
    }

    public function getNomeCapital() {
        return $this->nomeCapital;
    }

    public function getDimensao() {
        return $this->dimensao_km2;
    }
/* 
    public function getPaisesFronteira() {
        return $this->paisesFronteira;
    }
 */
    public function PaisIguais($outroPais) {
        if ($this->nome === $outroPais->getNome() && $this->nomeCapital === $outroPais->getNomeCapital()){
           echo " Os países iguais: ";
        }else{
            echo"Os países diferentes: ";
        }
        echo "{$this->nome}, {$outroPais->getNome()}";
    }

    public function definirFronteiras($paisesFronteira) {
        foreach ($paisesFronteira as $pais){
             if($pais !== $this){
                $this->paisesFronteira[] = $pais;
            }

        }
                
    }     

    public function descobirFronteiras() {
          return $this->paisesFronteira;
    }
    function apresentarFronteiras($pais) {
        $paisesFronteira = $pais->getPaisesFronteira();
        echo "Países que fazem fronteira com {$pais->getNome()}:"."<br>";
        foreach ($paisesFronteira as $fronteira) {
            echo $fronteira->getNome() . "<br>";
        }
    }
 
    public function PaisComuns($outroPais) {
        $PaisComuns = array();
        foreach($this->paisesFronteira as $pais){
            if(in_array($pais, $outroPais->getPaisesFronteira())){
                $PaisComuns[] = $pais;
            }
        }
        return $PaisComuns;

    }
    function apresentarPaisComuns($pais1, $pais2) {
        $PaisComuns = $pais1->PaisComuns($pais2);
        if (!empty($PaisComuns)) {
            echo "Países vizinhos em comum entre {$pais1->getNome()} e {$pais2->getNome()}:\n";
            foreach ($PaisComuns as $vizinho) {
                echo $vizinho->getNome()  ."<br>"."<br>";
            }
        } else {
            echo "Não há países vizinhos em comum entre {$pais1->getNome()} e {$pais2->getNome()}"."<br>"."<br>";
        }
    }
}
$pais1 = new Pais("Brasil", "Brasília", 8515767);
$pais2 = new Pais("Argentina", "Buenos Aires", 2780400);
$pais3 = new Pais("Uruguai", "Montevidéu", 176215);
$pais4 = new Pais("Paraguai", "Assunção", 406752);

$pais2->definirFronteiras(array($pais1, $pais3));
$pais3->definirFronteiras(array($pais1, $pais2));
$pais4->definirFronteiras(array($pais1));

echo"-----------.";
$pais4->apresentarFronteiras($pais1);


echo"-----------.";
echo "\nPaíses vizinhos comuns entre :"."<br>"."<br>";
$pais1->apresentarPaisComuns($pais1,$pais4);
echo"-----------.";
echo "\nVerificando  se dois países são iguais:"."<br>"."<br>";
$pais1->PaisIguais($pais3);
   





 







?>