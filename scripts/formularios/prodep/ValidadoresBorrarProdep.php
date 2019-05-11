

function borrarArticulo(id)
        {
           cadena="id=" + id;
           
           $.ajax(
              {
                type: "POST",
                url: "scripts/formularios/prodep/borrar/articulo_prodep.php",
                data:cadena,
                success:function(r){alert("Registro eliminado existosamente."); location.reload();}
              }
            );
        }


function borrarCuerpo(id)
        {
           cadena="id=" + id;
           
           $.ajax(
              {
                type: "POST",
                url: "scripts/formularios/prodep/borrar/cuerpo_prodep.php",
                data:cadena,
                success:function(r){alert("Registro eliminado existosamente."); location.reload();}
              }
            );
        }

function borrarDatosLaborales(id)
        {
           cadena="id=" + id;
           
           $.ajax(
              {
                type: "POST",
                url: "scripts/formularios/prodep/borrar/datos_laborales.php",
                data:cadena,
                success:function(r){alert("Registro eliminado existosamente."); location.reload();}
              }
            );
        }

        
function borrarDireccion(id)
        {
           cadena="id=" + id;
           
           $.ajax(
              {
                type: "POST",
                url: "scripts/formularios/prodep/borrar/direccion_individualizada_prodep.php",
                data:cadena,
                success:function(r){alert("Registro eliminado existosamente."); location.reload();}
              }
            );
        }
        
function borrarClases(id)
{
   cadena="id=" + id;
           
    $.ajax(
            {
            type: "POST",
            url: "scripts/formularios/prodep/borrar/docencia_prodep.php",
            data:cadena,
            success:function(r){alert("Registro eliminado existosamente."); location.reload();}
            }
          );
}

function borrarEstudios(id)
{
   cadena="id=" + id;
           
    $.ajax(
            {
            type: "POST",
            url: "scripts/formularios/prodep/borrar/estudios.php",
            data:cadena,
            success:function(r){alert("Registro eliminado existosamente."); location.reload();}
            }
          );
}

function borrarExternos(id)
{
   cadena="id=" + id;
           
    $.ajax(
            {
            type: "POST",
            url: "scripts/formularios/prodep/borrar/externos.php",
            data:cadena,
            success:function(r){alert("Registro eliminado existosamente."); location.reload();}
            }
          );
}

function borrarGestion(id)
{
   cadena="id=" + id;
           
    $.ajax(
            {
            type: "POST",
            url: "scripts/formularios/prodep/borrar/gestion_prodep.php",
            data:cadena,
            success:function(r){alert("Registro eliminado existosamente."); location.reload();}
            }
          );
}

function borrarLGAC(id)
{
   cadena="id=" + id;
           
    $.ajax(
            {
            type: "POST",
            url: "scripts/formularios/prodep/borrar/lgac.php",
            data:cadena,
            success:function(r){alert("Registro eliminado existosamente."); location.reload();}
            }
          );
}

function borrarLibro(id)
{
   cadena="id=" + id;
           
    $.ajax(
            {
            type: "POST",
            url: "scripts/formularios/prodep/borrar/libro_prodep.php",
            data:cadena,
            success:function(r){alert("Registro eliminado existosamente."); location.reload();}
            }
          );
}

function borrarMemorias(id)
{
   cadena="id=" + id;
           
    $.ajax(
            {
            type: "POST",
            url: "scripts/formularios/prodep/borrar/memorias_prodep.php",
            data:cadena,
            success:function(r){alert("Registro eliminado existosamente."); location.reload();}
            }
          );
}

function borrarPremios(id)
{
   cadena="id=" + id;
           
    $.ajax(
            {
            type: "POST",
            url: "scripts/formularios/prodep/borrar/premios_distinciones.php",
            data:cadena,
            success:function(r){alert("Registro eliminado existosamente."); location.reload();}
            }
          );
}

function borrarPrograma(id)
{
   cadena="id=" + id;
           
    $.ajax(
            {
            type: "POST",
            url: "scripts/formularios/prodep/borrar/programas_educativos_prodep.php",
            data:cadena,
            success:function(r){alert("Registro eliminado existosamente."); location.reload();}
            }
          );
}

function borrarPromep(id)
{
   cadena="id=" + id;
           
    $.ajax(
            {
            type: "POST",
            url: "scripts/formularios/prodep/borrar/promep.php",
            data:cadena,
            success:function(r){alert("Registro eliminado existosamente."); location.reload();}
            }
          );
}


function borrarProyectos(id)
{
   cadena="id=" + id;
           
    $.ajax(
            {
            type: "POST",
            url: "scripts/formularios/prodep/borrar/proyectos_investigacion_prodep.php",
            data:cadena,
            success:function(r){alert("Registro eliminado existosamente."); location.reload();}
            }
          );
}

function borrarGrupal(id)
{
   cadena="id=" + id;
           
    $.ajax(
            {
            type: "POST",
            url: "scripts/formularios/prodep/borrar/tutoria_grupal_prodep.php",
            data:cadena,
            success:function(r){alert("Registro eliminado existosamente."); location.reload();}
            }
          );
}

function borrarIndividual(id)
{
   cadena="id=" + id;
           
    $.ajax(
            {
            type: "POST",
            url: "scripts/formularios/prodep/borrar/tutoria_individual_prodep.php",
            data:cadena,
            success:function(r){alert("Registro eliminado existosamente."); location.reload();}
            }
          );
}

        

