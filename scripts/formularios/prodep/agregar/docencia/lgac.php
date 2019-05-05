<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
$linea = $_POST["linea_lgac"];
$actividades_que_realiza = $_POST["actividades_lgac"];
$horas_semana_dedicadas = $_POST["horas_semana_lgac"];
$idusuario = "1815906";

$consulta = "INSERT INTO detalle_usuario_lgac /* tabla de destino */
(linea,actividades_que_realiza,horas_semana_dedicadas,usuario_idusuario) /* campos de destino, en el MISMO ORDEN que aparecen en la base de datos */
VALUES ('$linea','$actividades_que_realiza','$horas_semana_dedicadas','$idusuario')"; /* valores a insertar en los campos de destino */

if ($resultado = $mysqli->query($consulta)) {
    header("Location: ../../../../../prodep.php"); //regresar a la convocatoria actual
}
else
{
    echo "Error en el registro a la base de datos: ".mysqli_error($mysqli); //o mostrar un error
}
mysqli_close($mysqli); //cerrar la base de datos
?>
