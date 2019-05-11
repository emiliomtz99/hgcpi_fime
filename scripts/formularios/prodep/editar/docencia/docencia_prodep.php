<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
$ident = $_GET['ident'];


$dependencia = $_POST["dependencia_docencia_prodep"];
$nombre_programa_educativo = $_POST["programa_educativo_docencia_prodep"];
$nombre_curso = $_POST["nom_curso_docencia_prodep"];
$nivel = $_POST["nivel_docencia_prodep"];
$nombre_institucion_ies = $_POST["institucion_docencia_prodep"];
$numero_alumnos = $_POST["no_alumnos_docencia_prodep"];
$duracion_semanas = $_POST["duracion_semanas_docencia_prodep"];
$horas_asesoria_mes = $_POST["horas_docencia_mes_prodep"];
$horas_semanales_curso = $_POST["horas_docencia_semanal_prodep"];
$fecha_inicio = $_POST["fecha_inicio_estudios_docencia"];

$idusuario = "1815906";


$sql="UPDATE detalle_usuario_docencia 
SET 

dependencia='$dependencia',
nombre_programa_educativo='$nombre_programa_educativo',
nombre_curso='$nombre_curso',
nivel='$nivel',
nombre_institucion_ies='$nombre_institucion_ies',
numero_alumnos='$numero_alumnos',
duracion_semanas='$duracion_semanas',
horas_asesoria_mes='$horas_asesoria_mes',
horas_semanales_curso='$horas_semanales_curso',
fecha_inicio='$fecha_inicio'


WHERE id='$ident' 
AND usuario_idusuario='$idusuario'";

if($result=mysqli_query($mysqli,$sql))
{
  header("Location: ../../../../../prodep.php");
}
?>