<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
$tipo_gestion = $_POST["tipo_gestion_prodep"];
$cargo_comision = $_POST["cargo_gestion_prodep"];
$funcion_encomendada = $_POST["funcion_gestion_prodep"];
$organo_colegiado = $_POST["organo_gestion_prodep"];
$resultados_obtenidos = $_POST["resultados_gestion_prodep"];
$aprobado = $_POST["aprobado_gestion_prodep"];
$fecha_inicio = $_POST["fecha_ini_ges"];
$fecha_fin = $_POST["fecha_fin_ges"];
$fecha_ultimo_informe = $_POST["fecha_ultimo_informe_ges"];
$horas_dedicadas_semana = $_POST["horas_semana_gestion_prodep"];
$estado_gestion = $_POST["estado_gestion_prodep"];
$idusuario = "1815906";

$consulta = "INSERT INTO detalle_usuario_gestion_academica /* tabla de destino */
(tipo_gestion,cargo_comision,funcion_encomendada,organo_colegiado,resultados_obtenidos,aprobado,fecha_inicio,fecha_fin,fecha_ultimo_informe,horas_dedicadas_semana,estado_gestion,usuario_idusuario) /* campos de destino, en el MISMO ORDEN que aparecen en la base de datos */
VALUES ('$tipo_gestion','$cargo_comision','$funcion_encomendada','$organo_colegiado','$resultados_obtenidos','$aprobado','$fecha_inicio','$fecha_fin','$fecha_ultimo_informe','$horas_dedicadas_semana','$estado_gestion','$idusuario')"; /* valores a insertar en los campos de destino */

if ($resultado = $mysqli->query($consulta)) {
    header("Location: ../../../../../prodep.php"); //regresar a la convocatoria actual
}
else
{
    echo "Error en el registro a la base de datos: ".mysqli_error($mysqli); //o mostrar un error
}
mysqli_close($mysqli); //cerrar la base de datos
?>
