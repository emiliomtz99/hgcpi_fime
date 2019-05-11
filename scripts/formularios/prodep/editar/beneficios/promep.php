<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
$ident = $_GET['ident'];

$ies_solicitud = $_POST["ies_promep_prodep"];
$solicitud = $_POST["solicitud_promep_prodep"];
$vigencia = $_POST["vigencia_promep_prodep"];
$estado = $_POST["estado_promep_prodep"];


$idusuario = "1815906";


$sql="UPDATE detalle_usuario_beneficios_promep 
SET 
ies_solicitud='$ies_solicitud',
solicitud='$solicitud',
vigencia='$vigencia',
estado='$estado'
  


WHERE id='$ident' 
AND usuario_idusuario='$idusuario'";

if($result=mysqli_query($mysqli,$sql))
{
  header("Location: ../../../../../prodep.php");
}
?>


