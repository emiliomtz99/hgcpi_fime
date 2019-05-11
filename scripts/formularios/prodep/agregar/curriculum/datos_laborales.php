<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
$empleo_actual = $_POST["dedicacion"];
$institucion = $_POST["institucion_edu_superior"];
$dependencia = $_POST["dependencia_edu_superior"];
$unidad_academica = $_POST["unidad_academica"];
$tipo_nombramiento = $_POST["tipo_nombramiento"];
$asociado_a = $_POST["asociado"];
$fecha_inicio = $_POST["inicio_contrato"];
$fecha_fin = $_POST["fin_contrato"];
$cronologia = $_POST["cronologia"];
$idusuario = "1815906";

$consulta = "INSERT INTO detalle_usuario_experiencia_laboral /* tabla de destino */
(empleo_actual,institucion,dependencia,unidad_academica,tipo_nombramiento,asociado_a,fecha_inicio,fecha_fin,cronologia,usuario_idusuario) /* campos de destino, en el MISMO ORDEN que aparecen en la base de datos */
VALUES ('$empleo_actual','$institucion','$dependencia','$unidad_academica','$tipo_nombramiento','$asociado_a','$fecha_inicio','$fecha_fin', '$cronologia','$idusuario')"; /* valores a insertar en los campos de destino */

if ($resultado = $mysqli->query($consulta)) {
    header("Location: ../../../../../prodep.php"); //regresar a la convocatoria actual
}
else
{
    echo "Error en el registro a la base de datos: ".mysqli_error($mysqli); //o mostrar un error
}
mysqli_close($mysqli); //cerrar la base de datos
?>
