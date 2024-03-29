<?php
date_default_timezone_set("America/Mexico_City");
setlocale(LC_TIME, "es_MX.UTF-8");
/* para optener la fecha y hora */
$dias = array("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sábado");
$meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
?>


<!DOCTYPE html>
<html lang="en">


<head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="img/ldobus.png" />


  <title>Linea de Oro</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Plugin CSS -->
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <!-- Custom styles for this template -->
  <link href="css/freelancer.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/animate.css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">



  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127399241-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
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
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Salidas</a>
          </li>

          <li class="nav-item mx-0 mx-lg-1">
            <a class="card-header nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger resaltar" href="#about">Servicio de Paqueteria</a>
          </li>

          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contacto</a>
          </li>

          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="job.php">Bolsa de Trabajo</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>

  <!-- Header  SLIDER-->
  <header class="masthead bg-primary">
    <div class="content-slider">
      <div class="imagenes">
        <img class="mySlides" src="img/inicio.png">
        <img class="mySlides" src="img/portfolio/IMG35.png">
        <img class="mySlides" src="img/portfolio/IMG36.png">
        <img class="mySlides" src="img/portfolio/IMG37.png">

        <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
        <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
      </div>
    </div>
  </header>


  <!-- ChatBot -->
  <link rel="stylesheet" href="css/chatbot.css">
  <script src="https://es.snatchbot.me/sdk/webchat.min.js"></script>
  <script>
    Init('?botID=54564&appID=webchat', 600, 600, 'https://dvgpba5hywmpo.cloudfront.net/media/image/6o9IqZO66s62LClrjubddIVam', 'bubble', '#166936', 90, 90, 62.99999999999999, '', '1', '#ce9c02', '#ce9c02', 0); /* for authentication of its users, you can define your userID (add &userID={login}) */
  </script>

  <!-- seccion de promociones -->
  <!-- 
    <section id="promociones">
      <div class="container">
        <h1>Promociones</h1>
        <div class="slider">
			<ul>
				<li>
          <img src="img/portfolio/IMG31.png" alt="">
        </li>
				<li>
          <img src="img/portfolio/IMG32.png" alt="">
        </li>
				<li>
          <img src="img/portfolio/IMG33.png" alt="">
        </li>
				<li>
          <img src="img/portfolio/IMG34.png" alt="">
        </li>
			</ul>
		</div>
        
      </div>
    </section>
