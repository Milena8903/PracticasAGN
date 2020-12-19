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
  
      <script type="text/javascript">
      function showselect(str){
        var xmlhttp; 
        if (str=="")
          {
          document.getElementById("txtHint").innerHTML="";
          return;
          }
        if (window.XMLHttpRequest)
          {// code for IE7+, Firefox, Chrome, Opera, Safari
          xmlhttp=new XMLHttpRequest();
          }
        else
          {// code for IE6, IE5
          xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
          }
        xmlhttp.onreadystatechange=function()
          {
          if (xmlhttp.readyState==4 && xmlhttp.status==200)
           {
           document.getElementById("cliente").innerHTML=xmlhttp.responseText;
           }
          }
          xmlhttp.open("GET","db.php?c="+str,true);
        xmlhttp.send();
      }
    </script>
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
                              <h3>Ingreso Datos de la Resolución</h3>
                                <p></p>
                            </div>
                            
                            </div>
                
                <div class="form-bottom">

              <form name="nuevo_funcionario" class="form-horizontal"  method="POST" action="Guarda_Resolucion.php">
                <fieldset>
                  
                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-5 control-label" for="nr">Número Resolución</label>  
                    <div class="col-md-7">
                      <input autofocus id="nr" name="nr" type="text" class="form-control input-md" pattern="[0-9 ]{1,7}" required="">
                      
                    </div>
                  </div>
<br>                  
                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-5 control-label" for="fresolucion">Fecha de la Resolución</label>  
                    <div class="col-md-7">
                      <input id="fingreso" name="fresolucion" type="date" placeholder="" class="form-control input-md" required="">
                      
                    </div>
                  </div>
<br>
                  
                  <!-- Multiple Radios -->
                  <div class="form-group">
                    <label class="col-md-5 control-label" for="vinculacion">Tipo de Resolución</label>
                    <div class="col-md-7">
                      <div class="radio">
                        <label for="vinculacion-0">
                          <input type="radio" name="vinculacion" id="vinculacion-0" value="1" checked="checked">
                          Manual de Funciones de los Empleos
                        </label>
                      </div>
                      <div class="radio">
                        <label for="vinculacion-1">
                          <input type="radio" name="vinculacion" id="vinculacion-1" value="2">
                          Manual de Funciones de los Grupos
                        </label>
                      </div>
                    </div>
                  </div>

<br>
                  <!-- Textarea -->
                  <div class="form-group">
                    <label class="col-md-5 control-label" for="textarea">Descripcion del empleo</label>
                    <div class="col-md-7">                     
                      <textarea class="form-control" id="textarea" name="desemp"></textarea>
                    </div>
                  </div>


                        <br>
                     <!-- Button -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="enviar"></label>
                  <div class="col-md-4">
                    <button id="enviar" name="enviar" class="btn btn-primary">Enviar</button>
                  </div>
                </div>
                </fieldset>
              </form>

              </div> 

              <br>
              <input type="button" value="Volver" onclick="history.back()"><br/>
              
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