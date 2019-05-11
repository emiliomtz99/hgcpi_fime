<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
$ident = $_GET['ident'];


$tipo_tutoria = "individual";
$nivel_academico = $_POST["nivel_academico"];
$programa_educativo = $_POST["programa_educativo"];
$fecha_de_inicio = $_POST["fecha_inicio"];
$fecha_de_fin = $_POST["fecha_fin"];
$tipo_de_tutelaje = $_POST["tipo_tutelaje"];
$estado_tutoria = $_POST["estado_tutoria_individual_prodep"];


$idusuario = "1815906";


$sql="UPDATE detalle_usuario_tutoria 
SET 

tipo_tutoria='$tipo_tutoria',
nivel_academico='$nivel_academico',
programa_educativo='$programa_educativo',
fecha_de_inicio='$fecha_de_inicio',
fecha_de_fin='$fecha_de_fin',
tipo_de_tutelaje='$tipo_de_tutelaje',
estado_tutoria='$estado_tutoria'

WHERE id='$ident' 
AND usuario_idusuario='$idusuario'";

if($result=mysqli_query($mysqli,$sql))
{
  header("Location: ../../../../../prodep.php");
}

?>