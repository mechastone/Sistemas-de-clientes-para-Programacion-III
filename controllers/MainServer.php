<?php

abstract class MainServer {

    protected abstract function login($user_name, $password);

    protected abstract function error();
    
    protected abstract function message($exito,$user_name);
}
    