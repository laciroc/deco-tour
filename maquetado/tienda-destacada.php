<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nombre Tienda | .:Deco Tour:.</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="container-fluid">
    
    <!-- script share de FB -->
    <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>


    <!-- header -->
    <?php
    include('header.php')

    ?>

    
    
    <!-- contenedor principal -->
    <div>
      <h1 class="hide">Deco Tour - Tiendas destacadas</h1>

        <!-- div con columna izquierda y central -->
        <div  class="col-md-9 col-sm-9 col-lg-7 col-lg-offset-1">
          
          <h2 class="text-center fuente-50">Tiendas y Servicios</h2>

          <!-- breadcrumbs -->
          <ol class="breadcrumb hidden-xs">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="tiendas-servicios.php">Tiendas y Servicios</a></li>
            <li><a id="" href="plantilla-categorias.php">Mobiliario</a></li> <!-- CATEGORIA -->
            <li id="nombreTiendaBread" class="active">Te espero Juana</li> <!-- NOMBRE DE LA TIENDA -->
          </ol>
          <!-- fin breadcrumbs -->

          <hr class="margentop-0 hr-color"/>


          <!-- CAJA CONTENEDORA DE INFO TIENDA -->
          <div class="cajaTienda">

            <!-- titulo y botones sociales -->
            <div class="titShare">
                <div class="col-md-8 col-xs-12">
                  <h3 id="nombreTienda" class="tituloVerde">Te espero Juana</h3> <!-- NOMBRE DE LA TIENDA -->
                </div>
                <!-- boton twitter -->
                <div class="col-md-2 col-xs-6">
                    <a href="https://twitter.com/share" class="twitter-share-button" data-lang="es">Twittear</a>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                </div>
                <!-- boton FB -->
                <div class="col-md-2 col-xs-6">
                  <div class="text-center fb-share-button"></div>
                </div>
                
            </div>
            <!-- fin titulo y botones sociales -->

            <div class="limpiador"> </div>
            
            <!-- IMAGEN Y DATOS -->
            <div id="datosLocal">
                
              <img class="media-object pull-left margenleft-20 margentop-20" src="images/placeholderTiendaDestacada.png" alt="Tienda Destacada" />
                
                <div class="pull-left datosDestacada margentop-20 margenleft-20">
                
                  <p><a id="web" href="www.lilalimona.com.ar" target="_blank">www.lilalimona.com.ar</a></p>
                  <p id="email">hola@lilalimona.com.ar</p>
                  <p id="tel">011 4355-8382</p>
                </div>

                <!-- caja checkboxes -->
                <div id="checkboxDestacada" class="col-xs-12 col-sm-6 pull-right">
                  <div>
                    <p><input type="checkbox" name="ventaOnline" value="Con venta online" /> Con venta online </p>
                    <p><input type="checkbox" name="enviosInterior" value="Con env&iacute;os al Interior" /> Con env&iacute;os al Interior</p>
                    <p><input type="checkbox" name="enviosExterior" value="Con env&iacute;os al Exterior" /> Con env&iacute;os al Exterior</p>
                    <p><input type="checkbox" name="descuentos" value="Con descuentos" /> Con descuentos </p>


                  </div>
                </div>
                <!-- fin caja checkboxes -->

            </div>
            <!-- FIN IMAGEN Y DATOS -->   

            <div class="limpiador"></div>

            <!-- CATEGORIAS -->
            <p id="categoriasDestacada" class="margentop-20 margenleft-20">Categor&iacute;as: </p>
            
            <!-- caja con descripcion y mapa -->
            <div id="descripcionMapaTienda" class="col-xs-12 fondo-verde">
                <!-- descripcion local -->
                <div id="textoTienda" class="col-xs-12 col-md-8 ">
                
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                </div>

                <!-- fin descripcion local -->

                <!-- mapa local -->
                <div class="col-xs-12 col-md-4 margentop-20"> <!-- debe ser reemplazado con un iframe de google maps -->
                  <img src="images/placeholderMapaTienda.png" />
                  <p class="datosDestacada">Vicente Lopez 388, Monte Grande, Buenos Aires</p>
                </div>

                <!-- fin mapa local -->
              </div>
              <!-- fin caja con descripcion y mapa -->  
                <div class="limpiador"></div>

          </div>
          <!-- FIN CAJA CONTENEDORA DE INFO TIENDA -->
          

          <div class="limpiador"></div>
          
          
          
     <?php
           $current_page = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
     ?>

          <div class="fb-comments margentop-20" <?php echo 'data-href='.$current_page ; ?> data-numposts="5" data-colorscheme="light"></div>


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
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>