﻿ <head>
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
          

			<?php
                    $cedula = $_POST['cedula'];
					include "conexion.php";

				$consultaparrafo1="SELECT Nombre_Empleado,
										  apellido_empleado, 
										  CedulaC, 
										  Fecha_ingreso, 
										  Nombre_Vinculacion, 
										  Nombre_Cargo, 
										  Codigo,
										  Grado, 
										  Nombre_Grupo, 
										  Nombre_Dep, 
										  fecha_inicio 
				from empleado inner join nombramiento on empleado.id_Empleado=nombramiento.id_Empleado 
							  inner join vinculacion on nombramiento.id_Vinculacion=vinculacion.id_Vinculacion 
							  inner join cargo on nombramiento.id_Cargo=cargo.id_Cargo 
							  inner join dependenciagrupo on nombramiento.id_Dependencia=dependenciagrupo.id_Dependencia 
				where CedulaC='$cedula' order by Fecha_Inicio desc";

				$resultadoparrafo1=mysqli_query($link,$consultaparrafo1);
				$row=mysqli_fetch_array($resultadoparrafo1);

				// Verificacion de si esta la cedula
				//$row=$resultado->fetch_assoc();	
					if ($cedula==$row['CedulaC']) {
							include "intento.php";
						} else {
							echo "<script>alert('Funcionario no existe. Intente nuevamente');window.location='consultaCedula1.php';</script>";
						}

						?>
          
   </div>