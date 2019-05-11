<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
$ident = $_GET['ident'];


$linea = $_POST["linea_lgac"];
$actividades_que_realiza = $_POST["actividades_lgac"];
$horas_semana_dedicadas = $_POST["horas_semana_lgac"];


$idusuario = "1815906";


$sql="UPDATE detalle_usuario_lgac 
SET 

linea='$linea',
actividades_que_realiza='$actividades_que_realiza',
horas_semana_dedicadas='$horas_semana_dedicadas'


WHERE id='$ident' 
AND usuario_idusuario='$idusuario'";

if($result=mysqli_query($mysqli,$sql))
{
  header("Location: ../../../../../prodep.php");
}
?>