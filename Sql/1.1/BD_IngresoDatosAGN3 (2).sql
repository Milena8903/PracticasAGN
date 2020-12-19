use ArchivoGN;

-- Datos Empleado
insert into Empleado (Nombre_Empleado, Apellido_Empleado, CedulaC, Estado)
	values ('Jose Luis','Alarcon Velandia', 80037089, 0),
			('Sergio','Alonzo Pineda', 80126452, 1),
			('Zully Dayana','Agugelo Velasquez', 52952181, 1);

select * from Empleado;

-- Nombramiento Inicial
insert into Nombramiento (Num_Resolucion, Fecha_Resolucion, Num_Acta, Fecha_Acta, Fecha_Inicio, id_Empleado, id_Vinculacion, id_Cargo, id_Grupo)
	values ( 064, '2013-02-21', 28, '2013-03-01', '2013-03-01', 1, 1, 14, 14);

-- Nombramiento - Translado
insert into Nombramiento (Num_Resolucion, Fecha_Resolucion, Num_Acta, Fecha_Acta, Fecha_Inicio, Fecha_Fin, Translado, id_Empleado, id_Vinculacion, id_Cargo, id_Grupo)
	values (532, '2013-10-1', 78, '2013-10-7', '01-03-2013',,,),
			(),
			();

select * from Nombramiento;
