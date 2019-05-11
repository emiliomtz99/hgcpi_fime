<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
$ident = $_GET['ident'];


$titulo_proyecto_dirigido = $_POST["titulo_direccion_prodep"];
$estado_de_direccion = $_POST["estado_direccion_prodep"];
$fecha_de_inicio = $_POST["fecha_inicio_dir_in"];
$fecha_de_fin = $_POST["fecha_fin_dir_in"];
$grado_academico = $_POST["grado_direccion_prodep"];
$numero_estudiantes = $_POST["no_alumnos_direccion_prodep"];
$ies_realiza_gestion = $_POST["dependencia_docencia_prodep"];
$considerar_curriculum = $_POST["curriculum_direccion_prodep"];
$miembros = $_POST["miembros_direccion_prodep"];
$lgacs = $_POST["LGAC_direccion_prodep"];

$idusuario = "1815906";


$sql="UPDATE detalle_usuario_direccion_individualizada 
SET 

titulo_proyecto_dirigido='$titulo_proyecto_dirigido',
estado_de_direccion='$estado_de_direccion',
fecha_de_inicio='$fecha_de_inicio',
fecha_de_fin='$fecha_de_fin',
grado_academico='$grado_academico',
numero_estudiantes='$numero_estudiantes',
ies_realiza_gestion='$ies_realiza_gestion',
considerar_curriculum='$considerar_curriculum',
miembros='$miembros',
lgacs='$lgacs'


WHERE id='$ident' 
AND usuario_idusuario='$idusuario'";

if($result=mysqli_query($mysqli,$sql))
{
  header("Location: ../../../../../prodep.php");
}
?>