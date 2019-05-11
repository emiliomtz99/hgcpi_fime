<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 

$proposito = $_POST["proposito_libro_prodep"];
$isbn = $_POST["isbn_libro_prodep"];
$titulo = $_POST["título_libro_prodep"];
$tipo_participacion = $_POST["participacion_libro_prodep"];
$estado_actual = $_POST["estado_libro_prodep"];
$pais = $_POST["pais_libro_prodep"];
$ano_publicacion = $_POST["año_libro_prodep"];
$editorial = $_POST["editorial_libro_prodep"];
$edicion = $_POST["ediciones_libro_prodep"];
$total_ejemplares = $_POST["ejemplares_libro_prodep"];
$considerar_curriculum = $_POST["cuerpo_libro_prodep"];
$autores = $_POST["autores_libro_prodep"];
$miembros = $_POST["miembros_libros_prodep"];
$lgacs = $_POST["LGAC_libros_prodep"];
$idusuario = "1815906";

$consulta = "INSERT INTO detalle_usuario_produccion_libros /* tabla de destino */
(proposito,isbn,titulo,tipo_participacion,estado_actual,pais,ano_publicacion,editorial,edicion,total_ejemplares,considerar_curriculum,miembros,autores,lgacs,usuario_idusuario) /* campos de destino, en el MISMO ORDEN que aparecen en la base de datos */
VALUES ('$proposito','$isbn','$titulo','$tipo_participacion','$estado_actual','$pais','$ano_publicacion','$editorial','$edicion','$total_ejemplares','$considerar_curriculum','$miembros','$autores','$lgacs','$idusuario')"; /* valores a insertar en los campos de destino */

if ($resultado = $mysqli->query($consulta)) {
    header("Location: ../../../../../prodep.php"); //regresar a la convocatoria actual
}
else
{
    echo "Error en el registro a la base de datos: ".mysqli_error($mysqli); //o mostrar un error
}
mysqli_close($mysqli); //cerrar la base de datos
?>
