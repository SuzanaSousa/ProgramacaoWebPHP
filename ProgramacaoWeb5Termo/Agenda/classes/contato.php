<?php 
class Contato{
    private $id;
    private $nome;
    private $email;
    private $datanasc;

    public function getId(): int {
       return $this->id;
    }
    public function setId( int $id): void {
         $this->id  = $id;
    }
    public function getNome(): string {
        return $this->nome;
    }
    public function setNome( int $nome): void {
          $this->nome = $nome;
    }
    public function getEmail(): string {
        return $this->email;
    }
    public function setEmail( int $email): void {
          $this->email = $email;
    }
    public function getDataNasc(): string {
        return $this->datanasc;
    }
    public function setDataNasc( string $datanasc): void {
          $this->datanasc = $datanasc;
    }
    public function __construct(int $id, string $nome, 
    string $email , string $datanasc){
        $this->id = $id;
        $this->nome = $nome;
        $this->email = $email;
        $this->datanasc = $datanasc;   
    }
    

}
?>