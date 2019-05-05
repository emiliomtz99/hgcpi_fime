<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
$nombre_distincion = $_POST["premio_distincion_prodep"];
$institucion_que_otorga = $_POST["institucion_premio"];
$motivo = $_POST["motivo_premio"];
$institucion_otorgante_no_considerada = $_POST["institucion_no_catalogo_premio"];
$fecha = $_POST["fecha_premio"];
$idusuario = "1815906";

$consulta = "INSERT INTO detalle_usuario_premios_y_distinciones /* tabla de destino /  Motivo, fecha, institucion otorgante no */
(nombre_distincion,institucion_que_otorga,motivo,institucion_otorgante_no_considerada,fecha,usuario_idusuario) /* campos de destino, en el MISMO ORDEN que aparecen en la base de datos */
VALUES ('$nombre_distincion','$institucion_que_otorga','$motivo','$institucion_otorgante_no_considerada','$fecha','$idusuario')"; /* valores a insertar en los campos de destino */

if ($resultado = $mysqli->query($consulta)) {
    header("Location: ../../../../../prodep.php"); //regresar a la convocatoria actual
}
else
{
    echo "Error en el registro a la base de datos: ".mysqli_error($mysqli); //o mostrar un error
}
mysqli_close($mysqli); //cerrar la base de datos
?>
