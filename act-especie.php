<?php
include ("conexion/conectar-mysql.php");
$folioEspecie = $_GET['folioesp'];

$sql = "CALL proc_actEspecie('".$folioEspecie."')";
$especie = mysqli_query($conexion,$sql);
$resultado = mysqli_fetch_array($especie);

if(mysqli_query($conexion,$sql)){
  header("location:actualizar-especie.php");
}else{
  echo "Problemas al eliminar la especie";
}

if($resultado[3] == 1){
    $resultado[3] = "SI";
  }else{
    $resultado[3] = "NO";
  }
?>


