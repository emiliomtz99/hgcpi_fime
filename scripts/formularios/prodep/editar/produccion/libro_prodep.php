<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
$ident = $_GET['ident'];


$proposito = $_POST["proposito_libro_prodep"];
$isbn = $_POST["isbn_libro_prodep"];
$titulo = $_POST["título_libro_prodep"];
$tipo_participacion = $_POST["participacion_libro_prodep"];
$estado_actual = $_POST["estado_libro_prodep"];
$pais = $_POST["pais_libro_prodep"];
$ano_publicacion = $_POST["ano_libro_prodep"];
$editorial = $_POST["editorial_libro_prodep"];
$edicion = $_POST["ediciones_libro_prodep"];
$total_ejemplares = $_POST["ejemplares_libro_prodep"];
$considerar_curriculum = $_POST["cuerpo_libro_prodep"];
$miembros = $_POST["miembros_libros_prodep"];
$autores = $_POST["autores_libro_prodep"];
$lgacs = $_POST["LGAC_libros_prodep"];


$idusuario = "1815906";


$sql="UPDATE detalle_usuario_produccion_libros 
SET 

proposito='$proposito',
isbn='$isbn',
titulo='$titulo',
tipo_participacion='$tipo_participacion',
estado_actual='$estado_actual',
pais='$pais',
ano_publicacion='$ano_publicacion',
editorial='$editorial',
edicion='edicion',
total_ejemplares='$total_ejemplares',
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