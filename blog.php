<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog</title>

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
          
          <h1 class="text-center fuente-50">Blog</h1>  

         

          <hr class="margentop-0"/>


         <!-- caja entradas VIENE DE QUERY -->
          
          <div id="notas" class="fondo-verde">
            
            <div class="col-xs-12 fondo-verde">
              
              <!-- ejemplo nota 1 -->
              <div class="nota col-xs-12">
                <a href="post-individual.php">
                  <img class="media-object col-xs-2 col-sm-3 row" src="images/blog.jpg" alt="post" />
                </a>
                <div class="media-body col-xs-10 col-sm-9 row">
                
                  <h4 class="margentop-0"><a href="post-individual.php">Lorem Ipsum Dolor</a></h4>
                  <p class="text-justify">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <a class="verMas" href="post-individual.php">Ver m&aacute;s</a></p>
                  

                </div>
               </div>

               <!-- fin ejemplo nota 1 -->
               
               <div class="limpiador"></div> 
              <!-- ejemplo nota 2 -->  
              <div class="nota col-xs-12">
                <a href="post-individual.php">
                  <img class="media-object col-xs-2 col-sm-3 row" src="images/blog.jpg" alt="post" />
                </a>
                <div class="media-body col-xs-10 col-sm-9 row">
                
                  <h4 class="margentop-0"><a href="post-individual.php">Lorem Ipsum Dolor</a></h4>
                  <p class="text-justify">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <a class="verMas" href="post-individual.php">Ver m&aacute;s</a></p>
                  

                </div>
               </div>
                <!-- fin nota  2 -->
               <!-- ejemplo nota 3 -->  
              <div class="nota col-xs-12">
                <a href="post-individual.php">
                  <img class="media-object col-xs-2 col-sm-3 row" src="images/blog.jpg" alt="post" />
                </a>
                <div class="media-body col-xs-10 col-sm-9 row">
                
                  <h4 class="margentop-0"><a href="post-individual.php">Lorem Ipsum Dolor</a></h4>
                  <p class="text-justify">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <a class="verMas" href="post-individual.php">Ver m&aacute;s</a></p>
                  

                </div>
               </div>
                <!-- fin nota  3 -->

             
            </div>
          </div>
          <!-- fin notas -->


          <div class="limpiador"></div>

          

          

          
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