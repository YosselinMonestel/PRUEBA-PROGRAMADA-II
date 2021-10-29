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
		<!-- creation of a form to insert information to the new_PropertyType table-->
		<div id="contenido">
			<div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
				<center><span> <h1>New Property Type</h1> </span></center><hr>
				<br>
				<form action="" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
					<label>Description: </label><br>
					<input type="text" id="description" name="description" size="60" required><br><br>
					<br>
					<button type="submit" class="btn btn-success">Guardar</button>
					<a type="primary" href="propertyType.php" class="btn btn-primary">Volver</a>
					<?php 
						// query the database to the new_Property table and insert query
						include "conexion.php";
						if($_POST){   
							$Description=$_POST['description'];
							$sql = "Insert Into PropertyType (Description) Values ('$Description')";
							mysqli_query($conex,$sql) or die(mysql_error());
							echo "<hr>";
							echo "<center>","<h2>", "Correct Registration.","</h2>","</center>";
							echo "<hr>";	
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
