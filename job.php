
       <?php
        date_default_timezone_set("America/Mexico_City");
        setlocale(LC_TIME,"es_MX.UTF-8");
        /* para optener la fecha y hora */
        $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
                  $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
        ?>



        
<!DOCTYPE html>
<html lang="en">

        
  <head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/ldobus.png" />

    <title>Bolsa de Trabajo</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
    
 <!-- Global site tag (gtag.js) - Google Analytics -->
 <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127399241-1"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-127399241-1');
      </script>



  </head>

  <body id="page-top">

   
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="animated zoomIn" class="navbar-brand js-scroll-trigger" href="index.php"><img src="img/LA.png" class="img-responsive" alt="Logo"></a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-success text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto text-center">
            
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php">Volver</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header vacantes -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container">
          <img class="animated flip" class="img-fluid md-0 d-block mx-auto" src="img/job/iconjob.png" alt="">
          <br><br>
        <h1 class="animated flip" class="font-weight-light mb-0">Unete a Nuestro Equipo</h1>
        <h3 class="animated flip" class="font-weight-light mb-0">Te estamos buscando</h3>
      </div>
    </header>

    <!-- seccion 1 de vacantes -->
    <section>
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Vacantes</h2>
        <br>
        <div class="row">
          <div class="col-md-12 col-lg-12">
              
          <div class="card-deck">
          <!-- inicio de tarjetas de vacanates -->
          <!-- PRIMER VACANTE -->
            <div class="card">
              <img class="card-img-top" src="img/job/driver.png" alt="Operador">
              <div class="card-body">
                <h4 class="card-title">Operador</h4>
                <h6>Requisitos</h6>
                <p class="card"><ul>
                  <li>Entre 30 y 50 años</li>
                  <li>Licencia Federal Tipo A</li>
                  <li>3 Años de Experiencia</li>
                  <li>Si quieres aprender contamos con escuela de manejo</li>
                </ul></p>
                <p class="card-text"><small class="text-muted"><?php echo $dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;?></small></p>
              </div>
            </div>
            <!-- SEGUNDA VACANTE -->
            <div class="card">
              <img class="card-img-top" src="img/job/ticket.png" alt="Vendedor de boletos">
              <div class="card-body">
                <h4 class="card-title">Vendedor de boletos</h4>
                <h6>Requisitos</h6>
                <p class="card-text"><ul>
                <li>Facilidad de palabra</li>
                  <li>Actitud de servicio</li>
                  <li>Gusto por las ventas</li>
                </ul></p>
                <p class="card-text"><small class="text-muted"><?php echo $dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;?></small></p>
              </div>
            </div>
            <!-- TERCER VACANTE -->
            <div class="card">
              <img class="card-img-top" src="img/job/movil.png" alt="Desarrollador Movil">
              <div class="card-body">
                <h4 class="card-title">Desarrollador Movil</h4>
                <h6>Conocimientos</h6>
                <p class="card-text"><ul>
                <li>JAVA</li>
                  <li>KOTLIN</li>
                  <li>SWIFT</li>
                </ul></p>
                <p class="card-text"><small class="text-muted"><?php echo $dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;?></small></p>
              </div>
            </div>

        <!-- fin de tarjetas de vacanates -->
      
      <!-- seccion 2 de vacantes 
     
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-12">
              
          <div class="card-deck">
      
          
            <div class="card">
              <img class="card-img-top" src="img/vacante.png" alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title">Operador</h4>
                <h6>Requisitos</h6>
                <p class="card"><ul>
                  <li>Entre 30 y 50 años</li>
                  <li>Licencia Federal Tipo A</li>
                  <li>3 Años de Experiencia</li>
                </ul></p>
                <p class="card-text"><small class="text-muted"></small></p>
              </div>
            </div>
           
            <div class="card">
              <img class="card-img-top" src="img/vacante.png" alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title">Vendedor de boletos</h4>
                <h6>Requisitos</h6>
                <p class="card-text"><ul>
                  <li>Facilidad de palabra</li>
                  <li>Actitud de servicio</li>
                  <li>Gusto por las ventas</li>
                </ul></p>
                <p class="card-text"><small class="text-muted"></small></p>
              </div>
            </div>
           
            <div class="card">
              <img class="card-img-top" src="img/vacante.png" alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title">Desarrollador Movil</h4>
                <h6>Conocimientos</h6>
                <p class="card-text"><ul>
                  <li>JAVA</li>
                  <li>KOTLIN</li>
                  <li>SWIFT</li>
                </ul></p>
                <p class="card-text"><small class="text-muted"></small></p>
              </div>
            </div>
            --> 
        <!-- fin de tarjetas de vacanates -->
          </div>
        </div>
      </div>

    </section>

    <!-- seccion paqueteria -->
    <section class="bg-primary text-white mb-0" id="about">
      <div class="container">
        <h2 class="text-center text-uppercase text-white">+ INFORMACION</h2>
        <br>
        <div class="text-center">
        <div class="col-lg-12 mr-auto">
            <p class="lead text-secondary">COMUNICATE A LOS TELEFONOS</p>
          </div>
        </div>
        <div class="row">
          <div class="text-center col-lg-12 ml-auto">
            <p class="lead">443-3-23-10-10 | 443-3-23-10-00</p>
          </div>
        
        </div>
        <div class="text-center">
        <div class="col-lg-12 mr-auto">
            <p class="lead text-secondary">ENVIA TU CURRICULUM VITAE</p>
          </div>
        </div>
        <div class="text-center mt-4">
          <a class="list-inline-item">
         
              <a class="btn btn-outline-light" href="https://mail.google.com/mail/" target="_blank" role="button">linea.oro.sh@gmail.com</a>
          </a>
        </div>
        <br>
        <div class="text-center">
        <div class="col-lg-12 mr-auto">
            <p class="lead text-secondary">SIGUENOS EN NUESTRAS REDES SOCIALES</p>
          </div>
        </div>
         <div class="text-center mt-4">
          <ul class="list-inline mb-0">
            <li class="list-inline-item">
              <a class="btn btn-outline-light btn-social text-center rounded-circle" href="https://es-la.facebook.com/LineadeoroSJH/" target="_blank">
                <i class="fab fa-fw fa-facebook-f"></i>
              </a>
              <a class="btn btn-outline-light btn-social text-center rounded-circle" href="https://www.instagram.com/lineadeorosanjuanhuetamo/?hl=es-la" target="_blank">
                <i class="fab fa-fw fa-instagram"></i>
              </a>
              <a class="btn btn-outline-light btn-social text-center rounded-circle" href="https://twitter.com/ldo_mx" target="_blank">
                <i class="fab fa-fw fa-twitter"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </section>

     <!-- seccion contacto 
     <section id="contact">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Contacto</h2>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            
            
          </div>
        </div>
      </div>
    </section>
-->

    
    
   

    <div class="copyright py-6 text-center text-white">
      <div class="container footter-Linea">
        <small>Linea de Oro San Juan Huetamo S.A. de C.V. | <?php echo date('Y') ;?></small>
      </div>
    </div>

  
    

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>

    <script src="js/cookies.js"></script>

  </body>

</html>
