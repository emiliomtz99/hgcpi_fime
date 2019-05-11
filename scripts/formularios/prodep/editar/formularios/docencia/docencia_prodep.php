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
$sql="SELECT * FROM detalle_usuario_docencia WHERE id='$ident' AND usuario_idusuario='1815906'";
$result=mysqli_query($mysqli,$sql);
$mostrar=mysqli_fetch_array($result);
?> 

<div class="modal-header">
    <h4 class="modal-title">Docencia</h4>
   <button class="close" data-dismiss="modal" aria-label="Cerrar">
        <span aria-hidden="true">&times;</span>
    </button>
 </div>
    <div class="modal-body">
    <form enctype="multipart/form-data" action="scripts/formularios/prodep/editar/docencia/docencia_prodep.php?ident=<?php echo($ident)?>" method="POST">                           
                                                                        
   <div class="form-group">
   <label for="descripcion" required>Nombre del curso:</label>
   <input type="text" class="form-control inst_certi" value="<?php echo $mostrar['nombre_curso']?>" name="nom_curso_docencia_prodep" placeholder="" required>
   </div>

<div class="form-group">
    
   <label for="descripcion" required> Institución de educación superior:</label>
   <input type="text" class="form-control inst_certi" value="<?php echo $mostrar['nombre_institucion_ies']?>" name="institucion_docencia_prodep" placeholder="" required>
   </div>                                                               

 <div class="form-group">
   <label for="descripcion" required>(Mayúsculas) <br> Dependencia de educación superior</label>
   <input type="text" class="form-control inst_certi" value="<?php echo $mostrar['dependencia']?>" name="dependencia_docencia_prodep" placeholder="" required>
   </div>

<div class="form-group">
   <label for="descripcion" required> (Mayúsculas) <br> Programa educativo </label>
   <input type="text" class="form-control inst_certi" value="<?php echo $mostrar['nombre_programa_educativo']?>" name="programa_educativo_docencia_prodep" placeholder="" required>
   </div>                                                           


<div class="form-group">
   <label for="descripcion" required> Nivel: </label>
   <input type="text" class="form-control inst_certi" value="<?php echo $mostrar['nivel']?>" name="nivel_docencia_prodep"placeholder="" required>
   </div> 

<div class="form-group">
   <label for="datepicker" class="control-label">Fecha de inicio de estudios:</label>
   <div class="controls">
   <input type="text" value="<?php echo $mostrar['fecha_inicio']?>" name="fecha_inicio_estudios_docencia" class="tuiker form-control" required>
   <label for="datepicker" class="input-group-addon generic_btn"><i class="fa fa-calendar" aria-hidden="true"></i></label>    
</div>


<div class="form-group">
   <label for="descripcion" required> Número de alumnos: </label>
   <input type="text" class="form-control inst_certi" value="<?php echo $mostrar['numero_alumnos']?>" name="no_alumnos_docencia_prodep"placeholder="" required>
   </div> 

  <div class="form-group">
   <label for="descripcion" required> Duración en semanas: </label>
   <input type="text" class="form-control inst_certi" value="<?php echo $mostrar['duracion_semanas']?>" name="duracion_semanas_docencia_prodep"placeholder="" required>
   </div>

  <div class="form-group">
   <label for="descripcion" required> Horas de asesoria al mes: </label>
   <input type="text" class="form-control inst_certi" value="<?php echo $mostrar['horas_asesoria_mes']?>" name="horas_docencia_mes_prodep"placeholder="" required>
   </div>

  <div class="form-group">
   <label for="descripcion" required> Horas semanales dedicadas a este curso: </label>
   <input type="text" class="form-control inst_certi" value="<?php echo $mostrar['horas_semanales_curso']?>" name="horas_docencia_semanal_prodep"placeholder="" required>
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