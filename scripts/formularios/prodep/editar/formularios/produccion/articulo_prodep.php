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
$sql="SELECT * FROM detalle_usuario_prod_articulos WHERE id='$ident' AND usuario_idusuario='1815906'";
$result=mysqli_query($mysqli,$sql);
$mostrar=mysqli_fetch_array($result);
?> 

 <div class="modal-header">
    <h4 class="modal-title">Producción de artículos.</h4>
   <button class="close" data-dismiss="modal" aria-label="Cerrar">
        <span aria-hidden="true">&times;</span>
    </button>
 </div>
    <div class="modal-body">
    <form enctype="multipart/form-data" action="scripts/formularios/prodep/editar/produccion/articulo_prodep.php?ident=<?php echo($ident)?>" method="POST">
                                                                      
                                                                        
   <div class="form-group">
   <label for="descripcion" required>(Separados por punto y coma)<br>Autores:</label>
   <input type="text" class="form-control inst_certi" value="<?php echo $mostrar['autores']?>" name="autores_articulo_prodep" placeholder="" required>
   </div>

<div class="form-group">
    
   <label for="descripcion" required> Título: </label>
   <input type="text" class="form-control inst_certi" value="<?php echo $mostrar['nombre_art']?>" name="título_articulo_prodep" placeholder="" required>
   </div>                                                               

 <div class="form-group">
   <label for="descripcion" required>Estado actual:</label>
   <input type="text" class="form-control inst_certi" value="<?php echo $mostrar['estado_art']?>" name="estado_articulo_prodep" placeholder="" required>
   </div>

<div class="form-group">
   <label for="descripcion" required> Pais: </label>
   <input type="text" class="form-control inst_certi" value="<?php echo $mostrar['pais']?>" name="pais_articulo_prodep" placeholder="" required>
   </div>          

   <div class="form-group">
   <label for="descripcion" required> Nombre de la revista: </label>
   <input type="text" class="form-control inst_certi" value="<?php echo $mostrar['nombre_revista']?>" name="revista_articulo_prodep" placeholder="" required>
   </div>   

   <div class="form-group">
   <label for="descripcion" required> Nombre de la editorial: </label>
   <input type="text" class="form-control inst_certi" value="<?php echo $mostrar['editorial']?>" name="editorial_articulo_prodep" placeholder="" required>
   </div>                                                               

<div class="form-group">
   <label for="descripcion" required> Volumen: </label>
   <input type="text" class="form-control inst_certi" value="<?php echo $mostrar['volumen_revista']?>" name="volumen_articulo_prodep" placeholder="" required>
   </div>       

   <div class="form-group">
   <label for="descripcion" required> ISSN: </label>
   <input type="text" class="form-control inst_certi" value="<?php echo $mostrar['issn']?>" name="ISSN_articulo_prodep" placeholder="" required>
   </div>       

    <div class="form-group">
   <label for="descripcion" required> (9999) <br>  Año de publicación: </label>
   <input type="text" class="form-control inst_certi" value="<?php echo $mostrar['ano_publicacion']?>"  name="ano_articulo_prodep" placeholder="" required>
   </div>       

   <div class="form-group">
   <label for="descripcion" required> Propósito: </label>
   <input type="text" class="form-control inst_certi" value="<?php echo $mostrar['proposito']?>" name="proposito_articulo_prodep" placeholder="" required>
   </div>  

<div class="form-group">
  <label for="cuerpo_articulo_prodep" required>Para considerar en el curriculum de cuerpo académico:</label>
  <select name="cuerpo_articulo_prodep" class="form-control custom-select" required>
  <option value="<?php echo $mostrar['considerar_curriculum']?>"><?php echo $mostrar['considerar_curriculum']?></option>
   <option value="Si">Si</option>
  <option value="No">No</option>
  </select>
</div>


<div class="form-group">
   <label for="descripcion" > (En caso de no haber escribir 0) <br> Miembros: </label>
   <input type="text" class="form-control inst_certi" value="<?php echo $mostrar['miembros']?>" name="miembros_articulos_prodep"placeholder="">
   </div>


<div class="form-group">
   <label for="descripcion" >  (En caso de no haber escribir 0) <br> LGACs: </label>
   <input type="text" class="form-control inst_certi" value="<?php echo $mostrar['lgacs']?>" name="LGAC_articulos_prodep"placeholder="">
   </div>

<br>
<center><input class="btn btn-dark btn-lg" type="submit" value="Actualizar"></center>
<br>
</form>
</div>

<script type="text/javascript">
        $('.tuiker').datepicker({
            //adecuando formato de fecha
            dateFormat: "yy/mm/dd",
            //primer dia sea lunes
            firstDay: 1,
            //Nombres de los dias
            dayNames: ["Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado"],
            //Abreviatura de los dias largos
            dayNamesMin: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa"],
            //Escribir los meses
            monthNames: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
            //Abreviatura de los meses
            monthNamesShort: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],
            onSelect: function(dateText){
                $('#fecha').val(dateText);
            }
        });
</script>