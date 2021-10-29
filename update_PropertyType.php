<?php
  // call the database connection and field validation query
  include 'segmentos/conexion.inc';
  isset($_GET["Id"]);
  $id = $_GET["Id"];
  if($resultadoCed = $conex->query("select * from PropertyType where Id = '$id'")){
    if($resultadoCed->num_rows > 0){
      while ( $filas = $resultadoCed->fetch_assoc() ) {
      $ID = $filas["Id"];
      $Description = $filas["Description"];
      }  
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    // call of header segmentation
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
  <!-- creation of the form for the query to modify the respective table and also the query to the corresponding table and sending the data-->
  <div id="contenido">
  	<div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  		<center><span> <h1>Update Owner</h1> </span><hr></center>
  		<br>
	    <form action="" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
        <input type="hidden" name="Id" value="<?php echo $ID?> ">
        <label>Description: </label><br>
        <input type="text" size="60" id="name" name="description"; value="<?php echo $Description ?>" ><br><br>
        <br>
        <button type="submit" class="btn btn-success">Guardar</button>
        <?php
          if($_POST){ 
            $ID=$_POST['Id'];
            $Descrip=$_POST['description'];
            $sql = "update PropertyType set Description = '$Descrip' where Id = '$ID'";
            mysqli_query($conex,$sql) or die(mysql_error());
            echo "<hr>";
            echo "<center>","<h2>", "Registro de estudiante correcto.","</h2>","</center>";
            echo "<hr>";
            header("Location:propertyType.php");
	        }
        ?>
      </form>
  	</div>
  </div> 
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
