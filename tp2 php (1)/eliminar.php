<?php
include("conexion.php");
$id= $_REQUEST['id'];
$query="DELETE FROM usuario WHERE id='$id'";
$resultado= $conexion->query($query);
if($resultado){
    header("Location: tabla.php");
}
else{
    echo "Insercion no exitosa";
}
?>