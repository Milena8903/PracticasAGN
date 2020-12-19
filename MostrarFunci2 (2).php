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
    
  <style>
  .contenedor{margin:60px auto;
          width:960px;
          font-family:sans-serif;
          font-size:15px}
  table {width:100%;
       box-shadow:0 0 10px #ddd;
       text-align:left}
  th {padding:5px;
    background:#555;
    color:#fff}
  td {padding:5px;
    border:solid #ddd;
    border-width:0 0 1px;}
    .editable span{display:block;}
    .editable span:hover {background:url("./img/edit.png") 90% 50% no-repeat;
                cursor:pointer}
    
    td input{height:24px;
           width:200px;
           border:1px solid #ddd;
           padding:0 5px;
           margin:0;
           border-radius:6px;
           vertical-align:middle}
    a.enlace{display:inline-block;
           width:24px;
           height:24px;
           margin:0 0 0 5px;
           overflow:hidden;
           text-indent:-999em;
           vertical-align:middle}
      .guardar{ background: url("./img/save.png") 0 0 no-repeat}
      .cancelar{background:url("./img/cancel.png") 0 0 no-repeat}
  
  .mensaje{display:block;
         text-align:center;
         margin:0 0 20px 0}
    .ok{display:block;
      padding:10px;
      text-align:center;
      background:green;
      color:#fff}
    .ko{display:block;
      padding:10px;
      text-align:center;
      background:red;
      color:#fff}
  </style>

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
                      <br>
                    </div>

                    <?php 

                    include 'conexion.php';
                    ?>

                    <table class="table table-bordered text" >
                      <thead>
                        <tr>
                          <th> Nombre </th>
                          <th> Apellido </th>
                          <th> Empleo  </th>
                          <th> Codigo </th>
                          <th> Grado  </th>
                          <th> Sueldo  </th>
                        </tr>
                      </thead>
                      <tbody>
                       <?php  
                       $sql = "SELECT Nombre_Empleado, 
                       apellido_empleado,  
                       Nombre_Cargo, 
                       Codigo, 
                       Grado,
                       Fecha_Fin,
                       Sueldo 
                       from empleado inner join nombramiento on empleado.id_Empleado=nombramiento.id_Empleado 
                       inner join vinculacion on nombramiento.id_Vinculacion=vinculacion.id_Vinculacion 
                       inner join cargo on nombramiento.id_Cargo=cargo.id_Cargo 
                       inner join dependenciagrupo on nombramiento.id_Dependencia=dependenciagrupo.id_Dependencia
                       where  (Fecha_Fin = '0000-00-00') or Fecha_Fin is null";

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

          <br>


        </div>
        <br>
        <input type="button" value="Volver" onclick="history.back()"><br/>
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