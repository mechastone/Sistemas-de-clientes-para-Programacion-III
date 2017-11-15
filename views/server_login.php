<?php
session_start();
require_once '../controllers/Server.php';

$user_name=$_POST['user_name'];
$password=$_POST['password'];



//$server = new Server($name, $age);
$server = new Server();
// si es true login() redirecciòn a todolist.php

$exito=$server->login($user_name, $password);
//$server->guardar($name, $age);
$server->message($exito,$user_name);
if($exito){
    $_SESSION['user_name']=$user_name;
    header('Location: todolist.php');
}else{
    die();
}



