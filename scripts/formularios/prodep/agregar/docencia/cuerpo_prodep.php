<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
$cuerpo_academico_clave = $_POST["clave_cuerpo_prodep"];
$nombre_cuerpo_academico = $_POST["nombre_cuerpo_prodep"];
$grado_consolacion = $_POST["grado_cuerpo_prodep"];
$linea_cultiva_cuerpo_academico = $_POST["linea_cuerpo_prodep"];
$idusuario = "1815906";

$consulta = "INSERT INTO detalle_usuario_cuerpo_academico /* tabla de destino */
(cuerpo_academico_clave,nombre_cuerpo_academico,grado_consolacion,linea_cultiva_cuerpo_academico,usuario_idusuario) /* campos de destino, en el MISMO ORDEN que aparecen en la base de datos */
VALUES ('$cuerpo_academico_clave','$nombre_cuerpo_academico','$grado_consolacion','$linea_cultiva_cuerpo_academico','$idusuario')"; /* valores a insertar en los campos de destino */

if ($resultado = $mysqli->query($consulta)) {
    header("Location: ../../../../../prodep.php"); //regresar a la convocatoria actual
}
else
{
    echo "Error en el registro a la base de datos: ".mysqli_error($mysqli); //o mostrar un error
}
mysqli_close($mysqli); //cerrar la base de datos
?>
