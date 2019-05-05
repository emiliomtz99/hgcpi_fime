 <div class="modal-header">
    <h4 class="modal-title">Gestion académica</h4>
   <button class="close" data-dismiss="modal" aria-label="Cerrar">
        <span aria-hidden="true">&times;</span>
    </button>
 </div>
    <div class="modal-body">
    <form enctype="multipart/form-data" action="scripts/formularios/prodep/agregar/docencia/gestion_prodep.php" method="POST">
                                                                      
                                                                        
   <div class="form-group">
   <label for="descripcion" required>Tipo de gestion:</label>
   <input type="text" class="form-control inst_certi" name="tipo_gestion_prodep" placeholder="" required>
   </div>

<div class="form-group">
    
   <label for="descripcion" required> Cargo dentro de la comisión o cuerpo colegiado: </label>
   <input type="text" class="form-control inst_certi" name="cargo_gestion_prodep" placeholder="" required>
   </div>                                                               

 <div class="form-group">
   <label for="descripcion" required>Función encomendada:</label>
   <input type="text" class="form-control inst_certi" name="funcion_gestion_prodep" placeholder="" required>
   </div>

<div class="form-group">
   <label for="descripcion" required> (Mayúsculas) <br> Órgano colegiado al que fue presentado: </label>
   <input type="text" class="form-control inst_certi" name="organo_gestion_prodep" placeholder="" required>
   </div>                                                           



<div class="form-group">
  <label for="aprobado_gestion_prodep" required>Aprobado:</label>
  <select name="aprobado_gestion_prodep" class="form-control custom-select" required>
  <option selected value="seleccione">Seleccione...</option>
  <option value="si">Si</option>
  <option value="si">No</option>
  </select>
</div>


<div class="form-group">
   <label for="descripcion" > (Puede ir vacio) <br> Resultados obtenidos: </label>
   <input type="text" class="form-control inst_certi" name="resultados_gestion_prodep"placeholder="">
   </div>


<div class="form-group">
   <label for="descripcion" > (Puede ir vacio) <br> Estado: </label>
   <input type="text" class="form-control inst_certi" name="estado_gestion_prodep"placeholder="">
   </div>
<div class="form-group">
   <label for="datepicker" class="control-label">Fecha de inicio:</label>
   <div class="controls">
   <input type="text" name="fecha_ini_ges" class="tuiker form-control" required>
   <label for="datepicker" class="input-group-addon generic_btn"><i class="fa fa-calendar" aria-hidden="true"></i></label>    
</div>

<div class="form-group">
   <label for="datepicker" class="control-label">Fecha de fin:</label>
   <div class="controls">
   <input type="text" name="fecha_fin_ges" class="tuiker form-control" required>
   <label for="datepicker" class="input-group-addon generic_btn"><i class="fa fa-calendar" aria-hidden="true"></i></label>    
</div>

<div class="form-group">
   <label for="datepicker" class="control-label">Fecha del último informe presentado:</label>
   <div class="controls">
   <input type="text" name="fecha_ultimo_informe_ges" class="tuiker form-control" required>
   <label for="datepicker" class="input-group-addon generic_btn"><i class="fa fa-calendar" aria-hidden="true"></i></label>    
</div>

<div class="form-group">
   <label for="descripcion" required> Horas dedicadas a la semana a la gestion: </label>
   <input type="text" class="form-control inst_certi" name="horas_semana_gestion_prodep"placeholder="" required>
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