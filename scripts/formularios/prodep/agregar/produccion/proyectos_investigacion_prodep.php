<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO 
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

$consulta = "INSERT INTO detalle_usuario_proyectos_investigacion /* tabla de destino 
(titulo,nombre_patrocinador,nombre_alumnos_participantes,actividades_realizadas,considerar_curriculum,miembros,lgacs,fecha_inicio,fecha_fin,tipo_patrocinador,investigadores_participantes,usuario_idusuario) /* campos de destino, en el MISMO ORDEN que aparecen en la base de datos 
VALUES ('$titulo','$nombre_patrocinador','$nombre_alumnos_participantes','$actividades_realizadas','$considerar_curriculum','$miembros','$lgacs','$fecha_inicio','$fecha_fin','$tipo_patrocinador','$investigadores_participantes','$idusuario')"; /* valores a insertar en los campos de destino */

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

$consulta = "INSERT INTO detalle_usuario_proyectos_investigacion /* tabla de destino */
(titulo,nombre_patrocinador,nombre_alumnos_participantes,actividades_realizadas,considerar_curriculum,miembros,lgacs,fecha_inicio,fecha_fin,tipo_patrocinador,investigadores_participantes,usuario_idusuario) /* campos de destino, en el MISMO ORDEN que aparecen en la base de datos */
VALUES ('$titulo','$nombre_patrocinador','$nombre_alumnos_participantes','$actividades_realizadas','$considerar_curriculum','$miembros','$lgacs','$fecha_inicio','$fecha_fin','$tipo_patrocinador','$investigadores_participantes','$idusuario')"; /* valores a insertar en los campos de destino */


if ($resultado = $mysqli->query($consulta)) {
    header("Location: ../../../../../prodep.php"); //regresar a la convocatoria actual
}
else
{
    echo "Error en el registro a la base de datos: ".mysqli_error($mysqli); //o mostrar un error
}
mysqli_close($mysqli); //cerrar la base de datos
?>
