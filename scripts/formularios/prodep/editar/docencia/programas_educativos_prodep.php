<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
$ident = $_GET['ident'];


$nombre_pe = $_POST["programa_actualizado_prodep"];
$fecha_implementacion_cambio = $_POST["fecha_cambio"];
$en_que_consiste_actualizacion = $_POST["actualizacion_programa_actualizado_prodep"];


$idusuario = "1815906";


$sql="UPDATE detalle_usuario_actualizacion_pe 
SET 

nombre_pe='$nombre_pe',
fecha_implementacion_cambio='$fecha_implementacion_cambio',
en_que_consiste_actualizacion='$en_que_consiste_actualizacion'


WHERE id='$ident' 
AND usuario_idusuario='$idusuario'";

if($result=mysqli_query($mysqli,$sql))
{
  header("Location: ../../../../../prodep.php");
}
?>