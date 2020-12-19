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
                        
                        $nr=$_POST['nr'];
                        $fresolucion=$_POST['fresolucion'];
                        $vinculacion=$_POST['vinculacion'];
                        $desemp=$_POST['desemp'];
						
                        
                        //Consulta para insertar en la base de datos
                        $query="INSERT INTO Resolucion (
                                Numero, 
                                Fecha_Res, 
                                Tipo, 
                                DesEmpleo 
                                ) VALUES (
                                '$nr',
                                '$fresolucion',
                                '$vinculacion',
                                '$desemp')";

                            if ($query>0) {
                                echo '<h2> Resolución Creada con éxito </h2>';
                            } else {
                                echo '<h2> Ha ocurrido un error, revise los datos </h2>';
                                echo mysqli_error();
                            }

                            ?>

                    <!-- Devolvemos al inicio -->
                    <p></p> 
                                                             


    </section>


                    </div>
   
    </body>
</html>