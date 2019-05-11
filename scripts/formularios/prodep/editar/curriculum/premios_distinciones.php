<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
$ident = $_GET['ident'];

$nombre_distincion = $_POST["premio_distincion_prodep"];
$institucion_que_otorga = $_POST["institucion_premio"];
$motivo = $_POST["motivo_premio"];
$institucion_otorgante_no_considerada = $_POST["institucion_no_catalogo_premio"];
$fecha = $_POST["fecha_premio"];

$idusuario = "1815906";


$sql="UPDATE detalle_usuario_premios_y_distinciones 
SET 
nombre_distincion='$nombre_distincion',
institucion_que_otorga='$institucion_que_otorga',
motivo='$motivo',
institucion_otorgante_no_considerada='$institucion_otorgante_no_considerada',
fecha='$fecha'


WHERE id='$ident' 
AND usuario_idusuario='$idusuario'";

if($result=mysqli_query($mysqli,$sql))
{
  header("Location: ../../../../../prodep.php");
}
?>