<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
$tipo_tutoria = "grupal";
$nivel_academico = $_POST["nivel_tutoria_grupal_prodep"];
$programa_educativo = $_POST["no_alumno_tutoria_grupal_prodep"];
$numero_estudiantes = $_POST["nivel_tutoria_grupal_prodep"];
$fecha_de_inicio = $_POST["fecha_ini_tutoria_grupal"];
$idusuario = "1815906";

$consulta = "INSERT INTO detalle_usuario_tutoria /* tabla de destino */
(tipo_tutoria,nivel_academico,programa_educativo,numero_estudiantes,fecha_de_inicio,usuario_idusuario) /* campos de destino, en el MISMO ORDEN que aparecen en la base de datos */
VALUES ('$tipo_tutoria','$nivel_academico','$programa_educativo','$numero_estudiantes','$fecha_de_inicio','$idusuario')"; /* valores a insertar en los campos de destino */

if ($resultado = $mysqli->query($consulta)) {
    header("Location: ../../../../../prodep.php"); //regresar a la convocatoria actual
}
else
{
    echo "Error en el registro a la base de datos: ".mysqli_error($mysqli); //o mostrar un error
}
mysqli_close($mysqli); //cerrar la base de datos
?>
