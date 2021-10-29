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
		<!-- creation of a form to insert information to the Owner table-->
			<div id="contenido">
				<div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
					<center><span> <h1>New Owner</h1> </span></center><hr>
					<br>
					<form action="" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
						<label>Name: </label><br>
						<input type="text" id="name" name="name" size="60" required><br><br>
						<label>Telephone: </label><br>
						<input type="text" id="telephone" name="telephone" size="60" required><br><br>
						<label>Email: </label><br>
						<input type="text" id="email" name="email" size="60"><br><br>
						<label>Identification Number:</label><br>
						<input type="text" id="idNumber" name="idNumber" size="60" required><br><br>
						<label>Address: </label><br>
						<input type="text" id="address" name="address" size="60"><br><br>
						<br>
						<button type="submit" class="btn btn-success">Guardar</button>
						<a type="primary" href="owner.php" class="btn btn-primary">Volver</a>
						<?php 
						// query the database to the Owner table and insert query
							include "conexion.php";
							if($_POST){   
								$Nombre=$_POST['name'];
								$Telephone=$_POST['telephone'];
								$Email=$_POST['email'];  
								$IdNumber=$_POST['idNumber']; 
								$Address=$_POST['address'];   
								if($resultadoID = $conex->query("select * from Owner")){
									if($resultadoID->num_rows > 0){
										while ( $fila = $resultadoID->fetch_assoc() ) {
											$IdentidicNumber= $fila["IdentificationNumber"];
										}
									}
								}
								if($IdNumber==$IdentidicNumber){
									echo "<center>","<h2>", "Identification Number '$IdNumber' ya existe.","</h2>","</center>";
								}
								else{
									$sql = "Insert Into Owner (Name, Telephone, Email, IdentificationNumber, Address) Values ('$Nombre','$Telephone','$Email','$IdNumber','$Address')";
									mysqli_query($conex,$sql) or die(mysql_error());
									echo "<hr>";
									echo "<center>","<h2>", "Correct Registration.","</h2>","</center>";
									echo "<hr>";
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
