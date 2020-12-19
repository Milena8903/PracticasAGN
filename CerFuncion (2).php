<?php

require('fpdf/fpdf.php');

//$conexion = conectar();
require('FuncFPDF.php');

				$cedula = $_POST['cedula'];
				include "conexion.php";

	//Consulta para seleccionar el funcionario
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
where CedulaC='$cedula' order by fecha_inicio desc";

	//echo $consultaparrafo1;die();

	$resultadoparrafo1=mysqli_query($link,$consultaparrafo1);
	$row=mysqli_fetch_array($resultadoparrafo1);
	setlocale(LC_ALL,"es_ES@euro","es_ES","esp");
		//$row = $qry->fetch_array(MYSQLI_ASSOC);
		

		$pdf=new PDF('P','mm','Letter');
		
		$pdf->Open();
		$pdf->AddPage();
		$pdf->SetFont('Arial','', 12);
		$pdf->Ln(20);

		$pdf->MultiCell(177, 6,utf8_decode('LA  COORDINADORA DEL GRUPO DE  GESTIÓN HUMANA DEL ARCHIVO GENERAL DE LA NACIÓN JORGE PALACIOS PRECIADO'), 0, "C",FALSE);

		$pdf->Ln(10);
		$pdf->cell(170,10,'CERTIFICA QUE',0, 1, 'C');	
		$pdf->Ln(8);

		

		$pdf-> MultiCell(177,6, 
			utf8_decode($row[0]." ".$row[1]).
			utf8_decode(', identificado con cedula de ciudadania N. ').
			utf8_decode(number_format($row[2],0,'.','.')). 
			utf8_decode(', es funcionario del Archivo General de la Nación Jorge Palacios Preciado desde el ').
			utf8_decode(strftime("%d de %B de %Y", strtotime($row[3]))).
			utf8_decode(' se encuentra vinculado/a a esta entidad con derechos de ').
			utf8_decode($row[4]).
			utf8_decode('. Actualmente se desempeña como ').
			utf8_decode($row[5]." Código ".$row[6]." Grado ".$row[7]).
			utf8_decode(' bajo la figura de encargo, en la ').
			utf8_decode($row[9]." ".$row[8]).
			utf8_decode(' a partir del ').
			utf8_decode(strftime("%d de %B de %Y", strtotime($row['fecha_inicio'])))
			, 0,'J'); 

		$pdf->Ln(10);
		$pdf-> MultiCell(177,6, 
			utf8_decode('A continuación se detallan los cargos ejercidos durante su permanencia en la Entidad en los diferentes periodos: ')
			, 0,'J'); 

		$pdf->Ln(10);

		//Títulos que llevará la cabecera
		//$miCabecera = array('DEPENDENCIA','DENOMINACIÓN DEL EMPLEO',	'CODIGO', 'GRADO',	'DESDE','HASTA');
		//$misDatos = array('Hugo', 'Martínez', '20420423', '11', 'Soltero', '98');
 		//$pdf->tablaHorizontal($miCabecera, $misDatos);


$pdf-> MultiCell(177,6, 
			utf8_decode('Actualmente se desempeña como ').
			utf8_decode($row['nombre_cargo']." Código ".$row['Codigo']." Grado ".$row['Grado']).
			utf8_decode(' bajo la figura de encargo, en la ').
			utf8_decode($row['Nombre_Dep']." ".$row[4]).
			utf8_decode(' a partir del ').
			utf8_decode(strftime("%d de %B de %Y", strtotime($row['Fecha_Inicio']))).
			utf8_decode('  mediante Resolución No. ').
			utf8_decode($row['numero']).
			utf8_decode(' del ').
			utf8_decode(strftime("%d de %B de %Y", strtotime($row['fecha_inicio']))).
			utf8_decode(' realizando las siguientes funciones: ')
			, 0,'J'); 


	$dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
    $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
    $pdf->Ln(15);
	
	$pdf->MultiCell(177,6,
		utf8_decode('Dada en Bogotá D.C., A los '.
			" ".
			date('d').
			" dias del mes de ".
			$meses[date('n')-1]. 
			" de ".
			date('Y').
			", a solicitud del interesado")
			,0,'J');
    $pdf->Ln(50);
		
		$pdf->Output();
	


	
	
?>