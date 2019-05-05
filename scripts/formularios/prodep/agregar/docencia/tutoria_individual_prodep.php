<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
$tipo_apoyo = $_POST["tipo_apoyo_externo_promep_prodep"];
$nivel = $_POST["nivel_externo_promep_prodep"];
$fecha_inicio = $_POST["fecha_inicio_externo_promep_prodep"];
$fecha_fin = $_POST["fecha_fin_externo_promep_prodep"];
$monto = $_POST["monto_externo_promep_prodep"];
$idusuario = "1815906";

$consulta = "INSERT INTO detalle_usuario_beneficios_externos_promep /* tabla de destino */
(tipo_apoyo,nivel,fecha_inicio,fecha_fin,monto,usuario_idusuario) /* campos de destino, en el MISMO ORDEN que aparecen en la base de datos */
VALUES ('$tipo_apoyo','$nivel','$fecha_inicio','$fecha_fin','$monto','$idusuario')"; /* valores a insertar en los campos de destino */

if ($resultado = $mysqli->query($consulta)) {
    header("Location: ../../../../../prodep.php"); //regresar a la convocatoria actual
}
else
{
    echo "Error en el registro a la base de datos: ".mysqli_error($mysqli); //o mostrar un error
}
mysqli_close($mysqli); //cerrar la base de datos
?>
