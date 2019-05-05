<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
$titulo_proyecto_dirigido = $_POST["titulo_direccion_prodep"];
$estado_de_direccion = $_POST["estado_direccion_prodep"];
$fecha_de_inicio = $_POST["fecha_inicio_dir_in"];
$fecha_de_fin = $_POST["fecha_fin_dir_in"];
$grado_academico = $_POST["grado_direccion_prodep"];
$numero_estudiantes = $_POST["no_alumnos_direccion_prodep"];
$ies_realiza_gestion = $_POST["dependencia_docencia_prodep"];
$considerar_curriculum = $_POST["curriculum_direccion_prodep"];
$miembros = $_POST["miembros_direccion_prodep"];
$lgacs = $_POST["LGAC_direccion_prodep"];
$idusuario = "1815906";

$consulta = "INSERT INTO detalle_usuario_direccion_individualizada /* tabla de destino */
(titulo_proyecto_dirigido,estado_de_direccion,fecha_de_inicio,fecha_de_fin,grado_academico,numero_estudiantes,ies_realiza_gestion,considerar_curriculum,miembros,lgacs,usuario_idusuario) /* campos de destino, en el MISMO ORDEN que aparecen en la base de datos */
VALUES ('$titulo_proyecto_dirigido','$estado_de_direccion','$fecha_de_inicio','$fecha_de_fin','$grado_academico','$numero_estudiantes','$ies_realiza_gestion', '$considerar_curriculum', '$miembros','$lgacs','$idusuario')"; /* valores a insertar en los campos de destino */

if ($resultado = $mysqli->query($consulta)) {
    header("Location: ../../../../../prodep.php"); //regresar a la convocatoria actual
}
else
{
    echo "Error en el registro a la base de datos: ".mysqli_error($mysqli); //o mostrar un error
}
mysqli_close($mysqli); //cerrar la base de datos
?>
