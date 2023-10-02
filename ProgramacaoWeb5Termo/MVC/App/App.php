<?php 
namespace App; //ande estamos trabalho as classes
use App\Controllers\HomeController;

class App{
    private $controller;
    private $controllerFile;
    private $action;
    private $params;
    private $controllerName;

    public function __construct()
    {
        /* Contrantes do Sistema*/ 

        define('APP_HOST' , $_SERVER['HTTP_HOST'."Programacao_web_5_Termo"]);
        define('PATH'    ,realpath('./'));
        define('TITLE'   , "Aplicações MVC em PHP - 2023");
        define('DB_HOST' ,"localhost");
        define('DB_USER' , "root");
        define('DB_PASSAWORD' , '');
        define('DB_Nome' , "MVC" );
        define('DB_DRIVER' ,'mysql');


    }
    
    public function getController(){
        return $this->controller;
    }
    public function getControllerFile(){
        return $this->controllerFile;
    }
    public function getAction(){
        return $this->action;
    }
    public function getParams(){
        return $this->params;
    }
    public function getControllerNome(){
        return $this->controllerName;
    }
    

    public function url(){ //jogando nos atributos
        if ( isset( $_GET['url'] ) ) {

            $path = $_GET['url'];
            $path = rtrim($path, '/');
            $path = filter_var($path, FILTER_SANITIZE_URL); 

            $path = explode('/', $path);

            $this->controller  = $this->verificaArray( $path, 0 );
            $this->action      = $this->verificaArray( $path, 1 );

            if ( $this->verificaArray( $path, 2 ) ) {
                unset( $path[0] );
                unset( $path[1] );
                $this->params = array_values( $path );
            }
        }
    }

    
    public function run(){ 
        if ($this->controller) {
            $this->controllerName = ucwords($this->controller) . 'Controller';
            $this->controllerName = preg_replace('/[^a-zA-Z]/i', '', $this->controllerName);
        } else {
            $this->controllerName = "HomeController";
        }
          
        $this->controllerFile   = $this->controllerName . '.php';
        $this->action           = preg_replace('/[^a-zA-Z]/i', '', $this->action);

        if (!$this->controller) {
            $this->controller = new HomeController($this);
            $this->controller->index();
        }

        if (!file_exists(PATH . '/App/Controllers/' . $this->controllerFile)) {
            throw new Exception("Página não encontrada.", 404);
        }

        $nomeClasse     = "\\App\\Controllers\\" . $this->controllerName;
        $objetoController = new $nomeClasse($this);

        if (!class_exists($nomeClasse)) {
            throw new Exception("Erro na aplicação", 500);
        }
        
        if (method_exists($objetoController, $this->action)) {
            $objetoController->{$this->action}($this->params);
            return;
        } else if (!$this->action && method_exists($objetoController, 'index')) {
            $objetoController->index($this->params);
            return;
        } else {
            throw new Exception("Nosso suporte já esta verificando desculpe!", 500);
        }
        throw new Exception("Página não encontrada.", 404); //gerando exerçoes
        
    }
    public function verificaArray($array, $key){
        if(isset($array[$key]) && !empty($array[$key])){
            return $array[$key];
        }
        return null;
    }

}

?>
