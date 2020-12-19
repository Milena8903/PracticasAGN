<?php

include("conexion.php");
//$conexion = conectar();

class PDF extends FPDF{
var $widths;
var $aligns;

function SetWidths($w) {
	//Ajuste la gama de anchos de columna
	$this->widths=$w;
}

function SetAligns($a) {
	//Establecer el conjunto de las alineaciones de columnas
	$this->aligns=$a;
}

function Row($data) {

	//Calcular la altura de la fila
	$nb=0;
	for($i=0;$i<count($data);$i++)
		$nb=max($nb,$this->NbLines($this->widths[$i],$data[$i]));
	$h=5*$nb;

	//Emitir un salto de la primera página, si es necesario
	$this->CheckPageBreak($h);

	//Dibuja las celdas de la fila
	for($i=0;$i<count($data);$i++)
	{
		$w=$this->widths[$i];
		$a=isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';

		//Guardar la posición actual
		$x=$this->GetX();
		$y=$this->GetY();

		//Dibujar el borde 
		$this->Rect($x,$y,$w,$h);

		$this->MultiCell($w,20,$data[$i],0,$a,'true');
		//Ponga la posición a la derecha de la celda
		$this->SetXY($x+$w,$y);
	}
	//Ir a la siguiente línea
	$this->Ln($h);
}

function CheckPageBreak($h){

	//Si la altura h provocará un desbordamiento, añadir una nueva página de inmediato
	if($this->GetY()+$h>$this->PageBreakTrigger)
		$this->AddPage($this->CurOrientation);
}

function NbLines($w,$txt) {
	//Calcula el número de líneas de MultiCell de anchura w tomará
    $cw=&$this->CurrentFont['cw'];
	if($w==0)
		$w=$this->w-$this->rMargin-$this->x;
	$wmax=($w-2*$this->cMargin)*1000/$this->FontSize;
	$s=str_replace("\r",'',$txt);
	$nb=strlen($s);
	if($nb>0 and $s[$nb-1]=="\n")
		$nb--;
	$sep=-1;
	$i=0;
	$j=0;
	$l=0;
	$nl=1;
	while($i<$nb)	{
		$c=$s[$i];
		if($c=="\n") {
			$i++;
			$sep=-1;
			$j=$i;
			$l=0;
			$nl++;
			continue;
		}
		if($c==' ')
			$sep=$i;
		$l+=$cw[$c];
		if($l>$wmax) {
			if($sep==-1) {
				if($i==$j)
					$i++;
			} 	else
				$i=$sep+1;
			$sep=-1;
			$j=$i;
			$l=0;
			$nl++;
		}     else
			$i++;
	}
	return $nl;
}

	function Header() {
	    $this->Image('img/logo.jpg' , 20 ,8,30);
		$this->Image('img/logo-mincultura.jpg' , 100 , 15, 30);
		$this->Image('img/logo-presidencia2014.jpg' , 150 ,8, 30);
		}

	function Footer(){ // Pie de página
        
        // Posición: a 2,5 cm del final
        $this->SetY(-25);
        // Arial italic 8
        $this->SetFont('Arial','I',6);
        /* Cell(ancho, alto, txt, border, ln, alineacion)
         * ancho=0, extiende el ancho de celda hasta el margen de la derecha
         * alto=10, altura de la celda a 10
         * txt= Texto a ser impreso dentro de la celda
         * border=T Pone margen en la posición Top (arriba) de la celda
         * ln=0 Indica dónde sigue el texto después de llamada a Cell(), en este caso con 0, enseguida de nuestro texto
         * alineación=C Texto alineado al centro
         */
        $this->Cell(0,10,utf8_decode('ESTABLECIMIENTO  PÚBLICO   ADSCRITO   AL   MINISTERIO  DE  CULTURA'),'T',0,'C');
        $this->Ln(4);
        $this->Cell(0,10,utf8_decode('www.archivogeneral.gov.co  Link: Información al ciudadano, sistema de peticiones, quejas y reclamos;'),0,0,'C');
        $this->Ln(4);
        $this->Cell(0,10,utf8_decode('contacto@archivogeneral.gov.co Cra.6 Nº 6-91 Tel: 328 2888  Fax: 337 2019  Bogotá, Colombia. NIT: 800128835-6'),0,0,'C');
        $this->Ln(4);
        $this->Cell(0,10,'Fecha: 2011-12-01        V: 0        GH-351-FR-301  ',0,0,'C');
        }


//////////////////////////// Hacer tabla //////////////////////////////////////////////////////////////////////////////////
 function cabeceraHorizontal($cabecera){
        $this->SetXY(10, 125);
        $this->SetFont('Arial','B',10);
        foreach($cabecera as $fila){
            //Atención!! el parámetro valor 0, hace que sea horizontal
            $this->Cell(30,7, utf8_decode($fila),1, 0 , 'C' );
        }
    }
 
