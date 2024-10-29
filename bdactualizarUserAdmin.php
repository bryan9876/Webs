<?php
include("conexion/usuarios.php");

$p_id_usuario = $_POST['txtidUsuario'];
$p_nombre = !empty($_POST['txtNombreUsuario']) ? $_POST['txtNombreUsuario'] : NULL;
$p_direccion = !empty($_POST['direccionUsuario']) ? $_POST['direccionUsuario'] : NULL;
$p_telefono = !empty($_POST['telefonoUser']) ? $_POST['telefonoUser'] : NULL;
$p_contraseña = !empty($_POST['contraseña']) ? $_POST['contraseña'] : NULL;

$sql = "CALL adminactualizarUser(
    '$p_id_usuario', 
    " . ($p_nombre !== NULL ? "'$p_nombre'" : 'NULL') . ",
    " . ($p_direccion !== NULL ? "'$p_direccion'" : 'NULL') . ",
    " . ($p_telefono !== NULL ? "'$p_telefono'" : 'NULL') . ",
    " . ($p_contraseña !== NULL ? "'$p_contraseña'" : 'NULL') . "
)";

if(mysqli_query($conexion, $sql)){
    header("location:consultar-usuarios.php");
}else{
    echo "Error al actualizar el cliente: " . mysqli_error($conexion);
}
?>