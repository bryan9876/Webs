<?php
include("conexion/conexion.php");

$p_id_evento = $_POST['txtnumero_evento'];
$p_tipoEvento = !empty($_POST['cmbTipoEvento']) ? $_POST['cmbTipoEvento'] : NULL;
$p_id_equipo = !empty($_POST['cmbEquipo']) ? $_POST['cmbEquipo'] : NULL;
$p_fecha = !empty($_POST['fecha_evento']) ? $_POST['fecha_evento'] : NULL;
$p_id_estado_evento = !empty($_POST['cmbEstadoEvento']) ? $_POST['cmbEstadoEvento'] : NULL;
$p_direccion_evento = !empty($_POST['direccion_evento']) ? $_POST['direccion_evento'] : NULL;
$p_referencias_evento = !empty($_POST['referencias_evento']) ? $_POST['referencias_evento'] : NULL;

$sql = "CALL actualizar(
    $p_id_evento, 
    " . ($p_tipoEvento !== NULL ? $p_tipoEvento : 'NULL') . ", 
    " . ($p_id_equipo !== NULL ? $p_id_equipo : 'NULL') . ",
    " . ($p_fecha !== NULL ? "'$p_fecha'" : 'NULL') . ",
    " . ($p_id_estado_evento !== NULL ? $p_id_estado_evento : 'NULL') . ",
    " . ($p_direccion_evento !== NULL ? "'$p_direccion_evento'" : 'NULL') . ",
    " . ($p_referencias_evento !== NULL ? "'$p_referencias_evento'" : 'NULL') . "
)";

if(mysqli_query($conexion, $sql)){
    header("location:consultar-eventos.php");
}else{
    echo "Error al actualizar el evento: " . mysqli_error($conexion);
}
?>
