<!doctype html>

    <head>
       
    </head>
    <body>
       
        
    <div class="container">
     
    <section>

      
                    <?php 
						//Conecta a la base de datos
                        include 'conexion.php';

                        //Almacena en variables los valores digitados en cada casilla
                        
                        $nombre=$_POST['nombre'];
                        $apellido=$_POST['apellido'];
                        $cc=$_POST['cc']; 
                        $fingreso=$_POST['fingreso'];

                        $nresolucion=$_POST['nresolucion'];
                        $fresolucion=$_POST['fresolucion'];
                        $nacta=$_POST['nacta'];
                        $facta=$_POST['facta'];
                        $vinculacion=$_POST['vinculacion'];
                        $traslado=$_POST['traslado'];
						$dependencia=$_POST['id_Dependencia'];
						$resolucion=$_POST['id_Resolucion'];
						
						$nomcargo=$_POST['Nombre_Cargo'];
						$Codigo=$_POST['Codigo'];
						$Grado=$_POST['Grado'];
						$Sueldo=$_POST['Sueldo'];
                        $idempleado = "";
						$idcargo = "";
                        
                        //Consulta para insertar en la base de datos
                        $query1="INSERT INTO Empleado (
                                Nombre_Empleado, 
                                Apellido_Empleado, 
                                CedulaC, 
                                fecha_ingreso 
                                ) VALUES (
                                '$nombre',
                                '$apellido',
                                '$cc',
                                '$fingreso')";

						
						$query4="INSERT INTO Cargo (
                                Nombre_Cargo, 
                                Codigo, 
                                Grado,
                                Sueldo 
                                ) VALUES (
                                '$nomcargo',
						        '$Codigo',
						        '$Grado',
						        '$Sueldo')";

/* consulta si el empleado ya existe si no lo ingresa */						
						$empleadoexiste = mysqli_query($link,"select * from empleado where cedulac= '$cc'");
						$row_cnt = mysqli_num_rows($empleadoexiste);
						if ($row_cnt == 0) {
                        mysqli_query($link,$query1); 
						$empleadoexiste = mysqli_query($link,"select * from empleado where cedulac= '$cc'");					
						$fila = mysqli_fetch_array($empleadoexiste);
						$idempleado = $fila['0'];
						echo $idempleado;
 						}else{
						$fila = mysqli_fetch_array($empleadoexiste);
						$idempleado = $fila['0'];
						echo $idempleado;
						}
/* consulta si el Cargo ya existe si no lo ingresa */
											
						$cargoexiste = mysqli_query($link,"select * from cargo where Nombre_Cargo='$nomcargo' and 
                                                         codigo= '$Codigo' and grado = '$Grado' and Sueldo='$Sueldo'");
						$row_cnt = mysqli_num_rows($cargoexiste);	
						if ($row_cnt == 0) {
				        mysqli_query($link,$query4); 
						$cargoexiste = mysqli_query($link,"select * from cargo where Nombre_Cargo='$nomcargo' and 
                                                         codigo= '$Codigo' and grado = '$Grado' and Sueldo='$Sueldo'");						
						$fila=mysqli_fetch_array($cargoexiste);
						$idcargo=$fila['0'];
						} else{
						$fila=mysqli_fetch_array($cargoexiste);
						$idcargo=$fila['0'];
						}

/* ingresa la tabla principal nombramiento */						
                        mysqli_query($link,"INSERT INTO Nombramiento (
                                Num_Resolucion, 
                                Fecha_Resol, 
                                Num_Acta, 
                                Fecha_Acta,
								Fecha_Inicio,
								Translado,
								id_Empleado,
								id_Vinculacion,
								id_Cargo,
								id_dependencia,
								id_Resolucion
                                ) VALUES (
                                $nresolucion,
                                '$fresolucion',
                                $nacta,
                                '$facta',
								'$fresolucion',
								$traslado,
								$idempleado,
								$vinculacion,
								$idcargo,
								$dependencia,
								$resolucion
								)"); 
                      ?>


                    <!-- Devolvemos al inicio -->
                    <p></p> 
                    
                    <a class="btn btn-default btn-large" href="Principal3.php">Regresar</a>                          


    </section>


                    </div>
   
                <?php 
                    include 'includes/ScriptPie.php';
                ?>
    </body>
</html>
