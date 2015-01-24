<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Circuitos Must</title>

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
    

    <!-- header -->
    <?php
    include('header.php')

    ?>

    
    
    <!-- contenedor principal -->
    <div>


        <!-- div con columna izquierda y central -->
        <div  class="col-md-9 col-sm-9 col-lg-7 col-lg-offset-1">
          
          <h1 class="text-center fuente-50">Qu&eacute; es Deco Tour?</h1>

          <!-- breadcrumbs -->
          <ol class="breadcrumb hidden-xs">
            <li><a href="index.php">Inicio</a></li>
            <li class="active">Qu&eacute; es Deco Tour</li> 
          </ol>
          <!-- fin breadcrumbs -->

          <hr class="margentop-0 hr-color"/>

          <!-- CAJA VERDE CON TEXTO -->
          <div class="fondo-verde caja-informativa">
            <h3 class="titulo">Lo que hacemos</h3>

            <p>Recorremos distintos barrios de Buenos Aires en busca de tiendas de diseño para acercarte propuestas originales que puedan serte útil al momento de renovar un espacio o darle un toque especial.</p>
            <p>Además, como nuestro principal objetivo es compartir todo lo que vamos descubriendo, publicaremos en nuestro blog sobre lugares donde podés hacer cursos, carreras, seminarios, junto con una agenda de eventos de arte y decoración y lo mejor, tips de expertos para saber qué comprar y dónde.</p>
            <p>No vendemos productos, tampoco somos una revista de deco, sólo queremos mostrarte lo que hay y ayudarte a encontrar lo que estas buscando.</p>  

            <h3 class="titulo">Somos las que somos</h3>
            <p>Podríamos decir que somos un grupo de jóvenes profesionales que intenta crear una herramienta de búsqueda de tiendas y promover a la vez el diseño independiente. Pero en realidad lo que somos, es un grupo de amigas, con muchas ganas de unir pasiones y de crear algo útil, fácil  de usar y copado para los adictos a la deco como nosotras.</p>    
            
  
            <h3 class="titulo">Entonces la idea es que…</h3>

            <p>Puedas hacer un tour virtual por los mejores y más originales espacios de decoración, y que de manera muy simple esta guía te ayude a buscar tiendas por su nombre, zonas o categorías y así poder armarte circuitos de compra para aprovechar mejor tu tiempo un finde soleado.</p>
            <p>Esperamos que disfrutes este recorrido, y contamos con vos para hacerlo más grande día a día.</p>
              
            <p>Equipo DC!!</p>  
          </div>
          <!-- FIN CAJA VERDE CON TEXTO -->
        
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