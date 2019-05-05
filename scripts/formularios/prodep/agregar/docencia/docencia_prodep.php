<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
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

$consulta = "INSERT INTO detalle_usuario_docencia /* tabla de destino */
(dependencia,nombre_programa_educativo,nombre_curso,nivel,nombre_institucion_ies,numero_alumnos,duracion_semanas,horas_asesoria_mes,horas_semanales_curso,fecha_inicio,usuario_idusuario) /* campos de destino, en el MISMO ORDEN que aparecen en la base de datos */
VALUES ('$dependencia','$nombre_programa_educativo','$nombre_curso','$nivel','$nombre_institucion_ies','$numero_alumnos','$duracion_semanas','$horas_asesoria_mes','$horas_semanales_curso','$fecha_inicio','$idusuario')"; /* valores a insertar en los campos de destino */

if ($resultado = $mysqli->query($consulta)) {
    header("Location: ../../../../../prodep.php"); //regresar a la convocatoria actual
}
else
{
    echo "Error en el registro a la base de datos: ".mysqli_error($mysqli); //o mostrar un error
}
mysqli_close($mysqli); //cerrar la base de datos
?>
