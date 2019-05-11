<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 

$tipo_tutoria = "individual";
$nivel_academico = $_POST["nivel_tutoria_individual_prodep"];
$programa_educativo = $_POST["programa_tutoria_individual_prodep"];
$fecha_de_inicio = $_POST["fecha_ini_tutoria_individual"];
$fecha_de_fin = $_POST["fecha_fin_tutoria_individual"];
$tipo_de_tutelaje = $_POST["tipo_tutoria_individual_prodep"];
$estado_tutoria = $_POST["estado_tutoria_individual_prodep"];

$idusuario = "1815906";


$consulta = "INSERT INTO detalle_usuario_tutoria /* tabla de destino */
(/*alumno, */tipo_tutoria,nivel_academico,programa_educativo,fecha_de_inicio,fecha_de_fin,tipo_de_tutelaje,estado_tutoria,usuario_idusuario) /* campos de destino, en el MISMO ORDEN que aparecen en la base de datos */
VALUES (/*'$alumno',*/'$tipo_tutoria','$nivel_academico','$programa_educativo','$fecha_de_inicio','$fecha_de_fin','$tipo_de_tutelaje','$estado_tutoria','$idusuario')"; /* valores a insertar en los campos de destino */

if ($resultado = $mysqli->query($consulta)) {
    header("Location: ../../../../../prodep.php"); //regresar a la convocatoria actual
}
else
{
    echo "Error en el registro a la base de datos: ".mysqli_error($mysqli); //o mostrar un error
}
mysqli_close($mysqli); //cerrar la base de datos
?>
