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
      <center><span> <h1>Properties</h1> </span></center>
      <hr>
  </div>
  <?php
		include_once("segmentos/menu.inc");
	?>
  <section>
    <!-- main menu of the Property table, its selection to the corresponding table and data capture to send it to the database-->
    <div id="contenido">
      <table style="margin: auto; width: 1300px; border-collapse: separate; border-spacing: 10px 5px;">
        <thead>
          <th>Id</th>
          <th>Property Type Id</th>
          <th>Owner Id</th>
          <th>Number</th>
          <th>Address</th>
          <th>Area</th>
          <th>Construction Area</th>
          <th> <a href="new_Property.php"> <button type="button" class="btn btn-info">Nuevo</button> </a> </th>
        </thead>
        <?php
          include_once "segmentos/conexion.inc";
          if($resultado = $conex->query("select * from Property")){
            if($resultado->num_rows > 0){
              while ( $filas = $resultado->fetch_assoc() )       
              {
                echo "<tr>";
                echo "<td align='center'>"; echo $filas['Id']; echo "</td>";
                echo "<td align='center'>"; echo $filas['PropertyTypeId']; echo "</td>";
                echo "<td align='center'>"; echo $filas['OwnerId']; echo "</td>";
                echo "<td align='center'>"; echo $filas['Number']; echo "</td>";
                echo "<td align='center'>"; echo $filas['Address']; echo "</td>";
                echo "<td align='center'>"; echo $filas['Area']; echo "</td>";
                echo "<td align='center'>"; echo $filas['ConstructionArea']; echo "</td>";
                echo "<td>  <a href='update_Property.php?Id=".$filas['Id']."'> <button type='button' class='btn btn-success'>Modificar</button> </a> </td>";
                echo "<td> <a href='delete_Property.php?Id=".$filas['Id']."''><button type='button' class='btn btn-danger'>Eliminar</button></a> </td>";
                echo "</tr>";
                echo "</center>";
              }
            }
          }
        ?>
  	  </table>
    </div>
  </section>
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
