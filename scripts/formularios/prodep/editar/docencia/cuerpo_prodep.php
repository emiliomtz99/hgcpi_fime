<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
$ident = $_GET['ident'];


$cuerpo_academico_clave = $_POST["clave_cuerpo_prodep"];
$nombre_cuerpo_academico = $_POST["nombre_cuerpo_prodep"];
$grado_consolacion = $_POST["grado_cuerpo_prodep"];
$linea_cultiva_cuerpo_academico = $_POST["linea_cuerpo_prodep"];

$idusuario = "1815906";


$sql="UPDATE detalle_usuario_cuerpo_academico 
SET 

cuerpo_academico_clave='$cuerpo_academico_clave',
nombre_cuerpo_academico='$nombre_cuerpo_academico',
grado_consolacion='$grado_consolacion',
linea_cultiva_cuerpo_academico='$linea_cultiva_cuerpo_academico'


WHERE id='$ident' 
AND usuario_idusuario='$idusuario'";

if($result=mysqli_query($mysqli,$sql))
{
  header("Location: ../../../../../prodep.php");
}
?>