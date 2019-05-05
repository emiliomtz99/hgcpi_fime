<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
$ies_solicitud = $_POST["ies_promep_prodep"];
$solicitud = $_POST["solicitud_promep_prodep"];
$vigencia = $_POST["vigencia_promep_prodep"];
$estado = $_POST["estado_promep_prodep"];
$idusuario = "1815906";

$consulta = "INSERT INTO detalle_usuario_beneficios_promep /* tabla de destino */
(ies_solicitud,solicitud,vigencia,estado,usuario_idusuario) /* campos de destino, en el MISMO ORDEN que aparecen en la base de datos */
VALUES ('$ies_solicitud','$solicitud','$vigencia','$estado','$idusuario')"; /* valores a insertar en los campos de destino */

if ($resultado = $mysqli->query($consulta)) {
    header("Location: ../../../../../prodep.php"); //regresar a la convocatoria actual
}
else
{
    echo "Error en el registro a la base de datos: ".mysqli_error($mysqli); //o mostrar un error
}
mysqli_close($mysqli); //cerrar la base de datos
?>
