<div class="modal-header">
    <h4 class="modal-title">Datos laborales</h4>
   <button class="close" data-dismiss="modal" aria-label="Cerrar">
        <span aria-hidden="true">&times;</span>
    </button>
 </div>
    <div class="modal-body">
    <form enctype="multipart/form-data" action="scripts/formularios/prodep/agregar/curriculum/datos_laborales.php" method="POST">
                                                                      
                                                                        
   <div class="form-group">
   <label for="descripcion" required>(Mayúsculas) <br> Asociado a:</label>
   <input type="text" class="form-control inst_certi" name="asociado" placeholder="" required>
   </div>

<div class="form-group">
    
   <label for="descripcion" required> Tipo de nombramiento:</label>
   <input type="text" class="form-control inst_certi" name="tipo_nombramiento" placeholder="" required>
   </div>                                                               

 <div class="form-group">
   <label for="descripcion" required>Dedicación</label>
   <input type="text" class="form-control inst_certi" name="dedicacion" placeholder="" required>
   </div>

<div class="form-group">
   <label for="descripcion" required> Institución de educación superior:</label>
   <input type="text" class="form-control inst_certi" name="institucion_edu_superior" placeholder="" required>
   </div>                                                           


<div class="form-group">
   <label for="descripcion" required> Dependencia de educación superior: </label>
   <input type="text" class="form-control inst_certi" name="dependencia_edu_superior"placeholder="" required>
   </div>    

<div class="form-group">
   <label for="descripcion"> (Puede ir vacio)<br>  Unidad Académica: </label>
   <input type="text" class="form-control inst_certi" name="unidad_academica" placeholder="">
   </div>                                                    

<div class="form-group">
   <label for="datepicker" class="control-label">Inicio de contrato:</label>
   <div class="controls">
   <input type="text" name="inicio_contrato" class="tuiker form-control" required>
   <label for="datepicker" class="input-group-addon generic_btn"><i class="fa fa-calendar" aria-hidden="true"></i></label>    
</div>
             

<div class="form-group">
   <label for="datepicker" class="control-label">Fin contrato:</label>
   <div class="controls">
   <input type="text" name="fin_contrato" class="tuiker form-control" required>
   <label for="datepicker" class="input-group-addon generic_btn"><i class="fa fa-calendar" aria-hidden="true"></i></label>    
</div>
             

<div class="form-group">
   <label for="descripcion" required>Cronología:</label>
   <input type="text" class="form-control inst_certi" name="cronologia" placeholder="" required>
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