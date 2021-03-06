 <div class="modal-header">
    <h4 class="modal-title">Producción de memorias en extenso.</h4>
   <button class="close" data-dismiss="modal" aria-label="Cerrar">
        <span aria-hidden="true">&times;</span>
    </button>
 </div>
    <div class="modal-body">
    <form enctype="multipart/form-data" action="scripts/formularios/prodep/agregar/produccion/memorias_prodep.php" method="POST">
                                                                      
                                                                        
   <div class="form-group">
   <label for="descripcion" required>(Separados por punto y coma)<br>Autores:</label>
   <input type="text" class="form-control inst_certi" name="autores_memorias_prodep" placeholder="" required>
   </div>

<div class="form-group">
    
   <label for="descripcion" required> Título de presentación: </label>
   <input type="text" class="form-control inst_certi" name="título_memorias_prodep" placeholder="" required>
   </div>     

<div class="form-group">
    <label for="descripcion" > Nombre del congreso donde se presento: </label>
   <input type="text" class="form-control inst_certi" name="congreso_memorias_prodep" placeholder="" >
   </div>                                                            


 <div class="form-group">
   <label for="descripcion" required>Pais:</label>
   <input type="text" class="form-control inst_certi" name="pais_memorias_prodep" placeholder="" required>
   </div>

    <div class="form-group">
   <label for="descripcion" required>Estado:</label>
   <input type="text" class="form-control inst_certi" name="estado_memorias_prodep" placeholder="" required>
   </div>

 <div class="form-group">
   <label for="descripcion" >Ciudad:</label>
   <input type="text" class="form-control inst_certi" name="ciudad_memorias_prodep" placeholder="" >
   </div>


    <div class="form-group">
   <label for="descripcion" required> (9999) <br> Año de publicación: </label>
   <input type="text" class="form-control inst_certi" name="año_memorias_prodep" placeholder="" required>
   </div>       

   <div class="form-group">
   <label for="descripcion" > De la pagina: </label>
   <input type="text" class="form-control inst_certi" name="de_memorias_prodep" placeholder="" >
   </div>  

     <div class="form-group">
   <label for="descripcion" > A la pagina: </label>
   <input type="text" class="form-control inst_certi" name="a_memorias_prodep" placeholder="" >
   </div>  


    <div class="form-group">
   <label for="descripcion" > Archivo PDF: </label>
   <form name="PDF_memorias_prodep" method="post" action="http://pagina.com/send.php" enctype="multipart/form-data" rowspan="2">
    <input type="file" name="PDF_adjunto" class="form-control PDF_adjunto_memorias_prodep" name="archivo_memorias_prodep placeholder""  accept=".pdf">
   </div>  

   <div class="form-group">
   <label for="descripcion" required>Estado Actual:</label>
   <input type="text" class="form-control inst_certi" name="estado_actual_memorias_prodep" placeholder="" required>
   </div>

  <div class="form-group">
   <label for="descripcion" required>Propósito:</label>
   <input type="text" class="form-control inst_certi" name="proposito_memorias_prodep" placeholder="" required>
   </div>

<div class="form-group">
  <label for="cuerpo_memorias_prodep" required>Para considerar en el curriculum de cuerpo académico:</label>
  <select name="cuerpo_memorias_prodep" class="form-control custom-select" required>
  <option selected value="seleccione">Seleccione...</option>
  <option value="si">Si</option>
  <option value="si">No</option>
  </select>
</div>


<div class="form-group">
   <label for="descripcion" > (En caso de no haber escribir 0) <br> Miembros: </label>
   <input type="text" class="form-control inst_certi" name="miembros_memorias_prodep"placeholder="">
   </div>


<div class="form-group">
   <label for="descripcion" >  (En caso de no haber escribir 0) <br> LGACs: </label>
   <input type="text" class="form-control inst_certi" name="LGAC_memorias_prodep"placeholder="">
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