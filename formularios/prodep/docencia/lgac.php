 <div class="modal-header">
    <h4 class="modal-title">Línea de generación y aplicación del conocimiento</h4>
   <button class="close" data-dismiss="modal" aria-label="Cerrar">
        <span aria-hidden="true">&times;</span>
    </button>
 </div>
    <div class="modal-body">
    <form enctype="multipart/form-data" action="scripts/formularios/prodep/agregar/docencia/lgac.php" method="POST">
                                                                      
                                                                        
   <div class="form-group">
   <label for="descripcion" required>Linea:</label>
   <input type="text" class="form-control inst_certi" name="linea_lgac" placeholder="" required>
   </div>

<div class="form-group">
    
   <label for="descripcion" required>(Separadas por coma) <br> Actividades que realiza: </label>
   <input type="text" class="form-control inst_certi" name="actividades_lgac" placeholder="" required>
   </div>                                                               

 <div class="form-group">
   <label for="descripcion" required>Horas a la semana dedicadas a esta LGAC:</label>
   <input type="text" class="form-control inst_certi" name="horas_semana_lgac" placeholder="" required>
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