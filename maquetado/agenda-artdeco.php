<!DOCTYPE html> 
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Guau Haus</title>

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
    <div class="row">
      

        <!-- div con columna izquierda y central -->
        <div  class="col-md-9 col-sm-9 padding-right-0">
          <!-- columna izquierda home -->
          <section id="columnaIzquierdaHome" class="col-md-3 col-sm-4 col-xs-12"> 
            
            <!-- categorias -->
            <div class="col-md-12 col-sm-12 hidden-xs row">
                <img class="pull-left margentop-10 img-responsive" src="images/page_green.png" alt="categorias" />
                <h3 class="text-right">Categor&iacute;as</h3>
                <ul id="listaCategoriasHome" class="myUnderwood">
                   <li><img class="pull-left" src="images/check.png" alt="categoria" /> Categor&iacute;a</li>
                   <li class="limpiador"><img class="pull-left" src="images/check.png" alt="categoria"  /> Categor&iacute;a</li>
                   <li class="limpiador"><img class="pull-left" src="images/check.png" alt="categoria"  /> Categor&iacute;a</li>
                   <li class="limpiador"><img class="pull-left" src="images/check.png" alt="categoria"  /> Categor&iacute;a</li>
                   <li class="limpiador"><img class="pull-left" src="images/check.png" alt="categoria"  /> Categor&iacute;a</li>
                   <li class="limpiador"><img class="pull-left" src="images/check.png" alt="categoria"  /> Categor&iacute;a</li>
                   <li class="limpiador"><img class="pull-left" src="images/check.png" alt="categoria"  /> Categor&iacute;a</li>
                   

                </ul>
            </div> 
            <!-- fin categorias -->

            <!-- notas -->
            <div class="col-md-12 col-sm-12 hidden-xs row">
                <img class="pull-left margentop-10" src="images/attachment.png" alt="categorias" width="50px" height="52px" />
                <h3 class="text-center fuente-40">Notas de<br/>inter&eacute;s</h3>
                <ul id='listaNotas' class="listaNotas">
                  
                  <li><p class="tituloNotaAgenda"><a href="circuito-must-tienda.php">Tienda de la semana</a></p><p class="subtituloNotaHome">adipisicing consectetur elit</p></li>
                  <li><p class="tituloNotaAgenda"><a href="circuito-must-tienda.php">Tienda de la semana</a></p><p class="subtituloNotaHome">adipisicing consectetur elit</p></li>
                </ul>

                <ul id='listaNotas2' class="listaNotas">
                  <li><p class="tituloNotaAgenda"><a href="post-individual.php">De nuestro Blog</a></p><p class="subtituloNotaHome">adipisicing consectetur elit</p></li>
                  <li><p class="tituloNotaAgenda"><a href="post-individual.php">De nuestro Blog</a></p><p class="subtituloNotaHome">adipisicing consectetur elit</p></li>
                </ul>

         
                
            </div> 
            <!-- fin notas -->
            
            <!-- caja newsletter -->
          <div id="cajaNewsletter" class="col-xs-12 row margentop-10">
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
          </div>
          <!-- fin caja newsletter -->

          </section>
          <!-- fin columna izquierda  -->

          <!-- contenido principal -->
          <section id="columnaCentralAgenda" class="col-md-9 col-sm-8 row padding-right-0">

            
            
            
            <h1 class="text-center margentop-0">Agenda Art-Deco</h1>

            <div class="fondo-verde col-xs-12">
              <h2 class="nombreEvento">Nombre evento</h2>
              <p class="fechaHoraEvento"><span class="fechaEvento">03/05/2015</span> a las <span class="horaEvento">15:00</span> horas </p>
              <p class="descripcionesEvento">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              <p class="contactoEvento"><span class="webEvento">www.web.com.ar</span> | <span class="mailEvento">info@evento.com.ar</span> | <span class="telEvento">(011) 4344-3456</span></p>
              <p class="precioEvento">Precio: <span class="precioEvento">$450</span></p>
              <hr class="hrEvento">  
            </div>

            <div class="fondo-verde col-xs-12">
              <h2 class="nombreEvento">Nombre evento</h2>
              <p class="fechaHoraEvento"><span class="fechaEvento">03/05/2015</span> a las <span class="horaEvento">15:00</span> horas </p>
              <p class="descripcionesEvento">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              <p class="contactoEvento"><span class="webEvento">www.web.com.ar</span> | <span class="mailEvento">info@evento.com.ar</span> | <span class="telEvento">(011) 4344-3456</span></p>
              <p class="precioEvento">Precio: <span class="precioEvento">$450</span></p>
              <hr class="hrEvento">  
            </div>

            <div class="fondo-verde col-xs-12">
              <h2 class="nombreEvento">Nombre evento</h2>
              <p class="fechaHoraEvento"><span class="fechaEvento">03/05/2015</span> a las <span class="horaEvento">15:00</span> horas </p>
              <p class="descripcionesEvento">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              <p class="contactoEvento"><span class="webEvento">www.web.com.ar</span> | <span class="mailEvento">info@evento.com.ar</span> | <span class="telEvento">(011) 4344-3456</span></p>
              <p class="precioEvento">Precio: <span class="precioEvento">$450</span></p>
              <hr class="hrEvento">  
            </div>

          </section>
          <!-- fin contenido principal -->

          <div class="limpiador"></div>
          
          

         

        </div> <!-- fin div contenidos principales -->  

      <!-- publicidad -->
      
      <aside class="col-md-3 col-sm-3" id="columnaPublicidadHome">
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