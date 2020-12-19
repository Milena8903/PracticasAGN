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
                                Bienvenido Funcionario
                              </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                          <div class="form-top">
                            <div class="form-top-left">
                              <h3>Certificación de Funciones </h3>
                                <p>Ingrese su número de cédula</p>
                            </div>
                            <div class="form-top-right">
                              <i class="fa fa-lock"></i>
                            </div>
                            </div>
                            <div class="form-bottom">


                       <form role="form" method="post" class="login-form" action="CerFuncion2.php">
                            <div class="form-group">
                              <label class="sr-only" for="Identificacion">Username</label>
                                <input type="text" name="cedula" 
                                        placeholder="Cédula de Ciudadania" 
                                        class="form-username form-control" 
                                        id="Identificacion"
                                        pattern="[0-9]{1,15}" autofocus  required>
                              </div>
                                   
                              <button type="submit" class="btn">Entrar!</button>
                              </br>
                           </br>
                           <button type="button" class="btn btn-info btn-lg" data-toggle="modal" 
                                    data-target="#myModal">Recomendación</button>

                           <!-- Modal -->
                           <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">

                              <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title">Recomendación</h4>
                              </div>
                              <div class="modal-body">
                                  <p>Coloca el número de la cédula sin puntos, y ya puede imprimir su certificación</p>
                              </div>
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                              </div>
                          </div>
                      </div>
                  </div>

                          </form>

                        </div>

                        <br>
                       <input type="button" value="Volver" onclick="history.back()"><br/>
                        
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