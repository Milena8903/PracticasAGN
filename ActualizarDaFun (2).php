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
                          </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1 form-box">
                          <div class="form-top">
                            <div class="form-top-left">
                              <h3>Modifique Datos Personales Funcionario</h3>
                                <p></p>
                            </div>
                            
                            </div>
                
                <div class="form-bottom">
		<form class="form-horizontal" action="ModificaDaFun.php" method="post">
		<fieldset >
		
		<div class="form-group">
			<label class="col-md-4 control-label" for="Nombre">Nombre
			</label>  
			<div class="col-md-6">
				<input id="Nombre" type="text" name="Fnombres" size="40" 
				class="form-control input-md" required=""
				value="<?php echo $row['Nombre_Empleado']; ?>" />
			</div> 
		</div>

		<div class="form-group">
			<label class="col-md-4 control-label" for="Apellidos">Apellido
			</label>  
			<div class="col-md-6">
				<input id="Apellidos" type="text" name="Fapellidos" size="40"
				class="form-control input-md" required =""
				value="<?php echo $row['Apellido_Empleado']; ?>"/>
			</div> 
		</div>

		<div class="form-group">
			<label class="col-md-4 control-label" for="Fcedula">Identificacion
			</label>  
			<div class="col-md-6">
				<input id="Identificacion" type="number" name="Fcedula" size="40" 
				class="form-control input-md" required =""
				value="<?php echo $row['CedulaC']; ?>"/>
			</div> 
		</div>

		<div class="form-group">
			<label class="col-md-4 control-label" for="Festado">Estado
			</label>  
			<div class="col-md-6">
				<input id="Estado"  type="estado" name="Festado" size="40" 
				class="form-control input-md" required=""
				value="<?php echo $row['Estado']; ?>"/>
			</div>
		</div>	

		
		<div class="form-group">
			<label class="col-md-4 control-label" for="Fingreso">Fecha de Ingreso
			</label>  
			<div class="col-md-6">
				<input id="Fingreso" type="date" name="Fingreso" 
				class="form-control input-md" required=""
				value="<?php echo $row['fecha_ingreso']; ?>"/>				
			</div> 
		</div>
			<input type="hidden" name="id_emp" value="<?php echo $row['id_empleado']; ?>">
		  <div class="form-group">
				<label class="col-md-4 control-label" for="enviar">
				</label>
				<div class="col-md-4">
				<button id="enviar" name="enviar" class="btn btn-primary">Guardar
				</button>
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