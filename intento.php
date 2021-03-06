<html>

<div class="inner-bg">
	<div class="container">

		<div class="row">
			<div class="col-sm-8 col-sm-offset-2 ">
				<h1>Archivo General de la Nación</h1>
			</div>
		</div>
	</div>

	<div class="row">
		<div aling="" class="col-sm-10 col-sm-offset-1 form-box"></div>
	</div>


<?php  
setlocale(LC_ALL,"es_ES@euro","es_ES","esp");
echo $row[0]." ".$row[1].", Identificada con Cédula de Ciudadanía No. ".$row[2].",<br>";
echo "es Funcionaria del Archivo General de la Nación desde el ".strftime("%d de %B de %Y", strtotime($row[3])).",<br>";
echo "se encuentra vinculada a esta Entidad con derechos de ".$row[4].".<br>";
echo "Actualmente se desempeña como ".$row[5]." Código ".$row[6]." Grado ".$row[7]." bajo<br>";
echo "la figura de encargo, en la ".$row[9]." ".$row[8].",<br>";
echo "a partir del ".strftime("%d de %B de %Y", strtotime($row['fecha_inicio'])).",<br>";
echo "<br>";
echo "A continuación se detallan los cargos ejercidos durante su permanencia en la Entidad en <br>";
echo "los diferentes periodos:<br>";
echo "<br>";

$consultacuadro="SELECT Nombre_Dep, 
						Nombre_Grupo,
						nombre_cargo, 
						Codigo, 
						Grado, 
						Fecha_Inicio, 
						Fecha_Fin 
from empleado inner join nombramiento on empleado.id_Empleado=nombramiento.id_Empleado  
		      inner join cargo on nombramiento.id_Cargo=cargo.id_Cargo 
		      inner join dependenciagrupo on nombramiento.id_Dependencia=dependenciagrupo.id_Dependencia 
		      inner join resolucion on nombramiento.id_resolucion=resolucion.id_Resolucion 
where CedulaC='$cedula' and Tipofuncion = 0 order by Fecha_Inicio asc ";

$resultadocuadro=mysqli_query($link,$consultacuadro);

?>

<div class="row">
 <div class="col-sm-8 col-sm-offset-2">
  <div class="well bs-component">
<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>DEPENDENCIA</th>
      <th>DENOMINACIÓN DEL EMPLEO</th>
      <th>CODIGO</th>
      <th>GRADO</th>
      <th>DESDE</th>
      <th>HASTA</th>
	  </tr>
  </thead>

<?php
while($fila=mysqli_fetch_array($resultadocuadro)){
    echo "<tbody>";
	echo "<tr>";
	echo "<td>".$fila['Nombre_Dep']." - ".$fila['Nombre_Grupo'];
	echo "</td>";
	echo "<td>".$fila['nombre_cargo'];
	echo "</td>";
	echo "<td>".$fila['Codigo'];
	echo "</td>";
	echo "<td>".$fila['Grado'];
	echo "</td>";
	echo "<td>".$fila['Fecha_Inicio'];
	echo "</td>";
	echo "<td>".$fila['Fecha_Fin'];
	echo "</td>";
	echo "</tr>";
    echo "</tbody>";
	}
?>
</table> 
</div>
</div>
</div>

<?php
$consultalabor="SELECT nombre_cargo, 
					   Codigo, 
					   Grado, 
					   Nombre_Dep, 
					   Nombre_Grupo, 
					   Fecha_Inicio, 
					   numero,
					   fecha_res,
                       num_acta,
                       fecha_inicio, 
                       fecha_fin,
                       Num_Resolucion,
                       Fecha_Resol
from empleado inner join nombramiento on empleado.id_Empleado=nombramiento.id_Empleado  
		      inner join cargo on nombramiento.id_Cargo=cargo.id_Cargo 
		      inner join dependenciagrupo on nombramiento.id_Dependencia=dependenciagrupo.id_Dependencia 
		      inner join resolucion on nombramiento.id_resolucion=resolucion.id_resolucion
where CedulaC='$cedula' order by fecha_inicio desc";

$consultaresolucion="SELECT nombramiento.id_resolucion
from empleado inner join nombramiento on empleado.id_Empleado=nombramiento.id_Empleado  
			  inner join resolucion on nombramiento.id_resolucion=resolucion.id_resolucion 
where CedulaC='$cedula' order by fecha_res desc";

$resultadolabor=mysqli_query($link,$consultalabor);
$resultadoresolucion=mysqli_query($link,$consultaresolucion);

$row = mysqli_fetch_array($resultadolabor);
echo "<br><br>";
echo "Actualmente se desempeña como ".$row['nombre_cargo']." codigo ".$row['Codigo']." grado ".$row['Grado'].
		" bajo la figura de<br>";
echo "encargo, en la ".$row['Nombre_Dep']." - ".$row[4].", a partir del<br>";
echo strftime("%d de %B de %Y", strtotime($row['Fecha_Inicio']))." mediante Resolución No. ".$row['Num_Resolucion'].
	" del ".strftime("%d de %B de %Y", strtotime($row['Fecha_Resol']))." y Acta<br>";
echo "de Posesión No. ".$row['num_acta']." del ".strftime("%d de %B de %Y", strtotime($row['fecha_inicio'])).",<br>";
echo "realizando las siguientes funciones: <br>";
echo "<br>";

$row2 = mysqli_fetch_array($resultadoresolucion);

$consultafuncion="SELECT funcion 
				from funciones inner join resolucion on funciones.id_resolucion=resolucion.id_resolucion
				where funciones.id_resolucion = ".$row2[0]."";

$resultadofuncion=mysqli_query($link,$consultafuncion);
while ($row3 = mysqli_fetch_array($resultadofuncion)){
echo $row3[0]."<br>";
}
while ($row = mysqli_fetch_array($resultadolabor)){
$row2 = mysqli_fetch_array($resultadoresolucion);

$consultafuncion="SELECT funcion 
				from funciones inner join resolucion on funciones.id_resolucion=resolucion.id_resolucion
				where funciones.id_resolucion = ".$row2[0]."";
$resultadofuncion=mysqli_query($link,$consultafuncion);

echo "<br><br>";
echo "Se desempeñó como ".$row['nombre_cargo']." codigo ".$row['Codigo']." grado ".$row['Grado']." bajo la figura de<br>";
echo "encargo, en la ".$row['Nombre_Dep']." ".$row[4].", a partir del<br>";
echo strftime("%d de %B de %Y", strtotime($row['Fecha_Inicio']))." mediante Resolución No. ".$row['Num_Resolucion'].
	" del ".$row['Fecha_Resol']." y Acta<br>";
echo "de Posesión No. ".$row['num_acta']." del ".strftime("%d de %B de %Y", strtotime($row['Fecha_Inicio'])).
		" hasta el ".strftime("%d de %B de %Y", strtotime($row['fecha_fin'])).",<br>";
echo "realizando las siguientes funciones: <br>";
echo "<br>";
while ($row3 = mysqli_fetch_array($resultadofuncion)){
echo $row3[0]."<br>";
}
}
echo "<br>";
echo "<br>";
echo "<br>";
echo "Se expide en Bogotá D.C, el día ". strftime(" %d de %B del %Y"). " y a solicitud de la interesada solo se
		 certifican los cargos que ha desempeñado en el nivel profesional.";	
echo "<br>";
echo "<br>";

	?>

</div>
</html>