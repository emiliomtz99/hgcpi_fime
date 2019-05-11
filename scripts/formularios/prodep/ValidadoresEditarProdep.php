/*=========== Beneficios ============*/

function editarExternos(id)
        {
           $('#ventanaExternoPromepProdep').load('scripts/formularios/prodep/editar/formularios/beneficios/externos.php?ident='+id);
            return true;
        }

function editarPromep(id)
        {
           $('#ventanaPromepProdep').load('scripts/formularios/prodep/editar/formularios/beneficios/promep.php?ident='+id);
            return true;
        }

/*=========== Curriculum ============*/


function editarDatosLaborales(id)
        {
           $('#ventanaDatosLaborales').load('scripts/formularios/prodep/editar/formularios/curriculum/datos_laborales.php?ident='+id);
            return true;
        }

function editarEstudios(id)
        {
           $('#ventanaEstudios').load('scripts/formularios/prodep/editar/formularios/curriculum/estudios.php?ident='+id);
            return true;
        }

function editarPremios(id)
        {
           $('#ventanaPremios').load('scripts/formularios/prodep/editar/formularios/curriculum/premios_distinciones.php?ident='+id);
            return true;
        }


/*=========== Docencia ============*/

function editarCuerpo(id)
        {
           $('#ventanaCuerpoProdep').load('scripts/formularios/prodep/editar/formularios/docencia/cuerpo_prodep.php?ident='+id);
            return true;
        }

function editarDireccion(id)
        {
           $('#ventanaDireccionIndividualProdep').load('scripts/formularios/prodep/editar/formularios/docencia/direccion_individualizada_prodep.php?ident='+id);
            return true;
        }

function editarDocencia(id)
        {
           $('#ventanaDocenciaProdep').load('scripts/formularios/prodep/editar/formularios/docencia/docencia_prodep.php?ident='+id);
            return true;
        }

function editarGestion(id)
        {
           $('#ventanaGestionProdep').load('scripts/formularios/prodep/editar/formularios/docencia/gestion_prodep.php?ident='+id);
            return true;
        }

 function editarlgac(id)
      {
           $('#ventanaLGACProdep').load('scripts/formularios/prodep/editar/formularios/docencia/lgac.php?ident='+id);
            return true;
        }


 function editarprogramas(id)
      {
           $('#ventanaProgramaEducativoProdep').load('scripts/formularios/prodep/editar/formularios/docencia/programas_educativos_prodep.php?ident='+id);
            return true;
        }

  function editarGrupal(id)
      {
           $('#ventanaFormularioTutoria').load('scripts/formularios/prodep/editar/formularios/docencia/tutoria_grupal_prodep.php?ident='+id);
            return true;
        }

   function editarIndividual(id)
      {
           $('#ventanaFormularioTutoria').load('scripts/formularios/prodep/editar/formularios/docencia/tutoria_individual_prodep.php?ident='+id);
            return true;
        }


/*=========== Produccion ============*/
 

 function editarArticulo(id)
      {
           $('#ventanaArticuloProdep').load('scripts/formularios/prodep/editar/formularios/produccion/articulo_prodep.php?ident='+id);
            return true;
        }

 function editarLibros(id)
      {
           $('#ventanaLibroProdep').load('scripts/formularios/prodep/editar/formularios/produccion/libro_prodep.php?ident='+id);
            return true;
        }


 function editarMemorias(id)
      {
           $('#ventanaMemoriasProdep').load('scripts/formularios/prodep/editar/formularios/produccion/memorias_prodep.php?ident='+id);
            return true;
        }

 function editarInvestigacion(id)
      {
           $('#ventanaInvestigacionProdep').load('scripts/formularios/prodep/editar/formularios/produccion/proyectos_investigacion_prodep.php?ident='+id);
            return true;
        }