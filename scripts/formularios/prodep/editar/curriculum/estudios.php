<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
$ident = $_GET['ident'];

$nivel_estudios = $_POST["nivel_estudios"];
$titulo = $_POST["estudios_en"];
$fecha_inicio = $_POST["fecha_ini_estudios"];
$fecha_fin = $_POST["fecha_fin_estudios"];
$fecha_obtencion_titulo = $_POST["fecha_titulo"];
$nombre_institucion = $_POST["institucion_otorgante"];
$pais_institucion = $_POST["pais_estudios"];
$disciplina = $_POST["area"];


$idusuario = "1815906";


$sql="UPDATE detalle_usuario_grados_acad 
SET 
nivel_estudios='$nivel_estudios',
titulo='$titulo',
fecha_inicio='$fecha_inicio',
fecha_fin='$fecha_fin',
fecha_obtencion_titulo='$fecha_obtencion_titulo',  
nombre_institucion='$nombre_institucion',
pais_institucion='$pais_institucion', 
disciplina='$disciplina'  


WHERE id='$ident' 
AND usuario_idusuario='$idusuario'";

if($result=mysqli_query($mysqli,$sql))
{
  header("Location: ../../../../../prodep.php");
}
?>