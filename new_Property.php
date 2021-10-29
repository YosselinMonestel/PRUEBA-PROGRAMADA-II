<?php
	// call the database connection
  include 'segmentos/conexion.inc';
?>
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
	<div class="todo">
		<div id="cabecera">
			<img src="img/logo.png" width="auto" id="img1">
		</div>
		<?php
			include_once("segmentos/menu.inc");
		?>
		<!-- creation of a form to insert information to the new_Property table-->
		<div id="contenido">
			<div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
				<center><span> <h1>New Property</h1> </span></center><hr>
				<br>
				<form action="" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
					<label>Property Type Id: </label><br>
					<input type="text" id="PropertyTypeId" name="PropertyTypeId" size="60" required><br><br>
					<label>Owner Id: </label><br>
					<input type="text" id="OwnerId" name="OwnerId" size="60" required><br><br>
					<label>Number: </label><br>
					<input type="text" id="Number" name="Number" size="60"><br><br>
					<label>Address:</label><br>
					<input type="text" id="Address" name="Address" size="60" required><br><br>
					<label>Area: </label><br>
					<input type="text" id="Area" name="Area" size="60"><br><br>
					<label>Construction Area: </label><br>
					<input type="text" id="ConstructionArea" name="ConstructionArea" size="60"><br><br>
					<br>
					<button type="submit" class="btn btn-success">Guardar</button>
					<a type="primary" href="property.php" class="btn btn-primary">Volver</a>
					<?php 
					// query the database to the new_Property table and insert query
						include "conexion.php";
						if($_POST){   
							$PropTypeID=$_POST['PropertyTypeId'];
							$OwnerId=$_POST['OwnerId'];
							$Number=$_POST['Number'];  
							$Address=$_POST['Address']; 
							$Area=$_POST['Area'];
							$ConstArea=$_POST['ConstructionArea'];
							if($resultadoP = $conex->query("select * from PropertyType")){
								if($resultadoP->num_rows > 0){
									while ( $filaid = $resultadoP->fetch_assoc() ) {
										$IdP= $filaid["Id"];
									}
								}
							}    
							if($resultadoO = $conex->query("select * from Owner")){
								if($resultadoO->num_rows > 0){
									while ( $filaid = $resultadoO->fetch_assoc() ) {
										$IdO= $filaid["Id"];
									}
								}
							} 
							if($PropTypeID == $IdP && $OwnerId == $IdO) {
								$sql = "Insert Into Property (PropertyTypeId, OwnerId, Number, Address, Area, ConstructionArea) Values ('$PropTypeID','$OwnerId','$Number','$Address','$Area','$ConstArea')";
								mysqli_query($conex,$sql) or die(mysql_error());
								echo "<hr>";
								echo "<center>","<h2>", "Correct Registration.","</h2>","</center>";
								echo "<hr>";
							}
							else{
								echo "<center>","<h2>", "Property Id or Owner Id incorrect.","</h2>","</center>";
							}

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
