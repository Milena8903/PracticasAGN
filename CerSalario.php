<?php

require('fpdf/fpdf.php');

//$conexion = conectar();
require('FuncFPDF.php');

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
							  fecha_inicio,
							  Sueldo,
							  Num_Resolucion,
							  Fecha_Resol,
							  Num_Acta,
							  Fecha_Acta 
from empleado inner join nombramiento on empleado.id_Empleado=nombramiento.id_Empleado 
			  inner join vinculacion on nombramiento.id_Vinculacion=vinculacion.id_Vinculacion 
			  inner join cargo on nombramiento.id_Cargo=cargo.id_Cargo 
			  inner join dependenciagrupo on nombramiento.id_Dependencia=dependenciagrupo.id_Dependencia 
where CedulaC='$cedula' order by fecha_inicio desc";

	//echo $sql;die();

	$resultadoparrafo1=mysqli_query($link,$consultaparrafo1);
	$row=mysqli_fetch_array($resultadoparrafo1);
	setlocale(LC_ALL,"es_ES@euro","es_ES","esp");


	if ($cedula==$row['CedulaC']) {
		include "intento2.php";
	} else {
		echo "<script>alert('Funcionario no existe. Intente nuevamente');window.location='consultaCedula.php';</script>";
	}

						?>

		