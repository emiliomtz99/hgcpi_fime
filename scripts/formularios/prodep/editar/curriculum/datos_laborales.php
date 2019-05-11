<?php

$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

/* RECIBIR LAS VARIABLES DESDE EL FORMULARIO */ 
$ident = $_GET['ident'];

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


$sql="UPDATE detalle_usuario_experiencia_laboral 
SET 
empleo_actual='$empleo_actual',
institucion='$institucion',
dependencia='$dependencia',
unidad_academica='$unidad_academica',
tipo_nombramiento='$tipo_nombramiento',  
asociado_a='$asociado_a',
fecha_inicio='$fecha_inicio', 
fecha_fin='$fecha_fin',  
cronologia='$cronologia'  


WHERE id='$ident' 
AND usuario_idusuario='$idusuario'";

if($result=mysqli_query($mysqli,$sql))
{
  header("Location: ../../../../../prodep.php");
}
?>