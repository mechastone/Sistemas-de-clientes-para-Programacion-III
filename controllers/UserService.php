<?php
class UserService {



    private $array_datos =[
        "pablo" => "basica1",
        "usu2" => "basica2",
        "usu3" => "basica3",
        "usu4" => "basica4",
    ];
              
    function validate($user_recibido, $pass_recibido){
        
        
        if (isset($this->array_datos[$user_recibido])&& $this->array_datos[$user_recibido] == $pass_recibido){
            return TRUE;
          
        }else{
            return FALSE;
        }
    }
    
    //function  val($user_name, $password, $array_datos){
        //if (in_array($user_name, $array_datos){
        
       
    //}
    
}
