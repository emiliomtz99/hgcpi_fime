<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
$ident = $_GET['ident'];

$titulo = $_POST["título_proyecto_investigacion_prodep"];
$nombre_patrocinador = $_POST["patrocinador_proyecto_investigacion_prodep"];
$nombre_alumnos_participantes = $_POST["alumnos_proyecto_investigacion_prodep"];
$actividades_realizadas = $_POST["actividades_proyecto_investigacion_prodep"];
$considerar_curriculum = $_POST["cuerpo_proyecto_investigacion_prodep"];
$miembros = $_POST["miembros_proyecto_investigacions_prodep"];
$lgacs = $_POST["LGAC_proyecto_investigacion_prodep"];
$fecha_inicio = $_POST["fecha_inicio"];
$fecha_fin = $_POST["fecha_fin"];
$tipo_patrocinador = $_POST["tipo_patrocinador_proyecto_investigacion_prodep"];
$investigadores_participantes = $_POST["investigadores_proyecto_investigacion_prodep"];

$idusuario = "1815906";


$sql="UPDATE detalle_usuario_proyectos_investigacion 
SET 

titulo='$titulo',
nombre_patrocinador='$nombre_patrocinador',
nombre_alumnos_participantes='$nombre_alumnos_participantes',
actividades_realizadas='$actividades_realizadas',
considerar_curriculum='$considerar_curriculum',
miembros='$miembros',
lgacs='$lgacs',
fecha_inicio='$fecha_inicio',
fecha_fin='$fecha_fin',
tipo_patrocinador='$tipo_patrocinador',
investigadores_participantes='$investigadores_participantes'


WHERE id='$ident' 
AND usuario_idusuario='$idusuario'";

if($result=mysqli_query($mysqli,$sql))
{
  header("Location: ../../../../../prodep.php");
}
?>

