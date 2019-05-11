<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 

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
$miembros = $_POST["miembros_memorias_prodep"];
$lgacs = $_POST["LGAC_memorias_prodep"];
$autores_colaboradores = $_POST["autores_memorias_prodep"];


$idusuario = "1815906";


$consulta = "INSERT INTO detalle_usuario_memorias /* tabla de destino */
(proposito,titulo_de_obra,congreso_donde_se_presento,de_pagina,a_pagina,ano_publicacion,pais,estado,ciudad,estado_actual,considerar_curriculum,miembros,lgacs,autores_colaboradores,usuario_idusuario) /* campos de destino, en el MISMO ORDEN que aparecen en la base de datos */

VALUES ('$proposito','$titulo_de_obra','$congreso_donde_se_presento','$de_pagina','$a_pagina','$ano_publicacion','$pais','$estado','$ciudad','$estado_actual','$considerar_curriculum','$miembros','$lgacs',$autores_colaboradores,'$idusuario')"; /* valores a insertar en los campos de destino */

if ($resultado = $mysqli->query($consulta)) {
    header("Location: ../../../../../prodep.php"); //regresar a la convocatoria actual
}
else
{
    echo "Error en el registro a la base de datos: ".mysqli_error($mysqli); //o mostrar un error
}
mysqli_close($mysqli); //cerrar la base de datos
?>
