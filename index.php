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
      <h1 class="hide">Gu&iacute;a Guau Haus</h1>

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

            <!-- agenda -->
            <div class="col-md-12 col-sm-12 hidden-xs row">
                <img class="pull-left margentop-10" src="images/calendar.png" alt="categorias" width="50px" height="52px" />
                <h3 class="text-center fuente-40"><a class="linkAgenda" href="agenda-artdeco.php">Agenda <br/>art-deco</a></h3>
                
                  <ul id='listaAgendaHome'>
                    <li id="evento1">
                      <p>
                      <span class="fecha">02/03</span> 
                      <span class="evento">Lorem ipsum dolor</span>
                      </p>
                      <p class="descripcionEvento">consectetur adipisicing elit</p>
                    </li>

                    <li id="evento2">
                      <p>
                      <span class="fecha">02/03</span> 
                      <span class="evento">Lorem ipsum dolor</span>
                      </p>
                      <p class="descripcionEvento">consectetur adipisicing elit</p>
                    </li>

                    <li id="evento3">
                      <p>
                      <span class="fecha">02/03</span> 
                      <span class="evento">Lorem ipsum dolor</span>
                      </p>
                      <p class="descripcionEvento">consectetur adipisicing elit</p>
                    </li>
                  </ul>
                 
            </div> 
            <!-- fin agenda -->

          </section>
          <!-- fin columna izquierda home -->

          <!-- contenido principal -->
          <section id="columnaCentralHome" class="col-md-9 col-sm-8 row padding-right-0">

            <!-- tienda del momento -->
            <div id="tiendaMomentoHome" class="col-md-12 col-sm-12 padding-right-0">
              <a href="circuito-must-tienda.php " class="link-h2">
                <h2 class="text-center fuente-50 ">Tienda del momento</h2>
                <img class="center-block img-responsive" id="tiendaDelMomento" src="images/tiendadelmomento.jpg" width="510px" height="246px" />
              </a>
            </div>
            <!-- fin tienda del momento -->

            <!-- circuito del mes -->
            <div id="circuitoMesHome" class="col-md-12 padding-right-0 margentop-30">
              <a href="circuitos-must.php" class="link-h2">
                <h2 class="text-center fuente-50 link-h2">Circuito del mes</h2>
                <img class="center-block img-responsive" id="circuitoDelMes" src="images/tiendadelmomento.jpg" width="510px" height="246px" />
              </a>
            </div>

            <div id="newsSM" class="visible-sm">
               <img src="images/envelope.png" class="pull-left margentop-20 " alt="suscribite" width="50px" height="37px" />
              <h3 class="margenleft-60 fuente-40">Suscribite</h3>

              <!-- Begin MailChimp Signup Form -->
                  <link href="//cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css">
                  
                  <div id="mc_embed_signup_sm">
                    <form action="//guauhaus.us9.list-manage.com/subscribe/post?u=aaf517c1879cd27562cf80de9&amp;id=8813574ce0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                      
                      <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email" required>
                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                        <div style="position: absolute; left: -5000px;"><input type="text" name="b_aaf517c1879cd27562cf80de9_8813574ce0" tabindex="-1" value=""></div>
                        <div class="clear"><input type="submit" value="Enviar" name="subscribe" id="mc-embedded-subscribe" class="botonSuscribir"></div>
                    </form>
                  </div>

                  <!--End mc_embed_signup-->
            </div>
            <!-- fin circuito del mes -->

          </section>
          <!-- fin contenido principal -->

          <div class="limpiador"></div>
          
          <!-- caja newsletter -->
          <section id="cajaNewsletter" class="col-md-3 col-sm-3 hidden-sm">
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

          <!-- caja notas de interes -->
          <section id="cajaNotasInteres" class="col-md-9 col-sm-12 col-xs-12 margentop-30">
            <h3 class="text-center margentop-0 fuente-50">Notas de inter&eacute;s</h3>
            
            <div class="col-md-6 col-sm-6 col-xs-6">
              <ul id="notasInteres1">
                <li><img src="images/attachment.png" class="pull-left"><p class="tituloNotaHome"><a href="circuito-must-tienda.php">Tienda de la semana</a></p><p class="subtituloNotaHome">adipisicing consectetur elit</p></li>
                <li><img src="images/attachment.png" class="pull-left"><p class="tituloNotaHome"><a href="circuito-must-tienda.php">Tienda de la semana</a></p><p class="subtituloNotaHome">adipisicing consectetur elit</p></li>
              </ul>
            </div>
            
            <div class="col-md-6 col-sm-6 col-xs-6">
              <ul id="notasInteres2">
                <li><img src="images/attachment.png" class="pull-left"><p class="tituloNotaHome"><a href="post-individual.php">De nuestro Blog</a></p><p class="subtituloNotaHome">adipisicing consectetur elit</p></li>
                <li><img src="images/attachment.png" class="pull-left"><p class="tituloNotaHome"><a href="post-individual.php">De nuestro Blog</a></p><p class="subtituloNotaHome">adipisicing consectetur elit</p></li>
              </ul>
            </div>

          </section>
          <!-- fin caja notas de interes -->

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