-->

  <!-- seccion de noticias -->
  <section class="portfolio" id="portfolio">
    <div class="container">
      <h2 class="text-center text-uppercase text-secondary mb-0">Salidas</h2>
      <hr class="star-dark mb-5">
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-1">
            <div class="portfolio-item-captionModal1 d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-contentModal1 my-auto w-100 text-center text-white">

              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/IMG30.png" alt="">
          </a>
        </div>


        <div class="col-md-6 col-lg-4">
          <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-2">
            <div class="portfolio-item-captionModal2 d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-contentModal2 my-auto w-100 text-center text-white">

              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/IMG31.png" alt="">
          </a>
        </div>

        <div class="col-md-6 col-lg-4">
          <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-3">
            <div class="portfolio-item-captionModal3 d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-contentModal3 my-auto w-100 text-center text-white">

              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/IMG33.png" alt="">
          </a>
        </div>

        <div class="col-md-6 col-lg-4">
          <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-4">
            <div class="portfolio-item-captionModal4 d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-contentModal4 my-auto w-100 text-center text-white">

              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/IMG34.png" alt="">
          </a>
        </div>


        <div class="col-md-6 col-lg-4">
          <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-5">
            <div class="portfolio-item-captionModal5 d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-contentModal5 my-auto w-100 text-center text-white">

              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/IMG35.png" alt="">
          </a>
        </div>


        <div class="col-md-6 col-lg-4">
          <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-6">
            <div class="portfolio-item-captionModal6 d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-contentModal6 my-auto w-100 text-center text-white">

              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/IMG36.png" alt="">
          </a>
        </div>


        <div class="col-md-6 col-lg-4">
          <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-7">
            <div class="portfolio-item-captionModal7 d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-contentModal7 my-auto w-100 text-center text-white">

              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/IMG32.png" alt="">
          </a>
        </div>

        <div class="col-md-6 col-lg-4">
          <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-8">
            <div class="portfolio-item-captionModal8 d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-contentModal8 my-auto w-100 text-center text-white">

              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/IMG37.png" alt="">
          </a>
        </div>

        <div class="col-md-6 col-lg-4">
          <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-9">
            <div class="portfolio-item-captionModal9 d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-contentModal9 my-auto w-100 text-center text-white">

              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/IMG38.png" alt="">
          </a>
        </div>


        <!-- simulacion para centrar la 10 -->
        <div class="col-md-6 col-lg-4">

        </div>

        <div class="col-md-6 col-lg-4">
          <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-10">
            <div class="portfolio-item-captionModal10 d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-contentModal10 my-auto w-100 text-center text-white">

              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/IMG39.png" alt="">
          </a>
        </div>

      </div>
    </div>

  </section>



  <!-- seccion paqueteria -->
  <section class="bg-primary text-white mb-0" id="about">
    <div class="container">
      <h2 class="text-center text-uppercase text-white">Paqueteria</h2>
      <hr class="star-light mb-5">
      <div class="text-center">
        <div class="col-lg-12 mr-auto">
          <p class="lead">INFORMES Y RESERVACIONES</p>
        </div>
      </div>
      <div class="row">
        <div class="text-center col-lg-2 ml-auto">
          <p class="lead">(443) 3160510</p>
        </div>

        <div class="text-center col-lg-2 mr-auto">
          <p class="lead">(435) 5562577</p>
        </div>
      </div>
      <div class="text-center mt-4">
        <a class="list-inline-item">

          <a data-toggle="modal" data-target="#Paqueteria" target="_blank" role="button"><i class="icono fas fa-box"></i>Cotizacion preliminar</a>
        </a>
      </div>
      <br>
      <div class="text-center">
        <div class="col-lg-12 mr-auto">
          <p class="lead">NUESTRO CORREO</p>
        </div>
      </div>
      <div class="text-center mt-4">
        <a class="list-inline-item">

          <a class="btn btn-outline-light" href="https://mail.google.com/mail/" target="_blank" role="button">linea.oro.sh@gmail.com</a>
        </a>
      </div>
    
      <!-- 
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
          -->

    </div>
  </section>

  

  <!-- seccion contacto -->
  <section id="contact">
    <div class="container">
      <h2 class="text-center text-uppercase text-secondary mb-0">Contacto</h2>
      <hr class="star-dark mb-5">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <form name="sentMessage" id="contactForm" novalidate="novalidate">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Nombre</label>
                <input class="form-control" id="name" type="text" placeholder="Nombre" required="required" data-validation-required-message="Por favor ingresa tu Nombre.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Email</label>
                <input class="form-control" id="email" type="email" placeholder="Email" required="required" data-validation-required-message="Por favor ingresa tu Email.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Telefono</label>
                <input class="form-control" id="phone" type="number" placeholder="Telefono" required="required" data-validation-required-message="Por favor ingresa tu numero de Telefono.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Comentario</label>
                <textarea class="form-control" id="message" rows="5" placeholder="Comentario" required="required" data-validation-required-message="Por favor ingresa tu Comentario."></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <br>
            <div id="success"></div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Enviar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <h2 class="text-center text-uppercase text-secondary mb-0">Encuentranos en</h2>
      <br>
      <img src="img/mapa.png" alt="Ubicaciones">
    </div>
  </section>


  <?php

  include 'footer.php';

  ?>




  <div class="copyright py-6 text-center text-white">
    <div class="container footter-Linea">
      <small>Linea de Oro San Juan Huetamo S.A. de C.V. | <?php echo date('Y'); ?></small>
    </div>
  </div>

  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>

  <!-- Salidas Modals -->

  <!-- Salida Modal 1 -->
  <div class="portfolio-modal mfp-hide" id="portfolio-modal-1">
    <div class="portfolio-modal-dialog bg-white">
      <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
        <i class="fa fa-3x fa-times"></i>
      </a>
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-secondary text-uppercase mb-0">Morelia</h2>
            <hr class="star-dark mb-5">
            <a href="index.php"><img class="img-fluid mb-5" src="img/portfolio/LOGO5.png" alt=""></a>


            <div class="alert alert-success" role="alert">
              <small class="text-muted">Servicio de Paqueteria Express</small>
              <hr>
              <?php
              echo $dias[date('w')] . " " . date('d') . " de " . $meses[date('n') - 1] . " del " . date('Y');
              ?>
              <hr>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>
                      <h3>Destino</h3>
                    </th>
                    <th>
                      <h3>Horarios</h3>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <h4 class="alert-heading">Destino a Cd. Altamirano - Via Caracuaro</h4>
                    </td>
                    <td>
                      <p class="mb-0">03:00, 05:00, 06:00, 08:00, 09:00, 10:00, 12:00, 14:00, 16:00, 17:00, 19:00, 21:00, 24:00.</p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <h4 class="alert-heading">Destino a Cd. Altamirano - Via Tiquicheo</h4>
                    </td>
                    <td>
                      <p class="mb-0">05:00, 08:30, 09:30, 12:15, 14:15. 17:15.</p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <h4 class="alert-heading">Destino a Tuzantla, Benito Juarez y Zitacuaro.</h4>
                    </td>
                    <td>
                      <p class="mb-0">15:00.</p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <h4 class="alert-heading">Destino a Zirandaro</h4>
                    </td>
                    <td>
                      <p class="mb-0">09:30.</p>
                    </td>
                  </tr>
                </tbody>
              </table>

            </div>

            <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
              <i class="fa fa-close"></i>
              Cerrar</a>
          </div>
        </div>
      </div>
    </div>
  </div>



  <!-- Salida Modal  -->
  <div class="portfolio-modal mfp-hide" id="portfolio-modal-2">
    <div class="portfolio-modal-dialog bg-white">
      <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
        <i class="fa fa-3x fa-times"></i>
      </a>
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-secondary text-uppercase mb-0">Nocupetaro</h2>
            <hr class="star-dark mb-5">
            <a href="index.php"><img class="img-fluid mb-5" src="img/portfolio/LOGO5.png" alt=""></a>
            <div class="alert alert-success" role="alert">
              <small class="text-muted">Servicio de Paqueteria Express</small>
              <hr>
              <?php
              echo $dias[date('w')] . " " . date('d') . " de " . $meses[date('n') - 1] . " del " . date('Y');
              ?>
              <hr>
              <h4 class="alert-heading">Destino a Morelia</h4>

              <hr>
              <p class="mb-0"><strong>Horarios: </strong> 05:00, 07:00, 09:00, 10:00, 11:00, 12:00, 02:00, 03:00, 04:00, 06:00, 07:00, 24:00.</p>
              <hr>

              <h4 class="alert-heading">Destino a Cd. Altamirano</h4>

              <hr>
              <p class="mb-0"><strong>Horarios: </strong>03:00, 06:00, 08:00, 09:00, 11:00, 12:00, 01:00, 03:00, 05:00, 07:00, 08:00, 22:00, 24:00.</p>

            </div>

            <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
              <i class="fa fa-close"></i>
              Cerrar</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Salida Modal 3 -->
  <div class="portfolio-modal mfp-hide" id="portfolio-modal-3">
    <div class="portfolio-modal-dialog bg-white">
      <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
        <i class="fa fa-3x fa-times"></i>
      </a>
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-secondary text-uppercase mb-0">Caracuaro</h2>
            <hr class="star-dark mb-5">
            <a href="index.php"><img class="img-fluid mb-5" src="img/portfolio/LOGO5.png" alt=""></a>
            <div class="alert alert-success" role="alert">
              <small class="text-muted">Servicio de Paqueteria Express</small>
              <hr>
              <?php
              echo $dias[date('w')] . " " . date('d') . " de " . $meses[date('n') - 1] . " del " . date('Y');
              ?>
              <hr>
              <h4 class="alert-heading">Destino a Morelia</h4>

              <hr>
              <p class="mb-0"><strong>Horarios: </strong> 01:00, 04:00, 06:30, 08:30, 09:30, 10:40, 11:40, 13:40, 14:30, 15:30, 17:45, 19:00, 23:30.</p>
              <hr>

              <h4 class="alert-heading">Destino a Cd. Altamirano</h4>

              <hr>
              <p class="mb-0"><strong>Horarios: </strong> 24:15, 03:00, 06:15, 08:15, 09:15, 11:15, 12:15, 13:15, 15:15, 17:15, 19:15, 20:15, 22:15.</p>

            </div>

            <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
              <i class="fa fa-close"></i>
              Cerrar</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Salida Modal 4 -->
  <div class="portfolio-modal mfp-hide" id="portfolio-modal-4">
    <div class="portfolio-modal-dialog bg-white">
      <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
        <i class="fa fa-3x fa-times"></i>
      </a>
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-secondary text-uppercase mb-0">PASO DE NUÑEZ</h2>
            <hr class="star-dark mb-5">
            <a href="index.php"><img class="img-fluid mb-5" src="img/portfolio/LOGO5.png" alt=""></a>
            <small class="text-muted">Servicio de Paqueteria Express</small>
            <hr>
            <div class="alert alert-success" role="alert">
              <?php
              echo $dias[date('w')] . " " . date('d') . " de " . $meses[date('n') - 1] . " del " . date('Y');
              ?>
              <hr>
              <h4 class="alert-heading">Destino a Morelia</h4>

              <hr>
              <p class="mb-0"><strong>Horarios: </strong>01:00, 03:30, 06:00, 08:00, 09:00, 10:15, 11:15, 13:15, 14:00, 15:00, 17:20, 18:30, 23:00, 24:30.</p>
              <hr>

              <h4 class="alert-heading">Destino a Cd. Altamirano</h4>

              <hr>
              <p class="mb-0"><strong>Horarios: </strong>01:30, 03:30, 07:00, 09:00, 10:00, 12:00, 13:00, 14:00, 16:00, 18:00, 20:00, 21:00, 23:00.</p>

            </div>
            <hr>
            <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
              <i class="fa fa-close"></i>
              Cerrar</a>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Salida Modal 5 -->
  <div class="portfolio-modal mfp-hide" id="portfolio-modal-5">
    <div class="portfolio-modal-dialog bg-white">
      <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
        <i class="fa fa-3x fa-times"></i>
      </a>
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-secondary text-uppercase mb-0">HUETAMO</h2>
            <hr class="star-dark mb-5">
            <a href="index.php"><img class="img-fluid mb-5" src="img/portfolio/LOGO5.png" alt=""></a>

            <div class="alert alert-success" role="alert">
              <small class="text-muted">Servicio de Paqueteria Express</small>
              <hr>
              <?php
              echo $dias[date('w')] . " " . date('d') . " de " . $meses[date('n') - 1] . " del " . date('Y');
              ?>
              <hr>
              <h4 class="alert-heading">Destino a Morelia - Via Caracuaro</h4>

              <hr>
              <p class="mb-0"><strong>Horarios: </strong> 02:30, 04:30, 05:00, 07:00, 08:00, 09:15, 10:15, 12:15, 13:00, 14:00, 16:20, 17:30, 22:00, 23:30.</p>
              <hr>

              <h4 class="alert-heading">Destino a Morelia - Via Tiquicheo</h4>

              <hr>
              <p class="mb-0"><strong>Horarios: </strong>07:30, 10:00, 13:30, 16:00. </p>
              <hr>
              <h4 class="alert-heading">Destino a Zitacuaro</h4>

              <hr>
              <p class="mb-0"><strong>Horarios: </strong>18:15. </p>
              <hr>
              <h4 class="alert-heading">Destino a Cd. Altamirano</h4>

              <hr>
              <p class="mb-0"><strong>Horarios: </strong>03:00, 05:00, 08:00, 10:00, 10:30, 11:00, 13:00, 13:30, 14:00, 15:00, 17:00, 17:30, 19:00, 19:30, 21:00, 22:00, 22:30, 24:00. </p>

            </div>
            <hr>
            <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
              <i class="fa fa-close"></i>
              Cerrar</a>
          </div>
        </div>
      </div>
    </div>
  </div>




  <!-- Salida Modal 6 -->
  <div class="portfolio-modal mfp-hide" id="portfolio-modal-6">
    <div class="portfolio-modal-dialog bg-white">
      <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
        <i class="fa fa-3x fa-times"></i>
      </a>
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-secondary text-uppercase mb-0">CD. ALTAMIRANO</h2>
            <hr class="star-dark mb-5">
            <a href="index.php"><img class="img-fluid mb-5" src="img/portfolio/LOGO5.png" alt=""></a>

            <div class="alert alert-success" role="alert">
              <small class="text-muted">Servicio de Paqueteria Express</small>
              <hr>
              <?php
              echo $dias[date('w')] . " " . date('d') . " de " . $meses[date('n') - 1] . " del " . date('Y');
              ?>
              <hr>
              <h4 class="alert-heading">Destino a Morelia - Via Caracuaro</h4>

              <hr>
              <p class="mb-0"><strong>Horarios: </strong>01:15, 03:30, 05:30, 06:30, 07:45, 08:45, 10:40, 12:30, 14:45, 16:00, 20:30, 23:00. </p>
              <hr>

              <h4 class="alert-heading">Destino a Morelia - Via Tiquicheo</h4>

              <hr>
              <p class="mb-0"><strong>Horarios: </strong>06:00, 08:15, 12:00, 14:30. </p>
              <hr>
              <h4 class="alert-heading">Destino a Zitacuaro</h4>

              <hr>
              <p class="mb-0"><strong>Horarios: </strong>16:45. </p>

            </div>
            <hr>
            <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
              <i class="fa fa-close"></i>
              Cerrar</a>
          </div>
        </div>
      </div>
    </div>
  </div>




  <!-- Salida Modal 7 -->
  <div class="portfolio-modal mfp-hide" id="portfolio-modal-7">
    <div class="portfolio-modal-dialog bg-white">
      <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
        <i class="fa fa-3x fa-times"></i>
      </a>
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-secondary text-uppercase mb-0">EL LIMON</h2>
            <hr class="star-dark mb-5">
            <a href="index.php"><img class="img-fluid mb-5" src="img/portfolio/LOGO5.png" alt=""></a>

            <div class="alert alert-success" role="alert">
              <small class="text-muted">Servicio de Paqueteria Express</small>
              <hr>
              <?php
              echo $dias[date('w')] . " " . date('d') . " de " . $meses[date('n') - 1] . " del " . date('Y');
              ?>
              <hr>
              <h4 class="alert-heading">Destino a Morelia</h4>

              <hr>
              <p class="mb-0"><strong>Horarios: </strong>09:30, 11:20, 15:30, 17:30.</p>
              <hr>

              <h4 class="alert-heading">Destino a Cd. Altamirano</h4>

              <hr>
              <p class="mb-0"><strong>Horarios: </strong>08:30, 09:15, 12:30, 16:10, 18:10, 21:00.</p>

            </div>
            <hr>
            <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
              <i class="fa fa-close"></i>
              Cerrar</a>
          </div>
        </div>
      </div>
    </div>
  </div>



  <!-- Salida Modal 8 -->
  <div class="portfolio-modal mfp-hide" id="portfolio-modal-8">
    <div class="portfolio-modal-dialog bg-white">
      <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
        <i class="fa fa-3x fa-times"></i>
      </a>
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-secondary text-uppercase mb-0">TIQUICHEO</h2>
            <hr class="star-dark mb-5">
            <a href="index.php"><img class="img-fluid mb-5" src="img/portfolio/LOGO5.png" alt=""></a>

            <div class="alert alert-success" role="alert">
              <small class="text-muted">Servicio de Paqueteria Express</small>
              <hr>
              <?php
              echo $dias[date('w')] . " " . date('d') . " de " . $meses[date('n') - 1] . " del " . date('Y');
              ?>
              <hr>
              <h4 class="alert-heading">Destino a Morelia</h4>

              <hr>
              <p class="mb-0"><strong>Horarios: </strong>08:40, 11:15, 14:40, 17:15.</p>
              <hr>

              <h4 class="alert-heading">Destino a Cd. Altamirano</h4>

              <hr>
              <p class="mb-0"><strong>Horarios: </strong>08:30, 09:15, 12:30 16:10, 18:10, 21:00.</p>
              <hr>
              <h4 class="alert-heading">Destino a Zitacuaro</h4>

              <hr>
              <p class="mb-0"><strong>Horarios: </strong>19:30.</p>

            </div>
            <hr>
            <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
              <i class="fa fa-close"></i>
              Cerrar</a>
          </div>
        </div>
      </div>
    </div>
  </div>






  <!-- Salida Modal 9 -->
  <div class="portfolio-modal mfp-hide" id="portfolio-modal-9">
    <div class="portfolio-modal-dialog bg-white">
      <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
        <i class="fa fa-3x fa-times"></i>
      </a>
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-secondary text-uppercase mb-0">ZITACUARO</h2>
            <hr class="star-dark mb-5">
            <a href="index.php"><img class="img-fluid mb-5" src="img/portfolio/LOGO5.png" alt=""></a>

            <div class="alert alert-success" role="alert">
              <small class="text-muted">Servicio de Paqueteria Express</small>
              <hr>
              <?php
              echo $dias[date('w')] . " " . date('d') . " de " . $meses[date('n') - 1] . " del " . date('Y');
              ?>
              <hr>
              <h4 class="alert-heading">Destino a Cd. Altamirano</h4>

              <hr>
              <p class="mb-0"><strong>Horarios: </strong>06:00.</p>
              <hr>

              <h4 class="alert-heading">Destino a Morelia</h4>

              <hr>
              <p class="mb-0"><strong>Horarios: </strong>08:00.</p>

            </div>
            <hr>
            <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
              <i class="fa fa-close"></i>
              Cerrar</a>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Salida Modal 10 -->
  <div class="portfolio-modal mfp-hide" id="portfolio-modal-10">
    <div class="portfolio-modal-dialog bg-white">
      <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
        <i class="fa fa-3x fa-times"></i>
      </a>
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-secondary text-uppercase mb-0">El Devanador</h2>
            <hr class="star-dark mb-5">
            <a href="index.php"><img class="img-fluid mb-5" src="img/portfolio/LOGO5.png" alt=""></a>

            <div class="alert alert-success" role="alert">
              <small class="text-muted">Servicio de Paqueteria Express</small>
              <hr>
              <?php
              echo $dias[date('w')] . " " . date('d') . " de " . $meses[date('n') - 1] . " del " . date('Y');
              ?>
              <hr>
              <h4 class="alert-heading">Destino a Morelia</h4>

              <hr>
              <p class="mb-0"><strong>Horarios: </strong>08:00, 11:00, 14:30, 16:30.</p>
              <hr>

              <h4 class="alert-heading">Destino a Huetamo</h4>

              <hr>
              <p class="mb-0"><strong>Horarios: </strong>10:30, 12:30, 16:00, 18:30.</p>

            </div>
            <hr>
            <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
              <i class="fa fa-close"></i>
              Cerrar</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Salida Modal 11 -->
  <div class="modal fade" id="Historia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Historia</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <h3>Mision y Vision</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente nostrum corrupti nobis earum, iste optio eius, minima adipisci reprehenderit rem nesciunt tenetur a commodi vero atque veritatis labore veniam sit?</p>
          <br>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente nostrum corrupti nobis earum, iste optio eius, minima adipisci reprehenderit rem nesciunt tenetur a commodi vero atque veritatis labore veniam sit?</p>
          <br>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente nostrum corrupti nobis earum, iste optio eius, minima adipisci reprehenderit rem nesciunt tenetur a commodi vero atque veritatis labore veniam sit?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

    <!-- Salida Modal 12 -->
    <div class="modal fade" id="Preguntas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Preguntas frecuentes</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <h4>Condiciones de uso</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente nostrum corrupti nobis earum, iste optio eius, minima adipisci reprehenderit rem nesciunt tenetur a commodi vero atque veritatis labore veniam sit?</p>
          <br>
          <h4>¿Donde puedo comprar mis boletos?</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente nostrum corrupti nobis earum, iste optio eius, minima adipisci reprehenderit rem nesciunt tenetur a commodi vero atque veritatis labore veniam sit?</p>
          <br>
          <h4>¿Puedo comprar boletos en internet?</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente nostrum corrupti nobis earum, iste optio eius, minima adipisci reprehenderit rem nesciunt tenetur a commodi vero atque veritatis labore veniam sit?</p>
          <br>
          <h4>¿Puedo comprar boletos en internet?</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente nostrum corrupti nobis earum, iste optio eius, minima adipisci reprehenderit rem nesciunt tenetur a commodi vero atque veritatis labore veniam sit?</p>
          <br>
          <h4>¿Puedo comprar boletos en internet?</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente nostrum corrupti nobis earum, iste optio eius, minima adipisci reprehenderit rem nesciunt tenetur a commodi vero atque veritatis labore veniam sit?</p>
          <br>
          <h4>¿Puedo comprar boletos en internet?</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente nostrum corrupti nobis earum, iste optio eius, minima adipisci reprehenderit rem nesciunt tenetur a commodi vero atque veritatis labore veniam sit?</p>
          <br>
         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

    <!-- Salida Modal 13 -->


    <div class="modal fade" id="Vendedor" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
  <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Vendedores</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <h3>Te quieres convertir en vendedor de boletos</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente nostrum corrupti nobis earum, iste optio eius, minima adipisci reprehenderit rem nesciunt tenetur a commodi vero atque veritatis labore veniam sit?</p>
          <ul>
            <li><p>Condicion 1</p></li>
            <li><p>Condicion 2</p></li>
            <li><p>Condicion 3</p></li>
            <li><p>Condicion 4</p></li>
            <li><p>Condicion 5</p></li>
          </ul>
          <br>
          <h3>Nuestros vendedores</h3>
          <img class="imagen-vendedor" src="img/job/driver.png" alt="Foto de vendedor">
          <h4>Don Juanito</h4>
          <p class="contenido-vendedor">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente nostrum corrupti nobis earum, iste optio eius, minima adipisci reprehenderit rem nesciunt tenetur a commodi vero atque veritatis labore veniam sit?</p>
          <br>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente nostrum corrupti nobis earum, iste optio eius, minima adipisci reprehenderit rem nesciunt tenetur a commodi vero atque veritatis labore veniam sit?</p>
          <br>

          <img class="imagen-vendedor" src="img/job/driver.png" alt="Foto de vendedor">
          <h4>Don Pancho</h4>
          <p class="contenido-vendedor">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente nostrum corrupti nobis earum, iste optio eius, minima adipisci reprehenderit rem nesciunt tenetur a commodi vero atque veritatis labore veniam sit?</p>
          <br>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente nostrum corrupti nobis earum, iste optio eius, minima adipisci reprehenderit rem nesciunt tenetur a commodi vero atque veritatis labore veniam sit?</p>
          <br>

          <img class="imagen-vendedor" src="img/job/driver.png" alt="Foto de vendedor">
          <h4>Señora Patricia</h4>
          <p class="contenido-vendedor">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente nostrum corrupti nobis earum, iste optio eius, minima adipisci reprehenderit rem nesciunt tenetur a commodi vero atque veritatis labore veniam sit?</p>
          <br>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente nostrum corrupti nobis earum, iste optio eius, minima adipisci reprehenderit rem nesciunt tenetur a commodi vero atque veritatis labore veniam sit?</p>
          <br>
        
          <img class="imagen-vendedor" src="img/job/driver.png" alt="Foto de vendedor">
          <h4>Don Juanito</h4>
          <p class="contenido-vendedor">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente nostrum corrupti nobis earum, iste optio eius, minima adipisci reprehenderit rem nesciunt tenetur a commodi vero atque veritatis labore veniam sit?</p>
          <br>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente nostrum corrupti nobis earum, iste optio eius, minima adipisci reprehenderit rem nesciunt tenetur a commodi vero atque veritatis labore veniam sit?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

    <!-- Salida Modal 13 -->
    <div class="modal fade" id="Paqueteria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Paqueteria</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <h3>Terminos y Condiciones</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente nostrum corrupti nobis earum, iste optio eius, minima adipisci reprehenderit rem nesciunt tenetur a commodi vero atque veritatis labore veniam sit?</p>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Producto</th>
                <th scope="col">Peso</th>
                <th scope="col">Dimensiones</th>
                <th scope="col">Precio</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Caja</td>
                <td>0 - 5 kg</td>
                <td>30 + 30 +30 cm</td>
                <td>$100</td>
              </tr>
              <tr>
                <td>Caja</td>
                <td>5 - 10 kg</td>
                <td>30 + 30 +30 cm</td>
                <td>$200</td>
              </tr>
              <tr>
                <td>Caja</td>
                <td>15 - 20 kg</td>
                <td>30 + 30 +30 cm</td>
                <td>$300</td>
              </tr>
              <tr>
                <td>Caja</td>
                <td>25 - 30 kg</td>
                <td>30 + 30 +30 cm</td>
                <td>$400</td>
              </tr>
              <tr>
                <td>Caja</td>
                <td>35 - 40 kg</td>
                <td>30 + 30 +30 cm</td>
                <td>$500</td>
              </tr>
              <tr>
                <td>Caja</td>
                <td>0 - 5 kg</td>
                <td>30 + 30 +30 cm</td>
                <td>$100</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

    <!-- Salida Modal 14 -->
    <div class="modal fade" id="Facturacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Facturacion</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <h3>Facturacion</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente nostrum corrupti nobis earum, iste optio eius, minima adipisci reprehenderit rem nesciunt tenetur a commodi vero atque veritatis labore veniam sit?</p>
          <p>correo@correo.com</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


  <style>
    #overbox3 {
      position: fixed;
      bottom: 0px;
      left: 0px;
      width: 100%;
      z-index: 999999;
      display: block;
    }

    #infobox3 {
      margin: auto;
      position: relative;
      top: 0px;
      height: 50px;
      width: 100%;
      text-align: center;
      background-color: #ffffff;
    }

    #infobox3 p a {
      margin-right: 5px;
      text-decoration: underline;
      color: #ce9c02;
    }

    * {
      box-sizing: border-box;
    }
  </style>

  <div class="container">
    <div id="overbox3">
      <div id="infobox3">
        <p>Utilizamos cookies para ofrecerte la mejor experiencia.
          <a onclick="aceptar_cookies();" style="cursor:pointer;"> Aceptar</a></p>
      </div>
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
  <script src="js/carrusel.js"></script>

</body>

</html>