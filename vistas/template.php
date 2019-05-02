<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>grupoivinet.com</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href=" vistas/img/plantilla/icono-negro.png" rel="icon">
  <link href=" vistas/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->

  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href=" vistas/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href=" vistas/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href=" vistas/lib/animate/animate.min.css" rel="stylesheet">
  <link href=" vistas/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href=" vistas/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href=" vistas/lib/lightbox/css/lightbox.min.css" rel="stylesheet">


  <!-- Main Stylesheet File -->
  <link href=" vistas/css/style.css" rel="stylesheet">




  <!--style>
   .mian-content-wthree.inner {
      background: url(vistas/img/intro-bg.png) no-repeat center;
      background-size: cover;
      -o-background-size: cover;
      -moz-background-size: cover;
      -ms-background-size: cover;
      -webkit-background-size: cover;
      height: 18vw;
    }

     @media(min-width: 480px){

      .mian-content-wthree{

      height: 18vw;



      }




    }


   


</style-->
<style>
  .hero-image {
    margin:0;
    padding: 0;
  background: url(vistas/img/intro-bg.png) no-repeat center;
  height:18vw;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
.hero-text button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 10px 25px;
  color: black;
  background-color: #ddd;
  text-align: center;
  cursor: pointer;
}

.hero-text button:hover {
  background-color: #555;
  color: white;
}

</style>


</head>

<body>
  <!--==========================
  Header
  ============================-->

  <?php require_once "modulos/header.php"; ?>

  
  <!--==========================
    Intro Section
  ============================-->


  

  <!-- #intro 

 <div class="mian-content-wthree inner">
   

</div-->

  <main id="main" class="">
    

<!--div class="hero-image">
  <div class="hero-text">
   
    
  </div>
</div-->




  <!--==========================
    Services Section
  ============================-->

<?php 
           if (isset($_GET["ruta"])) {
            if($_GET["ruta"] =="inicio" ||
             $_GET["ruta"] == "hogar" ||
             $_GET["ruta"] == "telefonia" ||
             $_GET["ruta"] == "negocio" ||
             $_GET["ruta"] == "dedicado" ||
             $_GET["ruta"] == "hosting" ||
             $_GET["ruta"] == "drive" ||
             $_GET["ruta"] == "email")


            {

              include "modulos/".$_GET["ruta"].".php";

            }else{

              include "modulos/404.php"; 
            }

          } else{

            include "modulos/inicio.php"; 
          }


          ?>







  </main>

  <!--==========================
    Footer
  ============================-->

  <?php require_once "modulos/footer.php";  ?>
 <!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src=" vistas/lib/jquery/jquery.min.js"></script>
  <script src=" vistas/lib/jquery/jquery-migrate.min.js"></script>
  <script src=" vistas/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src=" vistas/lib/easing/easing.min.js"></script>
  <script src=" vistas/lib/mobile-nav/mobile-nav.js"></script>
  <script src=" vistas/lib/wow/wow.min.js"></script>
  <script src=" vistas/lib/waypoints/waypoints.min.js"></script>
  <script src=" vistas/lib/counterup/counterup.min.js"></script>
  <script src=" vistas/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src=" vistas/lib/isotope/isotope.pkgd.min.js"></script>
  <script src=" vistas/lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src=" vistas/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src=" vistas/js/main.js"></script>

   <script src=" vistas/vendor/jquery/jquery.min.js"></script>

            <script src=" vistas/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Plugin JavaScript -->
            <script src="vistas/vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for this template -->
            <script src="vistas/js/stylish-portfolio.js"></script>


</body>
</html>
