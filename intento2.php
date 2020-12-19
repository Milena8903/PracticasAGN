<?php  
$pdf=new PDF('P','mm','Letter');
		
		$pdf->Open();
		$pdf->AddPage();
		$pdf->SetFont('Arial','', 12);
		$pdf->Ln(20);

		$pdf->MultiCell(177,6,utf8_decode('LA  COORDINADORA DEL GRUPO DE  GESTIÓN HUMANA DEL ARCHIVO GENERAL
											 DE LA NACIÓN JORGE PALACIOS PRECIADO'), 0, "C",FALSE);

		$pdf->Ln(15);
		$pdf->cell(170,10,'CERTIFICA QUE',0, 1, 'C');	
		 $pdf->Ln(10);


		$pdf-> MultiCell(177,6, 
			utf8_decode($row[0]." ".$row[1]).
			utf8_decode(', identificado con cédula de ciudadanía N. ').
			utf8_decode(number_format($row[2],0,'.','.')). 
			utf8_decode(', es funcionario del Archivo General de la Nación Jorge Palacios Preciado desde el ').
			utf8_decode(strftime("%d de %B de %Y", strtotime($row[3]))).
			utf8_decode(' se encuentra vinculado/a a esta entidad con derechos de ').
			utf8_decode($row[4]).
			utf8_decode(', conforme a lo estipulado en la Resolución N. ').
			utf8_decode($row["Num_Resolucion"]).
			utf8_decode(' del ').
			utf8_decode(strftime("%d de %B de %Y", strtotime($row["Fecha_Resol"]))).
			utf8_decode('  y Acta de Posesión N. ').
			utf8_decode($row["Num_Acta"]).
			utf8_decode('  del  ').
			utf8_decode(strftime("%d de %B de %Y", strtotime($row["Fecha_Acta"]))).
			utf8_decode('. Actualmente se desempeña como ').
			utf8_decode($row[5]." Código ".$row[6]." Grado ".$row[7]).
			utf8_decode(' bajo la figura de encargo, en la ').
			utf8_decode($row[9]." ".$row[8]).
			utf8_decode(' con una asignación salarial mensual de $').
			utf8_decode(number_format($row["Sueldo"],0,'.','.'))
			, 0,'J'); 

    $pdf->Ln(8);
	$pdf->MultiCell(177,6,
		utf8_decode('Dada en Bogotá D.C., el día ').
		utf8_decode(" ").
		utf8_decode(strftime(" %d de %B del %Y")).
		utf8_decode(", a solicitud del interesado.")
			,0,'J');
	
    $pdf->Ln(30);
    $pdf->SetFont('Arial','B',15);
    $pdf->cell(170,10,utf8_decode('MARÍA ALEJANDRA SUÁREZ CHOCONTÁ'),0, 1, 'C');
    $pdf->Ln(10);

    $pdf->SetFont('Arial','',7);
    $pdf->cell(170,9,utf8_decode('Proyectó: María Alejandra Suárez Ch. -  GGH'),0, 1, 'L');
   //$pdf->Ln(0.5);
    $pdf->cell(170,9,utf8_decode('Revisó: María Alejandra Suárez Chocontá - Coordinadora GGH'),0, 1, 'L');
    //$pdf->Ln(0.5);
    $pdf->cell(170,9,utf8_decode('Archivado en: 220.52 Historias Laborales'),0, 1, 'L');

		$pdf->Output();
	
	?>