<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
$ident = $_GET['ident'];


$tipo_tutoria = "grupal";
$nivel_academico = $_POST["nivel_tutoria_grupal_prodep"];
$programa_educativo = $_POST["programa_tutoria_grupal_prodep"];
$numero_estudiantes = $_POST["no_alumno_tutoria_grupal_prodep"];
$fecha_de_inicio = $_POST["fecha_ini_tutoria_grupal"];


$idusuario = "1815906";


$sql="UPDATE detalle_usuario_tutoria 
SET 

tipo_tutoria='$tipo_tutoria',
nivel_academico='$nivel_academico',
programa_educativo='$programa_educativo',
numero_estudiantes='$numero_estudiantes',
fecha_de_inicio='$fecha_de_inicio'


WHERE id='$ident' 
AND usuario_idusuario='$idusuario'";

if($result=mysqli_query($mysqli,$sql))
{
  header("Location: ../../../../../prodep.php");
}
?>