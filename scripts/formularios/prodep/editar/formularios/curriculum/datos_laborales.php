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
$sql="SELECT * FROM detalle_usuario_experiencia_laboral WHERE id='$ident' AND usuario_idusuario='1815906'";
$result=mysqli_query($mysqli,$sql);
$mostrar=mysqli_fetch_array($result);
?> 

<div class="modal-header">
    <h4 class="modal-title">Datos laborales</h4>
   <button class="close" data-dismiss="modal" aria-label="Cerrar">
        <span aria-hidden="true">&times;</span>
    </button>
 </div>
    <div class="modal-body">
    <form enctype="multipart/form-data" action="scripts/formularios/prodep/editar/curriculum/datos_laborales.php?ident=<?php echo($ident)?>" method="POST">                     
                                                                        
   <div class="form-group">
   <label for="descripcion" required>(Mayúsculas) <br> Asociado a:</label>
   <input type="text" class="form-control inst_certi" name="asociado" value="<?php echo $mostrar['asociado_a']?>" placeholder="" required>
   </div>

<div class="form-group">
    
   <label for="descripcion" required> Tipo de nombramiento:</label>
   <input type="text" class="form-control inst_certi" name="tipo_nombramiento"  value="<?php echo $mostrar['tipo_nombramiento']?>" placeholder="" required>
   </div>                                                               

 <div class="form-group">
   <label for="descripcion" required>Dedicación</label>
   <input type="text" class="form-control inst_certi" name="dedicacion" value="<?php echo $mostrar['empleo_actual']?>"placeholder="" required>
   </div>

<div class="form-group">
   <label for="descripcion" required> Institución de educación superior:</label>
   <input type="text" class="form-control inst_certi" name="institucion_edu_superior" value="<?php echo $mostrar['institucion']?>" placeholder="" required>
   </div>                                                           

<div class="form-group">
   <label for="descripcion" required> Dependencia de educación superior: </label>
   <input type="text" class="form-control inst_certi" value="<?php echo $mostrar['dependencia']?>" name="dependencia_edu_superior"placeholder="" required>
   </div>    

<div class="form-group">
   <label for="descripcion"> (Puede ir vacio)<br>  Unidad Académica: </label>
   <input type="text" class="form-control inst_certi" name="unidad_academica" value="<?php echo $mostrar['unidad_academica']?>" placeholder="">
   </div>                                                    

<div class="form-group">
   <label for="datepicker" class="control-label">Inicio de contrato:</label>
   <div class="controls">
   <input type="text" value="<?php echo $mostrar['fecha_inicio']?>" name="inicio_contrato" class="tuiker form-control" required>
   <label for="datepicker" class="input-group-addon generic_btn"><i class="fa fa-calendar" aria-hidden="true"></i></label>    
</div>
             

<div class="form-group">
   <label for="datepicker" class="control-label">Fin contrato:</label>
   <div class="controls">
   <input type="text" value="<?php echo $mostrar['fecha_fin']?>" name="fin_contrato" class="tuiker form-control" required>
   <label for="datepicker" class="input-group-addon generic_btn"><i class="fa fa-calendar" aria-hidden="true"></i></label>    
</div>
             

<div class="form-group">
   <label for="descripcion" required>Cronología:</label>
   <input type="text" value="<?php echo $mostrar['cronologia']?>" class="form-control inst_certi" name="cronologia" placeholder="" required>
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