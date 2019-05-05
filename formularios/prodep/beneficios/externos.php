 <div class="modal-header">
    <h4 class="modal-title">Beneficios externos de PROMEP.</h4>
   <button class="close" data-dismiss="modal" aria-label="Cerrar">
        <span aria-hidden="true">&times;</span>
    </button>
 </div>
    <div class="modal-body">
    <form enctype="multipart/form-data" action="scripts/formularios/prodep/agregar/beneficios/externos.php" method="POST">
                                                                      
                                                                        
   <div class="form-group">
   <label for="descripcion">Tipo de apoyo:</label>
   <input type="text" class="form-control inst_certi" name="tipo_apoyo_externo_promep_prodep" placeholder="">
   </div>

<div class="form-group">
    
   <label for="descripcion"> Nivel: </label>
   <input type="text" class="form-control inst_certi" name="nivel_externo_promep_prodep" placeholder="">
   </div>     

<div class="form-group">
   <label for="datepicker" class="control-label">Fecha inicial:</label>
   <div class="controls">
   <input type="text" name="fecha_inicio_externo_promep_prodep" class="tuiker form-control" required>
   <label for="datepicker" class="input-group-addon generic_btn"><i class="fa fa-calendar" aria-hidden="true"></i></label>    
</div>
                                                      
<div class="form-group">
   <label for="datepicker" class="control-label">Fecha final:</label>
   <div class="controls">
   <input type="text" name="fecha_fin_externo_promep_prodep" class="tuiker form-control" required>
   <label for="datepicker" class="input-group-addon generic_btn"><i class="fa fa-calendar" aria-hidden="true"></i></label>    
</div>     

 <div class="form-group">
   <label for="descripcion">Monto:</label>
   <input type="text" class="form-control inst_certi" name="monto_externo_promep_prodep" placeholder="">
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