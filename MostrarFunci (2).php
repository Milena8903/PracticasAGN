<!DOCTYPE html>
<html lang="es">

    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
    
  

    </head>

    <body>
            
            <!-- Top content -->
        <div class="top-content">
          
            <div class="inner-bg">
            <div class="container">

                            
                  <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Archivo General de la Nación</strong></h1>
                            <div class="description">
                              <p>
                                Bienvenido
                              </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1 form-box">
                          <div class="form-top">
                            <div class="form-top-left">
                              <h3>Consulta Funcionario</h3>
                                <p></p>
                            </div>

                      <table class="table table-bordered text">
                      <thead>
                        <tr>
                          <th align="center"> NOMBRE </th>
                          <th align="center"> APELLIDO </th>
                          <th align="center"> EMPLEO ACTUAL </th>
                          <th align="center"> CODIGO </th>
                          <th align="center"> GRADO  </th>
                          <th align="center"> SUELDO  </th>
                        </tr>
                      </thead>
                      <tbody>
                       <?php 

                       include 'conexion.php';

                  $sql = "select * from mostrar";

                         $resultado = mysqli_query($link,$sql);
                  while($row = mysqli_fetch_array($resultado)){  ?>
                        


                <!-- $row=mysqli_fetch_array($resultadoparrafo1);-->
                        <tr>
                          <td> <?php echo $row['Nombre_Empleado'];?>  </td>
                          <td> <?php echo $row['apellido_empleado'];?> </td>
                          <td>  <?php echo $row['Nombre_Cargo'];?> </td>
                          <td>  <?php echo $row['Codigo'];?>   </td>
                          <td>  <?php echo $row['Grado'];?>   </td>
                          <td>  <?php echo $row['Sueldo'];?>   </td>
                        </tr>
                          <?php 
                          // Fin del while
                          }
                           ?>
                        
                      </tbody>
                    </table>      


                            </div>
            
            </div>
              </div>
            </div>
             </div>
            </div>
           


         <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>