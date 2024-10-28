<?php
include("conexion/conectar-mysql.php");

$p_folio_especie = $_POST['folio'];
$p_nombre_v = $_POST['nombre_v'];
$p_nombre_c = $_POST['nombre_c'];
$p_peligro_extincion = $_POST['peligroExt'];

$sql = "CALL proc_actualizar('$p_folio_especie','$p_nombre_v','$p_nombre_c','$p_peligro_extincion')";

if(mysqli_query($conexion,$sql)){
    #redireccionar a consultar animal
    header("location:consultar-especie.php");
}else{
    echo "Error al registrar el evento";
}
?>