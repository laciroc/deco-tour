<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Titulo post</title> <!-- TRAER NOMBRE DEL POST -->

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
          
          <h1 class="text-center fuente-50">Blog</h1> 

          <!-- breadcrumbs -->
          <ol class="breadcrumb hidden-xs">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li id="" class="active">T&iacute;tulo del post</li> <!-- TRAER TITULO POST -->
          </ol>
          <!-- fin breadcrumbs -->

          <hr class="margentop-0 hr-color"/>


          <!-- titulo y botones sociales -->
          <div class="titShare">
              <div class="col-md-8 col-xs-12">
                <h2 id="" class="tituloVerde">T&iacute;tulo del post</h3> <!-- TRAER TITULO POST -->
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
          <img src="images/placeholderTienda.png" id="fotoTienda" alt="Foto de la tienda" class="img-responsive center-block"/> <!-- TRAER FOTO DEL POST -->
          
          
          <!-- caja con TEXTO  -->
          <div id="textoPost" class="col-xs-12 fondo-verde margentop-20"> <!-- TRAER TEXTO POST -->
              
              
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
          </div>    

          <!-- fin CAJA CON TEXTO  -->

                 <!-- caja notas de interes -->
          <section id="cajaNotasInteres" class="col-md-6 col-sm-7 col-xs-12 margentop-30">
            <h3 class="text-center margentop-0 fuente-50">Notas de inter&eacute;s</h3>
            
            <div class="col-md-12 col-sm-12 col-xs-12">
              <ul id="notasInteres1">
                <li><img src="images/attachment.png" class="pull-left"><p class="tituloNotaHome"><a href="circuito-must-tienda.php">Tienda de la semana</a></p><p class="subtituloNotaHome">adipisicing consectetur elit</p></li>
                <li><img src="images/attachment.png" class="pull-left"><p class="tituloNotaHome"><a href="circuito-must-tienda.php">Tienda de la semana</a></p><p class="subtituloNotaHome">adipisicing consectetur elit</p></li>
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