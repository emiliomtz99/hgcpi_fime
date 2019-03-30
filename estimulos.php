<!DOCTYPE html>
<html lang="en">
<head>
	<title>Estímulos UANL | HGCPI</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=egde">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/flick/jquery-ui.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
	<header>
              <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                  <a class="navbar-brand" href="index.php"><img src="img/logo.png" width="120" height="40" class="d-inline-block align-top"></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Convocatorias</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item" href="estimulos.php">Estímulos UANL</a>
                          <a class="dropdown-item" href="#">PRODEP</a>
                          <a class="dropdown-item" href="#">Sistema Nacional de Investigadores</a>
                        </div>
                      </li>
                      <li class="nav-item">
                      <a class="nav-link" href="datos_personales.php">Datos Personales</a>
                      </li>
                      <li class="nav-item">
                      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Imprimir Convocatorias</a>
                      </li>
                    </ul>
                      <span class="navbar-text"><a class="nav-link" href="#">Dra. Mayra Deyanira Flores Guerrero</a></span>
                  </div>
            </nav>
    </header>

        <div class="container">
            <div class="row-mt-4">
                <div class="col-12">
                    <br><br>
                    <h2><center>Convocatoria de Estímulos UANL</center></h2>
                    <hr><br>
                </div>
            </div>
        </div>

        <div class="container">
        	<div class="row mt-4">
        		<div class="col-12">
        			<div id="accordion">
                    <!--CARD#1-->
                        <div class="card border-0">
                            <div class="btn btn-dark" id="header1">
                                <a class="btn" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">Docencia</a>
                            </div>
                            <div id="collapse1" class="collapse" aria-labelledby="header1" data-parent="#accordion">
                                <div class="card-body">
                                    <div id="subaccordion">
                                        <div class="card">
                                            <div class="btn btn-secondary border-light" id="subheader1">
                                                <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse1" aria-expanded="true" aria-controls="subcollapse1">Producción Académica Docencia</a>
                                            </div>
                                            <div id="subcollapse1" class="collapse" aria-labelledby="subheader1" data-parent="#subaccordion">
                                                <div class="card-body">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-9">
                                                                    <h4>Producción Académica Docencia</h4> 
                                                                </div>
                                                                <div class="col-3">
                                                                    <h5><right>Tipo de documento:</right></h5>
                                                                    <select name="seleccion_produccion_academica" id="produccion_academica" class="custom-select">
                                                                        <option value="seleccion">Seleccione...</option>
                                                                        <option value="articulo">Artículo</option>
                                                                        <option value="capitulo_libro">Capítulo del libro</option>
                                                                        <option value="libro">Libro</option>
                                                                    </select>   
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <div class="col-2">

                                                        <!-- BOTON AGREGAR -->
                                                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaFormulario" onclick="validarSeleccionProduccionAcademica()">Agregar nuevo</button><br><br>

                                                        <!-- VENTANA PARA LOS FORMULARIOS DE LA SECCION PRODUCCION ACADEMICA DOCENCIA -->
														<div class="modal fade" id="ventanaFormulario" tabindex="-1" role="dialog" aria-labelledby="ventanaFormulario">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content" id="ventanaFormularioProdAcad">
                                                                </div>
                                                            </div>       
                                                        </div>

                                                    </div>

                                                    <!-- TABLAS DONDE APARECEN LOS REGISTROS YA AGREGADOS -->
                                                    <hr><br><center><h5>Sus trabajos</h5></center><br>
                                                    <table class="table table-success m-2">
                                                        <thead>
                                                            <tr>
                                                                <th>Titulo del artículo</th>
                                                                <th>ISSN</th>
                                                                <th>Fecha de publicación</th>
                                                                <th>Editorial</th>
                                                                <th>Nombre de la revista</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Artículo de ejemplo</td>
                                                                <td>1234-5678-91011</td>
                                                                <td>12-03-2016</td>
                                                                <td>Editores Mexicanos Unidos</td>
                                                                <td>Ciencia y Tecnología</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <br><hr><br>
                                                   
                                                    <center><a href=""><img src="img/editar.png" width="5%;"></a><p>Editar registro</p></center>
                                                    <center><a href=""><img src="img/borrar.png" width="7.5%;"></a><p>Borrar registro</p></center>
                                                </div>
                                            </div>

                                            <div class="btn btn-secondary border-light" id="subheader2">
                                                <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse2" aria-expanded="true" aria-controls="subcollapse2">Capacitación y Actualización Académica</a>
                                            </div>
                                            <div id="subcollapse2" class="collapse" aria-labelledby="subheader1" data-parent="#subaccordion">
                                                <div class="card-body">
                                                    
                                                </div>
                                            </div>





                                            <div class="btn btn-secondary border-light" id="subheader3">
                                                <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse3" aria-expanded="true" aria-controls="subcollapse3">Capacitación y Actualización en Lenguas Extranjeras</a>
                                            </div>
                                            <div id="subcollapse3" class="collapse" aria-labelledby="subheader1" data-parent="#subaccordion">
                                                <div class="card-body">
                                                    <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-9">
                                                                    <h4>Capacitación y Actualización en Lenguas Extranjeras</h4> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <div class="col-2">

                                                        <!-- BOTON AGREGAR -->
                                                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaFormulario3" onclick="validarCapaActa()">Agregar nuevo</button><br><br>

                                                        <!-- VENTANA PARA LOS FORMULARIOS DE LA SECCION PRODUCCION ACADEMICA DOCENCIA -->
                                                        <div class="modal fade" id="ventanaFormulario3" tabindex="-1" role="dialog" aria-labelledby="ventanaFormulario3">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content" id="ventanaCapaActa">
                                                                </div>
                                                            </div>       
                                                        </div>

                                                    </div>

                                                    <!-- TABLAS DONDE APARECEN LOS REGISTROS YA AGREGADOS -->
                                                    <hr><br><center><h5>Sus trabajos</h5></center><br>
                                                    <table class="table table-success m-2">
                                                        <thead>
                                                            <tr>
                                                                <th>Tipo de gestión</th>
                                                                <th>Clasificación</th>
                                                                <th>Evento</th>
                                                                <th>Tipo de Evento</th>
                                                                <th>Fecha inicio</th>
                                                                <th>Fecha fin</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Llenado de ejemplo</td>
                                                                <td>Llenado de ejemplo</td>
                                                                <td>Llenado de ejemplo</td>
                                                                <td>Llenado de ejemplo</td>
                                                                <td>12-03-2016</td>
                                                                <td>12-03-2016</td>                                                            
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <br><hr><br>
                                                   
                                                    <center><a href=""><img src="img/editar.png" width="5%;"></a><p>Editar registro</p></center>
                                                    <center><a href=""><img src="img/borrar.png" width="7.5%;"></a><p>Borrar registro</p></center>
                                                                                                  
                                                </div>
                                            </div>




                                            <div class="btn btn-secondary border-white" id="subheader4">
                                                <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse4" aria-expanded="true" aria-controls="subcollapse4">Gestión Académica Invididualizada</a>
                                            </div>
                                            <div id="subcollapse4" class="collapse" aria-labelledby="subheader1" data-parent="#subaccordion">
                                                <div class="card-body">
                                                    <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-9">
                                                                    <h4>Gestión Académica Individualizada</h4> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <div class="col-2">

                                                        <!-- BOTON AGREGAR -->
                                                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventanaFormulario2" onclick="validarSeleccionGestionAcademica()">Agregar nuevo</button><br><br>

                                                        <!-- VENTANA PARA LOS FORMULARIOS DE LA SECCION PRODUCCION ACADEMICA DOCENCIA -->
                                                        <div class="modal fade" id="ventanaFormulario2" tabindex="-1" role="dialog" aria-labelledby="ventanaFormulario2">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content" id="ventanaFormularioGestionAcad">
                                                                </div>
                                                            </div>       
                                                        </div>

                                                    </div>

                                                    <!-- TABLAS DONDE APARECEN LOS REGISTROS YA AGREGADOS -->
                                                    <hr><br><center><h5>Sus trabajos</h5></center><br>
                                                    <table class="table table-success m-2">
                                                        <thead>
                                                            <tr>
                                                                <th>Tipo de gestión</th>
                                                                <th>Clasificación</th>
                                                                <th>Evento</th>
                                                                <th>Tipo de Evento</th>
                                                                <th>Fecha inicio</th>
                                                                <th>Fecha fin</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Llenado de ejemplo</td>
                                                                <td>Llenado de ejemplo</td>
                                                                <td>Llenado de ejemplo</td>
                                                                <td>Llenado de ejemplo</td>
                                                                <td>12-03-2016</td>
                                                                <td>12-03-2016</td>                                                            
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <br><hr><br>
                                                   
                                                    <center><a href=""><img src="img/editar.png" width="5%;"></a><p>Editar registro</p></center>
                                                    <center><a href=""><img src="img/borrar.png" width="7.5%;"></a><p>Borrar registro</p></center>
                                                </div>
                                            </div>

                                            <div class="btn btn-secondary border-light" id="subheader5">
                                                <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse5" aria-expanded="true" aria-controls="subcollapse5">Impartición de Cursos a Profesores y Trabajadores de la UANL</a>
                                            </div>
                                            <div id="subcollapse5" class="collapse" aria-labelledby="subheader1" data-parent="#subaccordion">
                                                <div class="card-body">
                                                    
                                                </div>
                                            </div>

                                            <div class="btn btn-secondary border-light" id="subheader6">
                                                <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse6" aria-expanded="true" aria-controls="subcollapse6">Premios y Distinciones</a>
                                            </div>
                                            <div id="subcollapse6" class="collapse" aria-labelledby="subheader1" data-parent="#subaccordion">
                                                <div class="card-body">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>   
                    </div>
        		</div>
        	</div>
        </div>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/popper.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $('.tuiker').datepicker({
            //adecuando formato de fecha
            dateFormat: "dd/mm/yy",
            //primer dia sea lunes
            firstDay: 1,
            //Nombres de los dias
            dayNames: ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"],
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

        function validarSeleccionProduccionAcademica() {
        
        var select = $("#produccion_academica").val();
        
            if (select == "seleccion") 
            {
            alert('Seleccione una opción.'); //si no seleciono nada
            location.reload();
            return false;
            }

            else if(select == "articulo") //si selecciono articulo
            {
            $('#ventanaFormularioProdAcad').load('formularios/estimulos/produccion_academica_docencia_articulo.php');
            return true;
            }

            else //si la opcion no tiene formulario
            {
            alert('Opcion sin formulario.');
            location.reload();
            return false;
            }

        };


         function validarCapaActa() {
        
        var select = $("#CapaActa").val();
        
            
            $('#ventanaCapaActa').load('formularios/estimulos/capa_lenguas_extra.php');
            return true;
        }




        function validarSeleccionGestionAcademica() {
        
        var select = $("#gestion_academica").val();
        
            
            $('#ventanaFormularioGestionAcad').load('formularios/estimulos/gestion_academica_invididualizada.php');
            return true;
        }

    </script>
</body>
</html>