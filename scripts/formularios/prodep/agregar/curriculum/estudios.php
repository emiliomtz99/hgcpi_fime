<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
$nivel_estudios = $_POST["nivel_estudios"];
$titulo = $_POST["estudios_en"];
$fecha_inicio = $_POST["fecha_ini_estudios"];
$fecha_fin = $_POST["fecha_fin_estudios"];
$fecha_obtencion_titulo = $_POST["fecha_titulo"];
$nombre_institucion = $_POST["institucion_otorgante"];
$pais_institucion = $_POST["pais_estudios"];
$disciplina = $_POST["area"];
$idusuario = "1815906";

$consulta = "INSERT INTO detalle_usuario_grados_acad /* tabla de destino */
(nivel_estudios,titulo,fecha_inicio,fecha_fin,fecha_obtencion_titulo,nombre_institucion,pais_institucion,disciplina,usuario_idusuario) /* campos de destino, en el MISMO ORDEN que aparecen en la base de datos */
VALUES ('$nivel_estudios','$titulo','$fecha_inicio','$fecha_fin','$fecha_obtencion_titulo','$nombre_institucion','$pais_institucion','$disciplina','$idusuario')"; /* valores a insertar en los campos de destino */

if ($resultado = $mysqli->query($consulta)) {
    header("Location: ../../../../../prodep.php"); //regresar a la convocatoria actual
}
else
{
    echo "Error en el registro a la base de datos: ".mysqli_error($mysqli); //o mostrar un error
}
mysqli_close($mysqli); //cerrar la base de datos
?>
