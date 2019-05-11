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
$sql="SELECT * FROM detalle_usuario_premios_y_distinciones WHERE id='$ident' AND usuario_idusuario='1815906'";
$result=mysqli_query($mysqli,$sql);
$mostrar=mysqli_fetch_array($result);
?> 

<div class="modal-header">
    <h4 class="modal-title">Premios y distinciones</h4>
   <button class="close" data-dismiss="modal" aria-label="Cerrar">
        <span aria-hidden="true">&times;</span>
    </button>
 </div>
    <div class="modal-body">
    <form enctype="multipart/form-data" action="scripts/formularios/prodep/editar/curriculum/premios_distinciones.php?ident=<?php echo($ident)?>" method="POST">
                                                                      
                                                                        
   <div class="form-group">
   <label for="descripcion" required> Nombre del premio o distinción:</label>
   <input type="text" class="form-control inst_certi" value="<?php echo $mostrar['nombre_distincion']?>" name="premio_distincion_prodep" placeholder="" required>
   </div>

<div class="form-group">
    
   <label for="descripcion" required> Motivo: </label>
   <input type="text" class="form-control inst_certi" value="<?php echo $mostrar['motivo']?>"name="motivo_premio" placeholder="" required>
   </div>                                                               

<div class="form-group">
   <label for="datepicker" class="control-label">Fecha:</label>
   <div class="controls">
   <input type="text" value="<?php echo $mostrar['fecha']?>" name="fecha_premio" class="tuiker form-control" required>
   <label for="datepicker" class="input-group-addon generic_btn"><i class="fa fa-calendar" aria-hidden="true"></i></label>    
</div>
             
<div class="form-group">
   <label for="descripcion" required> Institución otorgante:</label>
   <input type="text" class="form-control inst_certi" value="<?php echo $mostrar['institucion_que_otorga']?>" name="institucion_premio" placeholder="" required>
   </div>                                                           


<div class="form-group">
   <label for="descripcion"> (Puede ir vacío.) <br> Institución otorgante no considerada en el catálogo: </label>
   <input type="text" class="form-control inst_certi" value="<?php echo $mostrar['institucion_otorgante_no_considerada']?>" name="institucion_no_catalogo_premio"placeholder="">
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