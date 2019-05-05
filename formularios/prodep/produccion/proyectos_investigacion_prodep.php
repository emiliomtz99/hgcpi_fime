 <div class="modal-header">
    <h4 class="modal-title">Producción de proyectos de investigación.</h4>
   <button class="close" data-dismiss="modal" aria-label="Cerrar">
        <span aria-hidden="true">&times;</span>
    </button>
 </div>
    <div class="modal-body">
    <form enctype="multipart/form-data" action="scripts/formularios/prodep/agregar/produccion/proyectos_investigacion_prodep.php" method="POST">
                                                                      


<div class="form-group">
    
   <label for="descripcion" required> Título: </label>
   <input type="text" class="form-control inst_certi" name="título_proyecto_investigacion_prodep" placeholder="" required>
   </div>     

<div class="form-group">
    <label for="descripcion" required> Nombre del patrocinador: </label>
   <input type="text" class="form-control inst_certi" name="patrocinador_proyecto_investigacion_prodep" placeholder="" required>
   </div>                  

   <div class="form-group">
   <label for="descripcion" required>(Separados por punto y coma)<br>Alumnos participantes:</label>
   <input type="text" class="form-control inst_certi" name="alumnos_proyecto_investigacion_prodep" placeholder="" required>
   </div>                                          

 <div class="form-group">
   <label for="descripcion" required>Actividades realizadas:</label>
   <input type="text" class="form-control inst_certi" name="actividades_proyecto_investigacion_prodep" placeholder="" required>
   </div>



<div class="form-group">
  <label for="cuerpo_proyecto_investigacion_prodep" required>Para considerar en el curriculum de cuerpo académico:</label>
  <select name="cuerpo_proyecto_investigacion_prodep" class="form-control custom-select" required>
  <option selected value="seleccione">Seleccione...</option>
  <option value="si">Si</option>
  <option value="si">No</option>
  </select>
</div>


<div class="form-group">
   <label for="descripcion" > (En caso de no haber escribir 0) <br> Miembros: </label>
   <input type="text" class="form-control inst_certi" name="miembros_proyecto_investigacions_prodep"placeholder="">
   </div>


<div class="form-group">
   <label for="descripcion" >  (En caso de no haber escribir 0) <br> LGACs: </label>
   <input type="text" class="form-control inst_certi" name="LGAC_proyecto_investigacion_prodep"placeholder="">
   </div>



   <div class="form-group">
   <label for="datepicker" class="control-label">Fecha de inicio:</label>
   <div class="controls">
   <input type="text" name="fecha_inicio" class="tuiker form-control" required>
   <label for="datepicker" class="input-group-addon generic_btn"><i class="fa fa-calendar" aria-hidden="true"></i></label>    
</div>

<div class="form-group">
   <label for="datepicker" class="control-label">Fecha de fin:</label>
   <div class="controls">
   <input type="text" name="fecha_fin" class="tuiker form-control" required>
   <label for="datepicker" class="input-group-addon generic_btn"><i class="fa fa-calendar" aria-hidden="true"></i></label>    
</div>

   <div class="form-group">
   <label for="descripcion" required> Tipo de patrocinador: </label>
   <input type="text" class="form-control inst_certi" name="tipo_patrocinador_proyecto_investigacion_prodep" placeholder="" required>
   </div>  


    <div class="form-group">
   <label for="descripcion" required>(Separados por punto y coma)<br>Investigadores participantes:</label>
   <input type="text" class="form-control inst_certi" name="investigadores_proyecto_investigacion_prodep" placeholder="" required>
   </div>        


<br>
<center><input class="btn btn-dark btn-lg" type="submit" value="Agregar"></center>
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