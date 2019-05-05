<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
$nombre_pe = $_POST["programa_actualizado_prodep"];
$fecha_implementacion_cambio = $_POST["fecha_cambio"];
$en_que_consiste_actualizacion = $_POST["actualizacion_programa_actualizado_prodep"];
$idusuario = "1815906";

$consulta = "INSERT INTO detalle_usuario_actualizacion_pe /* tabla de destino */
(nombre_pe,fecha_implementacion_cambio,en_que_consiste_actualizacion,usuario_idusuario) /* campos de destino, en el MISMO ORDEN que aparecen en la base de datos */
VALUES ('$nombre_pe','$fecha_implementacion_cambio','$en_que_consiste_actualizacion','$idusuario')"; /* valores a insertar en los campos de destino */

if ($resultado = $mysqli->query($consulta)) {
    header("Location: ../../../../../prodep.php"); //regresar a la convocatoria actual
}
else
{
    echo "Error en el registro a la base de datos: ".mysqli_error($mysqli); //o mostrar un error
}
mysqli_close($mysqli); //cerrar la base de datos
?>
