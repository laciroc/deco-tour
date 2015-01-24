<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tiendas</title>

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
      

        <!-- div con columna izquierda y central -->
        <div  class="col-md-9 col-sm-9 col-lg-7 col-lg-offset-1">
          
          <h1 class="text-center fuente-50">Tiendas encontradas</h1>  

         

          <hr class="margentop-0"/>


         <!-- caja tiendas VIENE DE QUERY -->
          
          <div id="resultadosDestacados" class="fondo-verde">
            
            <div class="col-xs-12 fondo-verde">
              
              <!-- ejemplo tienda 1 -->
              <div class="resDestacado">
                <a href="tienda-destacada.php">
                  <img class="media-object" src="images/placeholderTiendadestacada.png" alt="Tienda" />
                </a>
                <div class="media-body">
                
                  <h4 class="margentop-0"><a href="tienda-destacada.php">I love my home lima limona</a></h4>
                  <p>Vicente Lopez 388, Monte Grande, Buenos Aires</p>
                  <p><a href="www.lilalimona.com.ar" target="_blank">www.lilalimona.com.ar</a></p>
                  <p><a class="verMas" href="">Ver m&aacute;s</a></p>
                </div>
               </div>

               <!-- fin ejemplo tienda 1 -->
                
              <!-- ejemplo tienda 2 -->  
                <div  class="resDestacado">
                    <a href="tienda-destacada.php">
                      <img class="media-object" src="images/placeholderTiendadestacada.png" alt="Tienda " />
                    </a>
                    <div class="media-body">
                    
                      <h4 class="margentop-0"><a href="tienda-destacada.php">I love my home lima limona</a></h4>
                      <p >Vicente Lopez 388, Monte Grande, Buenos Aires</p>
                      <p><a  href="www.lilalimona.com.ar" target="_blank">www.lilalimona.com.ar</a></p>
                      <p><a class="verMas" href="">Ver m&aacute;s</a></p>
                    </div>
                </div>

                <!-- fin ejemplo tienda 2 -->


              <!-- ejemplo tienda 3 -->  
                <div  class="resDestacado">
                    <a href="tienda-destacada.php">
                      <img class="media-object" src="images/placeholderTiendadestacada.png" alt="Tienda" />
                    </a>
                    <div class="media-body">
                    
                      <h4 class="margentop-0"><a href="tienda-destacada.php">I love my home lima limona</a></h4>
                      <p >Vicente Lopez 388, Monte Grande, Buenos Aires</p>
                      <p><a  href="www.lilalimona.com.ar" target="_blank">www.lilalimona.com.ar</a></p>
                      <p><a class="verMas" href="">Ver m&aacute;s</a></p>
                    </div>
                </div>

                <!-- fin ejemplo tienda 3 -->


            </div>
          </div>
          <!-- fin tiendas categoria -->


          <div class="limpiador"></div>

          <!-- caja resultados no destacados VIENE DE QUERY -->
          <div id="tiendasComunes" class="margentop-20">
            
            
            <p class="margenleft-20">I love my home lima limona</p>
            <p class="margenleft-20">Reina Batata</p>
            <p class="margenleft-20">Chez Lenio</p>
            


          </div>
          <!-- fin caja resultados no destacados -->         

          <hr/>          
      
                 <!-- caja notas de interes -->
          <section id="cajaNotasInteres" class="col-md-6 col-sm-7 col-xs-12 margentop-30">
            <h3 class="text-center margentop-0 fuente-50">Notas de inter&eacute;s</h3>
            
            <div class="col-md-12 col-sm-12 col-xs-12">
              <ul id="notasInteres1">
                <li><img src="images/attachment.png" class="pull-left"><p class="tituloNotaHome">Tienda de la semana</p><p class="subtituloNotaHome">adipisicing consectetur elit</p></li>
                <li><img src="images/attachment.png" class="pull-left"><p class="tituloNotaHome">Tienda de la semana</p><p class="subtituloNotaHome">adipisicing consectetur elit</p></li>
              </ul>
            </div>
            
          </section>
          <!-- fin caja notas de interes -->

          <!-- caja newsletter -->
          <section id="cajaNewsletter" class="col-md-5 col-md-offset-1 col-sm-5 col-sm-offset-0 col-xs-12 margentop-30">
            <img src="images/envelope.png" class="pull-left margentop-20 " alt="suscribite" width="50px" height="37px" />
            <h3 class="text-center fuente-40">Suscribite</h3>
              <!-- Begin MailChimp Signup Form -->
                 <!-- <link href="//cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css"> -->
                  
                  <div id="mc_embed_signup_large">
                    <form action="//guauhaus.us9.list-manage.com/subscribe/post?u=aaf517c1879cd27562cf80de9&amp;id=8813574ce0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                      
                      <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email" required>
                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                        <div style="position: absolute; left: -5000px;"><input type="text" name="b_aaf517c1879cd27562cf80de9_8813574ce0" tabindex="-1" value=""></div>
                        <div class="clear"><input type="submit" value="Enviar" name="subscribe" id="mc-embedded-subscribe" class="btn botonSuscribir"></div>
                    </form>
                  </div>

                  <!--End mc_embed_signup-->
                  <div class="limpiador"></div>

          </section>
          <!-- fin caja newsletter -->
          


          
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