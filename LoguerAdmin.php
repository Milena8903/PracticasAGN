<!DOCTYPE html>
	<html lang="es">
	<head>
		<!-- Se llama las metas  -->
		<?php 
		include 'Includes/Meta.php';
		?>
	</head>
	<body>
		<div class="container">
			
			<div class="row clearfix">
				
					<div class="col-md-6 column">
						<?php 
						include 'conexion.php';

							// Recibo los datos introducidos 
						$usuario=$_POST['usuario'];
						$contrasenia=$_POST['contrasenia'];
						
					
						//consultas para validar guardar variables
					

						$query="SELECT usuario, contrasenia FROM Administrador
						WHERE usuario ='$usuario' and contrasenia = '$contrasenia' ";

					// realizo el query y lo almaceno en resultado
					
						$resultado=$mysqli->query($query);
						$row=$resultado->fetch_assoc();
						
				if ($contrasenia==$row['contrasenia'] ) {

				include 'Principal2.php';
					
	} else {
	 echo "<script>alert('Funcionario no existe. Intente nuevamente');window.location='LogAdmin.php';</script>"; 
} 
?>
<!-- Devolvemos al inicio -->



</div>
</div>
</div>

<?php
include 'Includes/ScriptPie.php';
?>
</div>
</body>
</html>