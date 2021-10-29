<?php
	// call the database connection and field validation query
	include 'segmentos/conexion.inc';
	isset($_GET["Id"]);
	$id = $_GET["Id"];
  if($resultadoCed = $conex->query("select * from Owner where Id = '$id'")){
		if($resultadoCed->num_rows > 0){
			while ( $filas = $resultadoCed->fetch_assoc() ) {
			$ID = $filas["Id"];
			$name = $filas["Name"];
			$telephone = $filas["Telephone"];
			$email = $filas["Email"];
			$idNumber = $filas["IdentificationNumber"];
			$address = $filas["Address"];
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
				<center><span> <h1>Update Owner</h1> </span></center><hr>
				<br>
				<form action="" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
					<input type="hidden" name="Id" value="<?php echo $ID?> ">
					<label>Name: </label><br>
					<input type="text" size="60" id="name" name="name"; value="<?php echo $name ?>" ><br><br>
					<label>Telephone: </label><br>
					<input type="text" size="60" id="telephone" name="telephone" value="<?php echo $telephone ?>"><br><br>
					<label>Email: </label><br>
					<input type="text" size="60" id="email" name="email" value="<?php echo $email ?>"><br><br>
					<label>Address: </label><br>
					<input type="text" size="60" id="address" name="address" value="<?php echo $address ?>"><br><br>
					<br>
					<button type="submit" class="btn btn-success">Guardar</button>
					<?php
						include 'conexion.php';
						if($_POST){ 
							$ID=$_POST['Id'];
							$Nombre=$_POST['name'];
							$Telephone=$_POST['telephone'];
							$Email=$_POST['email'];  
							$IdNumber=$_POST['idNumber']; 
							$Address=$_POST['address'];                       	
							$sql = "update Owner set Name = '$Nombre', Telephone = '$Telephone', Email = '$Email', Address = '$Address' where Id = '$ID'";
							mysqli_query($conex,$sql) or die(mysql_error());
							echo "<hr>";
							echo "<center>","<h2>", "Registro de estudiante correcto.","</h2>","</center>";
							echo "<hr>";
							header("Location:owner.php");
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
