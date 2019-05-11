<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 


$proposito = $_POST["proposito_articulo_prodep"];
$issn = $_POST["ISSN_articulo_prodep"];
$nombre_art = $_POST["título_articulo_prodep"];
$estado_art = $_POST["estado_articulo_prodep"];
$pais = $_POST["pais_articulo_prodep"];
$nombre_revista = $_POST["revista_articulo_prodep"];
$editorial = $_POST["editorial_articulo_prodep"];
$volumen_revista = $_POST["volumen_articulo_prodep"];
$ano_publicacion = $_POST["año_articulo_prodep"];
$considerar_curriculum = $_POST["cuerpo_articulo_prodep"];
$miembros = $_POST["miembros_articulos_prodep"];
$autores = $_POST["autores_articulo_prodep"];
$lgacs = $_POST["LGAC_articulos_prodep"];
$idusuario = "1815906";

$consulta = "INSERT INTO detalle_usuario_prod_articulos /* tabla de destino */
(proposito,issn,nombre_art,estado_art,pais,nombre_revista,editorial,volumen_revista,ano_publicacion,considerar_curriculum,miembros,autores,lgacs,usuario_idusuario) /* campos de destino, en el MISMO ORDEN que aparecen en la base de datos */
VALUES ('$proposito','$issn','$nombre_art','$estado_art','$pais','$nombre_revista','$editorial','$volumen_revista','$ano_publicacion','$considerar_curriculum','$miembros','$autores','$lgacs','$idusuario')"; /* valores a insertar en los campos de destino */

if ($resultado = $mysqli->query($consulta)) {
    header("Location: ../../../../../prodep.php"); //regresar a la convocatoria actual
}
else
{
    echo "Error en el registro a la base de datos: ".mysqli_error($mysqli); //o mostrar un error
}
mysqli_close($mysqli); //cerrar la base de datos
?>
