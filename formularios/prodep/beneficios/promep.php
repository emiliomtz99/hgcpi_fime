 <div class="modal-header">
    <h4 class="modal-title">Beneficios de PROMEP.</h4>
   <button class="close" data-dismiss="modal" aria-label="Cerrar">
        <span aria-hidden="true">&times;</span>
    </button>
 </div>
    <div class="modal-body">
    <form enctype="multipart/form-data" action="scripts/formularios/prodep/agregar/beneficios/promep.php" method="POST">
                                                                      
                                                                        
   <div class="form-group">
   <label for="descripcion">IES de la solicitud</label>
   <input type="text" class="form-control inst_certi" name="ies_promep_prodep" placeholder="">
   </div>

<div class="form-group">
    
   <label for="descripcion"> Solicitud: </label>
   <input type="text" class="form-control inst_certi" name="solicitud_promep_prodep" placeholder="">
   </div>     

<div class="form-group">
   <label for="datepicker" class="control-label">Vigencia:</label>
   <div class="controls">
   <input type="text" name="vigencia_promep_prodep" class="tuiker form-control" required>
   <label for="datepicker" class="input-group-addon generic_btn"><i class="fa fa-calendar" aria-hidden="true"></i></label>    
</div>
                                                                   


 <div class="form-group">
   <label for="descripcion">Estado:</label>
   <input type="text" class="form-control inst_certi" name="estado_promep_prodep" placeholder="">
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