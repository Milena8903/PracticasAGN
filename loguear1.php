	<!DOCTYPE html>
	<html lang="es">

	<body>
		<div class="container">
			
			<div class="row clearfix">
				
					<div class="col-md-6 column">
						<?php 
						include 'conexion.php';

							// Recibo los datos introducidos 
						$cedula=$_POST['cedula'];
						
					
						//consultas para validar guardar variables
					

						$query="SELECT CedulaC FROM Empleado
						WHERE CedulaC ='$cedula' ";

					// realizo el query y lo almaceno en resultado
					
						$resultado=$mysqli->query($query);
						$row=$resultado->fetch_assoc();	
						
						

					if ($cedula==$row['CedulaC'] ) {

				include 'index2.php';
					
	} else {
	echo "<script>alert('Funcionario no existe. Intente nuevamente');window.location='index.php';</script>"; 
	
	 
} 
?>
<!-- Devolvemos al inicio -->



</div>
</div>
</div>

</div>
</body>
</html>