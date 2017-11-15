<?php

require_once 'MainServer.php';
require_once 'UserService.php';

class Server extends MainServer {
    //Metodos
    private $userService;
    //function __construct($user_name, $p
    function __construct(){
        $this->userService = new UserService();
    }

//    public function guardar($name, $age){
//            $this->name[] = $name;
//            $this->age[] = $age;
//
//    }
    public function mostrar($user_name, $password) {
        
    }

    function getUser_name() {
        return $this->user_name;
    }

    function getPassword() {
        return $this->password;
    }

    public function login($user_name, $password) {
        $exists = $this->userService->validate($user_name, $password);
        
        if($exists){
            $exito=TRUE;
            return $exito;
        }  else {
            $exito= FALSE;
            return $exito;
        }
               
    }
    
    protected function error() {
        
    }
    
    public function message($exito,$user_name) {
        if($exito){
            echo "<h1>Bienvenido $user_name</h1>";
        }  else {
            echo "<h1>Usuario no registrado</h1>";
            ?><a href="index.php">Home</a><?php

        }
        
    }
}



