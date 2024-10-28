<?php
include ("conexion/conectar-mysql.php");
$folioEspecie = $_GET['folioesp'];

$sql = "CALL proc_eliminarEspecie('".$folioEspecie."')";
echo $sql;

#$sql = "UPDATE especie_h SET Estatus='0'
        #WHERE Folio_especie= '$folioEspecie'";

if(mysqli_query($conexion, $sql)){
    header("location:consultar-especie.php");
}else{
    echo "Problemas al eliminar la especie";
}
mysqli_close($conexion);
?>
