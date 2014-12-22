<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tiendas | Deco Tour</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet"> 
    <link href="css/cs-select.css" rel="stylesheet"> 
    <link href="css/normalize.css" rel="stylesheet"> 

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="container-fluid">
    

    <!-- header -->
    <?php
    include('header.php')

    ?>

    
    
    <!-- contenedor principal -->
    <div>
      <h1 class="hide">Deco Tour - Tiendas y Servicios</h1>

        <!-- div con columna izquierda y central -->
        <div  class="col-md-9 col-sm-9 col-lg-7 col-lg-offset-1">
          
          <h2 class="text-center fuente-50">Tiendas</h2>

          <!-- breadcrumbs -->
          <ol class="breadcrumb hidden-xs">
            <li><a href="index.php">Inicio</a></li>
            <li id="nombreTiendaBread" class="active">Tiendas</li>
          </ol>
          <!-- fin breadcrumbs -->

          <hr class="margentop-0 hr-color"/>

          <!-- caja categorias y zonas -->
          <div class="col-xs-12 col-md-6">

            <!-- formulario de busqueda de tiendas y servicios -->
            <form id="formTiendas">
                <!-- select categoria VIENE DE TABLA -->
                <select class="cs-select cs-skin-underline">
                    <option value="" disabled selected>Categor&iacute;a</option>
                    <option value="1">Gardenia + Daisies</option>
                    <option value="2">Roses + Stephanotis</option>
                    <option value="3">Peony + Gerbera</option>
                    <option value="4">Orchid + Limonium</option>
                    <option value="5">Iris + Omithoalum</option>
                </select>
                <!-- fin select categoria -->

                <!-- select subcategoria VIENE DE TABLA -->
                <select class="cs-select cs-skin-underline">
                    <option value="" disabled selected>Subcategor&iacute;a</option>
                    <option value="1">Gardenia + Daisies</option>
                    <option value="2">Roses + Stephanotis</option>
                    <option value="3">Peony + Gerbera</option>
                    <option value="4">Orchid + Limonium</option>
                    <option value="5">Iris + Omithoalum</option>
                </select>
                <!-- fin select subcategoria -->

                <!-- select zona VIENE DE TABLA -->
                <select class="cs-select cs-skin-underline">
                    <option value="" disabled selected>Zona</option>
                    <option value="1">Gardenia + Daisies</option>
                    <option value="2">Roses + Stephanotis</option>
                    <option value="3">Peony + Gerbera</option>
                    <option value="4">Orchid + Limonium</option>
                    <option value="5">Iris + Omithoalum</option>
                </select>
                <!-- fin select zona -->
          </div>
          <!-- fin caja categorias y zonas -->

          <!-- caja checkboxes -->
          <div id="checkbox" class="col-xs-12 col-md-5 col-md-offset-1">
            <div>
                  <p><input type="checkbox" name="ventaOnline" value="Con venta online" /> Con venta online </p>
                  <p><input type="checkbox" name="enviosInterior" value="Con env&iacute;os al Interior" /> Con env&iacute;os al Interior</p>
                  <p><input type="checkbox" name="enviosExterior" value="Con env&iacute;os al Exterior" /> Con env&iacute;os al Exterior</p>
                  <p><input type="checkbox" name="descuentos" value="Con descuentos" /> Con descuentos </p>

                  <input type="submit" value="Buscar"  id="btnBuscarTiendas" />

                </form>
                <!-- fin form busqueda de tiendas y servicios -->

            </div>
          </div>
          <!-- fin caja checkboxes -->

          <div class="limpiador"></div>
          <hr class=" hr-color"/>

          <!-- caja resultados destacados VIENE DE QUERY -->
          <div id="resultadosDestacados" class="fondo-verde">
            <h3 class="titulo">Tiendas destacadas</h3>
            <div class="col-xs-12 fondo-verde">
              
              <div id="resDestacado1" class="resDestacado">
                <a href="tienda-destacada.php">
                  <img class="media-object" src="images/placeholderTiendaDestacada.png" alt="Tienda Destacada" />
                </a>
                <div class="media-body">
                
                  <h4 class="margentop-0"><a href="tienda-destacada.php">I love my home lima limona</a></h4>
                  <p id="dirDestacado1">Vicente Lopez 388, Monte Grande, Buenos Aires</p>
                  <p><a id="webDestacado1" href="www.lilalimona.com.ar" target="_blank">www.lilalimona.com.ar</a></p>
                  <p><a class="verMas" href="tienda-destacada.php">Ver m&aacute;s</a></p>
                </div>
               </div>
                
                <div id="resDestacado2" class="resDestacado">
                    <a href="tienda-destacada.php">
                      <img class="media-object" src="images/placeholderTiendaDestacada.png" alt="Tienda Destacada" />
                    </a>
                    <div class="media-body">
                    
                      <h4 class="margentop-0"><a href="tienda-destacada.php">I love my home lima limona</a></h4>
                      <p id="dirDestacado1">Vicente Lopez 388, Monte Grande, Buenos Aires</p>
                      <p><a id="webDestacado1" href="www.lilalimona.com.ar" target="_blank">www.lilalimona.com.ar</a></p>
                      <p><a class="verMas" href="tienda-destacada.php">Ver m&aacute;s</a></p>
                    </div>
                </div>

                


            </div>
          </div>
          <!-- fin caja resultados destacados -->

          <hr class="hr-color"/>

          <!-- caja resultados no destacados VIENE DE QUERY -->
          <div id="tiendasComunes">
            
            <!-- ABECEDARIO -->
            <div id="cajaAbc" class="col-xs-12 col-sm-10 col-sm-offset-1">
              
            </div>
            <!-- fin ABECEDARIO -->

            <div class="limpiador"></div>
            
            <!-- caja con resultados de tiendas no destacadas -->
            <div id="cajaResultadosAbc">

            </div>
            <!-- fin caja con resultados de tiendas no destacadas -->


          </div>
          <!-- fin caja resultados no destacados -->

        </div> <!-- fin div contenidos principales -->  

      <!-- publicidad -->
      
      <aside class="col-md-3 col-sm-3 col-lg-offset-1" id="columnaPublicidadHome">
        <form>
          <div id="buscador" class="hidden-xs">
          <input placeholder="buscar" class="pull-left">
          <button class="pull-right"><img src="images/buscar.png"></button>
          </div>
        </form>
        <ul class="margentop-10">
          <li class="pull-left imgPubli" id="publi1"><img  src="images/pblicidad.jpg" width="190px" height="130px" /></li>
          <li class="pull-left imgPubli" id="publi2"><img  src="images/pblicidad.jpg" width="190px" height="130px" /></li>
          <li class="pull-left imgPubli" id="publi3"><img  src="images/pblicidad.jpg" width="190px" height="130px" /></li>
          <li class="pull-left imgPubli" id="publi4"><img  src="images/pblicidad.jpg" width="190px" height="130px" /></li>
          <li class="pull-left imgPubli" id="publi4"><img  src="images/pblicidad.jpg" width="190px" height="130px" /></li>
        </ul>
      </aside>
      <!-- fin publicidad -->

    </div>
    <!-- fin contenedor principal -->

    <div class="limpiador"></div>
    
  <?php
    include('footer.php')

?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <script src="js/abecedario.js"></script>

    <script src="js/classie.js"></script>
    <script src="js/selectFx.js"></script>
    <script>
      (function() {
        [].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {  
          new SelectFx(el);
        } );
      })();
    </script>

  </body>
</html>