<?php
  // call the database connection and field validation query
  include 'segmentos/conexion.inc';
  isset($_GET["Id"]);
  $id = $_GET["Id"];
  if($resultadoCed = $conex->query("select * from Property where Id = '$id'")){
    if($resultadoCed->num_rows > 0){
      while ( $filas = $resultadoCed->fetch_assoc() ) {
      $ID = $filas["Id"];
      $ProperTypeId = $filas["PropertyTypeId"];
      $OwnerId = $filas["OwnerId"];
      $Number = $filas["Number"];
      $Address = $filas["Address"];
      $Area = $filas["Area"];
      $ConstrucArea = $filas["ConstructionArea"];   
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
  <div class="todo">
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
        <center><span> <h1>Update Property</h1> </span></center><hr>
        <br>
        <form action="" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
          <input type="hidden" name="Id" value="<?php echo $ID?> ">
          <input type="hidden" name="PropertyTypeId" value="<?php echo $ProperTypeId?> ">
          <input type="hidden" name="OwnerId" value="<?php echo $OwnerId?> ">
          <label>Number: </label><br>
          <input type="text" size="60" id="Number" name="Number"; value="<?php echo $Number ?>" ><br><br>
          <label>Address: </label><br>
          <input type="text" size="60" id="Address" name="Address" value="<?php echo $Address ?>"><br><br>
          <label>Area: </label><br>
          <input type="text" size="60" id="Area" name="Area" value="<?php echo $Area ?>"><br><br>
          <label>ConstructionArea: </label><br>
          <input type="text" size="60" id="ConstructionArea" name="ConstructionArea" value="<?php echo $ConstrucArea ?>"><br><br>
          <br>
          <button type="submit" class="btn btn-success">Guardar</button>
          <?php
            include 'conexion.php';
            if($_POST){
              $id=$_POST['Id']; 
              $propTypeId=$_POST['PropertyTypeId'];
              $ownerId=$_POST['OwnerId'];
              $num=$_POST['Number'];
              $address=$_POST['Address'];  
              $area=$_POST['Area']; 
              $constArea=$_POST['ConstructionArea'];                       	
              $sql = "update Property set Number='$num',Address='$address',Area='$area',ConstructionArea='$constArea' where Id='$id'";
              mysqli_query($conex,$sql) or die(mysql_error());
              echo "<hr>";
              echo "<center>","<h2>", "Registro de estudiante correcto.","</h2>","</center>";
              echo "<hr>";
              header("Location:property.php");	
            }
          ?>
        </form>
      </div>
    </div>
    <?php
      // call of the footer segment
      include_once("segmentos/pie.inc")
    ?>
  </div>
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
