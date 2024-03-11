<?php

$correo = $_POST["correo"];
$pass = $_POST["pass"];

$user = "espinal@itfip.edu.co";
$clave = "123456";

if($correo == $user && $pass == $clave) {
    echo "Bienvenido";

}else  {
    echo "error";
}



?>