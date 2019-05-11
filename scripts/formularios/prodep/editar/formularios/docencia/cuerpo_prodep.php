<?php 
$mysqli = new mysqli("localhost", "root", "", "hgcpi"); //conectar a la base de datos
/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}
/* RECIBIR EL ID DEL REGISTRO DESDE EL BOTON */ 
$ident = $_GET['ident'];
/* OBTENER LOS DATOS YA INGRESADOS DEL REGISTRO */
$sql="SELECT * FROM detalle_usuario_cuerpo_academico WHERE id='$ident' AND usuario_idusuario='1815906'";
$result=mysqli_query($mysqli,$sql);
$mostrar=mysqli_fetch_array($result);
?> 

 <div class="modal-header">
    <h4 class="modal-title">Cuerpo Académico</h4>
   <button class="close" data-dismiss="modal" aria-label="Cerrar">
        <span aria-hidden="true">&times;</span>
    </button>
 </div>
    <div class="modal-body">
    <form enctype="multipart/form-data" action="scripts/formularios/prodep/editar/docencia/cuerpo_prodep.php?ident=<?php echo($ident)?>" method="POST">          
                                                                      
                                                                        
   <div class="form-group">
   <label for="descripcion" >Nombre:</label>
   <input type="text" class="form-control inst_certi" value="<?php echo $mostrar['nombre_cuerpo_academico']?>" name="nombre_cuerpo_prodep" placeholder="">
   </div>

<div class="form-group">
    
   <label for="descripcion" >Clave: </label>
   <input type="text" class="form-control inst_certi" value="<?php echo $mostrar['cuerpo_academico_clave']?>" name="clave_cuerpo_prodep" placeholder="">
   </div>                                                               

 <div class="form-group">
   <label for="descripcion" >Grado de consolación:</label>
   <input type="text" class="form-control inst_certi" value="<?php echo $mostrar['grado_consolacion']?>" name="grado_cuerpo_prodep" placeholder="">
   </div>

 <div class="form-group">
   <label for="descripcion" >Lineas que cautiva el cuerpo académico:</label>
   <input type="text" class="form-control inst_certi" value="<?php echo $mostrar['linea_cultiva_cuerpo_academico']?>" name="linea_cuerpo_prodep" placeholder="">
   </div>


<br>
<center><input class="btn btn-dark btn-lg" type="submit" value="Actualizar"></center>
<br>
</form>
</div>
