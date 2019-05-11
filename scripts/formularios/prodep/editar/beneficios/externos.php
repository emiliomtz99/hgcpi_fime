<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
$ident = $_GET['ident'];

$tipo_apoyo = $_POST["tipo_apoyo_externo_promep_prodep"];
$nivel = $_POST["nivel_externo_promep_prodep"];
$fecha_inicio = $_POST["fecha_inicio_externo_promep_prodep"];
$fecha_fin = $_POST["fecha_fin_externo_promep_prodep"];
$monto = $_POST["monto_externo_promep_prodep"];

$idusuario = "1815906";


$sql="UPDATE detalle_usuario_beneficios_externos_promep 
SET 
tipo_apoyo='$tipo_apoyo',
nivel='$nivel',
fecha_inicio='$fecha_inicio',
fecha_fin='$fecha_fin',
monto='$monto'  


WHERE id='$ident' 
AND usuario_idusuario='$idusuario'";

if($result=mysqli_query($mysqli,$sql))
{
  header("Location: ../../../../../prodep.php");
}
?>


