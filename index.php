<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    // call of the header segment
		include_once("segmentos/encabe.inc");
	?>
</head>
<body>
  <!-- call of the body segment and logo-->
  <div id="cabecera">
        <img src="img/logo.png" width="auto" id="img1">
      </div>
    <?php
      include_once("segmentos/menu.inc");
    ?>
    <center><h1>QUERCU</h1></center>  
    <main id="main"></main>
  <?php
  // call of the footer segment
  include_once("segmentos/pie.inc")
  ?>
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>
  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
</body>
</html>