     function datosHorizontal($datos){
        $this->SetXY(10,132);
        $this->SetFont('Arial','',10);
        //Siendo un array tipo: $datos => $fila
        //Significa que $datos tiene 'nombre' 'apellido' 'matricula'
        //$fila tiene cada valor de los antes mencionados
        foreach($datos as $fila){
         //   $this->Cell(24,7, utf8_decode($fila['Nombre_Dep']." - ".$fila['Nombre_Grupo']),1, 0 , 'L' );
           // $this->Cell(24,7, utf8_decode($fila['nombre_cargo']),1, 0 , 'L' );
          //  $this->Cell(24,7, utf8_decode($fila['Codigo']),1, 0 , 'L' );
          //  $this->Cell(24,7, utf8_decode($fila['Grado']),1, 0 , 'L' );
          //  $this->Cell(24,7, utf8_decode($fila['Fecha_Inicio']),1, 0 , 'L' );
          //  $this->Cell(24,7, utf8_decode($fila['Fecha_Fin']),1, 0 , 'L' );
          //  $this->Ln();//Salto de línea para generar otra fila
        	 }
        }
    
 
    //Integrando cabecera y datos en un solo método
    function tablaHorizontal($cabeceraHorizontal, $datosHorizontal){
        $this->cabeceraHorizontal($cabeceraHorizontal);
        $this->datosHorizontal($datosHorizontal);
    }
   
    //***** Aquí comienza código para ajustar texto *************
    //***********************************************************
    function CellFit($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=false, $link='', $scale=false, $force=true){
        //Get string width
        $str_width=$this->GetStringWidth($txt);
 
        //Calculate ratio to fit cell
        if($w==0)
            $w = $this->w-$this->rMargin-$this->x;
        $ratio = ($w-$this->cMargin*2)/$str_width;
 
        $fit = ($ratio < 1 || ($ratio > 1 && $force));
        if ($fit){
            if ($scale){
                //Calculate horizontal scaling
                $horiz_scale=$ratio*100.0;
                //Set horizontal scaling
                $this->_out(sprintf('BT %.2F Tz ET',$horiz_scale));
            }
            else{
                //Calculate character spacing in points
                $char_space=($w-$this->cMargin*2-$str_width)/max($this->MBGetStringLength($txt)-1,1)*$this->k;
                //Set character spacing
                $this->_out(sprintf('BT %.2F Tc ET',$char_space));
            }
            //Override user alignment (since text will fill up cell)
            $align='';
        }
 
        //Pass on to Cell method
        $this->Cell($w,$h,$txt,$border,$ln,$align,$fill,$link);
 
        //Reset character spacing/horizontal scaling
        if ($fit)
            $this->_out('BT '.($scale ? '100 Tz' : '0 Tc').' ET');
    }
 
    function CellFitSpace($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=false, $link='')
    {
        $this->CellFit($w,$h,$txt,$border,$ln,$align,$fill,$link,false,false);
    }
 
    //Patch to also work with CJK double-byte text
    function MBGetStringLength($s)
    {
        if($this->CurrentFont['type']=='Type0')
        {
            $len = 0;
            $nbbytes = strlen($s);
            for ($i = 0; $i < $nbbytes; $i++)
            {
                if (ord($s[$i])<128)
                    $len++;
                else
                {
                    $len++;
                    $i++;
                }
            }
            return $len;
        }
        else
            return strlen($s);
    }
//************** Fin del código para ajustar texto *****************
//******************************************************************
}
?>

