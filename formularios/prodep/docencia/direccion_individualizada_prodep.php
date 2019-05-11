    <div class="modal-header">
    <h4 class="modal-title">Dirección Individualizada</h4>
   <button class="close" data-dismiss="modal" aria-label="Cerrar">
        <span aria-hidden="true">&times;</span>
    </button>
 </div>
    <div class="modal-body">
    <form enctype="multipart/form-data" action="scripts/formularios/prodep/agregar/docencia/direccion_individualizada_prodep.php" method="POST">
                                                                      
                                                                        
   <div class="form-group">
   <label for="descripcion" required>Título de tesis o proyecto individual:</label>
   <input type="text" class="form-control inst_certi" name="titulo_direccion_prodep" placeholder="" required>
   </div>

<div class="form-group">
    
   <label for="descripcion" required> Grado academico:</label>
   <input type="text" class="form-control inst_certi" name="grado_direccion_prodep" placeholder="" required>
   </div>                                                               

 <div class="form-group">
   <label for="descripcion" required>(Mayúsculas) <br> Dependencia de educación superior</label>
   <input type="text" class="form-control inst_certi" name="dependencia_docencia_prodep" placeholder="" required>
   </div>
                                        

<div class="form-group">
   <label for="datepicker" class="control-label">Fecha de inicio:</label>
   <div class="controls">
   <input type="text" name="fecha_inicio_dir_in" class="tuiker form-control" required>
   <label for="datepicker" class="input-group-addon generic_btn"><i class="fa fa-calendar" aria-hidden="true"></i></label>    
</div>

<div class="form-group">
   <label for="datepicker" class="control-label">Fecha de fin:</label>
   <div class="controls">
   <input type="text" name="fecha_fin_dir_in" class="tuiker form-control" required>
   <label for="datepicker" class="input-group-addon generic_btn"><i class="fa fa-calendar" aria-hidden="true"></i></label>    
</div>

<div class="form-group">
   <label for="descripcion" required> Número de alumnos: </label>
   <input type="text" class="form-control inst_certi" name="no_alumnos_direccion_prodep"placeholder="" required>
   </div>

<div class="form-group">
   <label for="descripcion" required> Estado de la dirección individualizada: </label>
   <input type="text" class="form-control inst_certi" name="estado_direccion_prodep"placeholder="" required>
   </div> 

<div class="form-group">
  <label for="cuerpo_direccion_prodep" required>Para considerar en el curriculum de cuerpo académico:</label>
  <select name="curriculum_direccion_prodep" class="form-control custom-select" required>
  <option selected value="seleccione">Seleccione...</option>
  <option value="si">Si</option>
  <option value="si">No</option>
  </select>
</div>


<div class="form-group">
   <label for="descripcion" required> (En caso de que no existan escribir 0) <br> Miembros: </label>
   <input type="text" class="form-control inst_certi" name="miembros_direccion_prodep"placeholder="" required>
   </div>

<div class="form-group">
   <label for="descripcion" required> (En caso de que no existan escribir 0) <br> LGAC: </label>
   <input type="text" class="form-control inst_certi" name="LGAC_direccion_prodep"placeholder="" required>
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