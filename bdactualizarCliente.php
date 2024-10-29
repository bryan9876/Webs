<?php
include("conexion/conexion.php");

$p_id_cliente = $_POST['txtnumero_cliente'];
$p_nombre_cliente = !empty($_POST['txtNombreCliente']) ? $_POST['txtNombreCliente'] : NULL;
$p_telefono_1 = !empty($_POST['txtTelefono1']) ? $_POST['txtTelefono1'] : NULL;
$p_telefono_2 = !empty($_POST['txtTelefono2']) ? $_POST['txtTelefono2'] : NULL;
$p_direccion_cliente = !empty($_POST['txtDireccionCliente']) ? $_POST['txtDireccionCliente'] : NULL;
$p_referencias_cliente = !empty($_POST['txtreferenciasCliente']) ? $_POST['txtreferenciasCliente'] : NULL;

$sql = "CALL actualizarClientes(
    '$p_id_cliente', 
    " . ($p_nombre_cliente !== NULL ? "'$p_nombre_cliente'" : 'NULL') . ",
    " . ($p_telefono_1 !== NULL ? "'$p_telefono_1'" : 'NULL') . ",
    " . ($p_telefono_2 !== NULL ? "'$p_telefono_2'" : 'NULL') . ",
    " . ($p_direccion_cliente !== NULL ? "'$p_direccion_cliente'" : 'NULL') . ",
    " . ($p_referencias_cliente !== NULL ? "'$p_referencias_cliente'" : 'NULL') . "
)";

if(mysqli_query($conexion, $sql)){
    header("location:consultar-clientes.php");
}else{
    echo "Error al actualizar el cliente: " . mysqli_error($conexion);
}
?>
