<?php
$servidor = "localhost";
$usuario = "bryan";
$baseDatos = "ZooMex";
$password = "bryan123";

$conexion = mysqli_connect($servidor,$usuario,$password,$baseDatos);
if(!$conexion){
    echo "Problema al conectar la Base de Datos";
}
?>