<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
$ident = $_GET['ident'];


$proposito = $_POST["proposito_memorias_prodep"];
$titulo_de_obra = $_POST["título_memorias_prodep"];
$congreso_donde_se_presento = $_POST["congreso_memorias_prodep"];
$de_pagina = $_POST["de_memorias_prodep"];
$a_pagina = $_POST["a_memorias_prodep"];
$ano_publicacion = $_POST["año_memorias_prodep"];
$pais = $_POST["pais_memorias_prodep"];
$estado = $_POST["estado_memorias_prodep"];
$ciudad = $_POST["ciudad_memorias_prodep"];
$estado_actual = $_POST["estado_actual_memorias_prodep"];
$considerar_curriculum = $_POST["cuerpo_memorias_prodep"];
$miembros = $_POST["miembros_memoriass_prodep"];
$lgacs = $_POST["LGAC_memoriass_prodep"];
$autores_colaboradores = $_POST["autores_memorias_prodep"];



$idusuario = "1815906";


$sql="UPDATE detalle_usuario_memorias 
SET 

proposito='$proposito',
titulo_de_obra='$titulo_de_obra',
congreso_donde_se_presento='$congreso_donde_se_presento',
de_pagina='$de_pagina',
a_pagina='$a_pagina',
pais='$pais',
estado='$estado',
ciudad='$ciudad',
estado_actual='$estado_actual',
considerar_curriculum='$considerar_curriculum',
miembros='$miembros',
lgacs='$lgacs',
autores_colaboradores='$autores_colaboradores'


WHERE id='$ident' 
AND usuario_idusuario='$idusuario'";

if($result=mysqli_query($mysqli,$sql))
{
  header("Location: ../../../../../prodep.php");
}
?>

