<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
$ident = $_GET['ident'];


$proposito = $_POST["proposito_articulo_prodep"];
$issn = $_POST["ISSN_articulo_prodep"];
$nombre_art = $_POST["título_articulo_prodep"];
$estado_art = $_POST["estado_articulo_prodep"];
$pais = $_POST["pais_articulo_prodep"];
$nombre_revista = $_POST["revista_articulo_prodep"];
$editorial = $_POST["editorial_articulo_prodep"];
$volumen_revista = $_POST["volumen_articulo_prodep"];
$ano_publicacion = $_POST["ano_articulo_prodep"];
$considerar_curriculum = $_POST["cuerpo_articulo_prodep"];
$miembros = $_POST["miembros_articulos_prodep"];
$autores = $_POST["autores_articulo_prodep"];
$lgacs = $_POST["LGAC_articulos_prodep"];


$idusuario = "1815906";


$sql="UPDATE detalle_usuario_prod_articulos 
SET 

proposito='$proposito',
issn='$issn',
nombre_art='$nombre_art',
estado_art='$estado_art',
pais='$pais',
nombre_revista='$nombre_revista',
editorial='$editorial',
volumen_revista='$volumen_revista',
ano_publicacion='$ano_publicacion',
considerar_curriculum='$considerar_curriculum',
miembros='$miembros',
autores='$autores',
lgacs='$lgacs'



WHERE id='$ident' 
AND usuario_idusuario='$idusuario'";

if($result=mysqli_query($mysqli,$sql))
{
  header("Location: ../../../../../prodep.php");
}
?>