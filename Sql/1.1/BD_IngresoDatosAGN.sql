use ArchivoGN;

-- Dependencia
insert into Dependencia (Nombre_Dep)
	values 	('Oficina de Planeamiento Archivistico'),
			('División de Clasificación y Descripción'),
			('División de Programas Especiales'),
			('División Administrativa y Financiera'),
			('División de Reprografia y Automatización'),
			('Dirección General'),
			('Oficina de Control Interno'),
			('Oficina Asesora de Planeación'), 
			('Oficina Asesora Jurídica'),
			('Subdirección del Sistema Nacional de Archivos'),
			('Subdirección de Tecnologías de la Información Archivistica y Documento Electrónico'),
			('Secretaria General'),
			('Subdirección de Gestión del Patrimonio Documental'),
			('Subdirección de Asistencia Técnica y Proyectos Archivisticos');

select * from Dependencia;

-- Grupo
insert into Grupo (Nombre_Grupo, id_Dependencia)
	values 	('Grupo de Asistencia Tecnica y Gestion de Proyectos',1),
			('Grupo de Normatividad y Desarrollo de la Politica Archivistica', 2),
			('Grupo de Conservacion y Restauracion', 2),
			('Grupo de Capacitacion y Asesoria al Sistema Nacional de Archivos - SNA', 3),
			('Grupo de Inspeccion y Vigilancia de Archivos del Sistema Nacional de Archivos', 3),
			('Grupo de Talento Humano', 4),
			('Grupo de Presupuesto y Tesoreria', 4),
			('Grupo de Contabilidad', 4),
			('Grupo de Apoyo para la Adquisicion de Bienes y Servicios',4),
			('Grupo de Servicios Generales', 4),
			('Grupo de Gestión Contractual', 9),
			('Grupo de Articulación y Desarrollo del Sistena Nacional', 10),
			('Grupo de Inspección y Vigilancia', 10),
			('Grupo de Archivos Étnicos y Derechos Humanos', 10), 
			('Grupo de Documentos Electrónicos y Preservación Digital', 11),
			('Grupo de Innovación y Apropiación de Tecnologías de la Información Archivistica', 11), 
			('Grupo de Gestión de Documentos y Archivos Electronicos', 11),
			('Grupo de Presevación Digital y Medios Electronicos', 11),
			('Grupo de Archivo y Gestión Documental', 12), 
			('Grupo de Gestión Financiera', 12), 
			('Grupo de Sistemas', 12), 
			('Grupo de Compras y Adquisiciones', 12),
			('Grupo de Gestión Humana', 12), 
			('Grupo de Recursos Físicos', 12), 
			('Grupo de Asuntos Juridicos y Contratacion', 12),
			('Grupo de Correspondencia y Archivo', 12),
			('Grupo de Conservación y Restauración del Patrimonio Documental', 13), 
			('Grupo de Organización , Descripción y Reprografía', 13), 
			('Grupo de Organización y Descripcion Archivistica', 13),
			('Grupo de Investigación y Fondos Documentales Históricos', 13), 
			('Grupo de Evaluación Documental y Transferencias Secundarias', 13), 
			('Grupo de Gestión de Proyectos Archivísticos', 14), 
			('Grupo de Asistencia Técnica Archivística', 14); 


select * from Grupo;
SELECT Nombre_Dep, Nombre_Grupo
FROM Dependencia INNER JOIN Grupo ON (Dependencia.id_Dependencia = Grupo.id_Dependencia); 

-- Cargos Actuales
insert into Cargo (Nombre_Cargo, Codigo, Grado,Sueldo)
	values ('Director General', 0015, 21, 6599891),
			('Secretario General', 0037, 18, 5498247),
			('Jefe de Oficina',0137, 15, 4747856),
			('Jefe Oficina Asesora Planeacion', 1045, 08, 4629373), 
			('Jefe Oficina Asesora Jurídica', 1045, 08, 4629373), 
			('Asesor', 1020, 05, 3346293), 
			('Subdirector General de Entidad', 0040, 14, 4651092),
			('Profesional Especializado', 2028, 17, 3729631),
			('Profesional Especializado', 2028, 16, 3545878), 
			('Profesional Especializado', 2028, 15, 3288880),
			('Profesional Especializado', 2028, 14, 297435), 
			('Profesional Especializado', 2028, 13, 2779762),
			('Profesional Especializado', 2028, 12, 2565641),
			('Profesional Universitario', 2044, 11, 2418255), 
			('Profesional Universitario', 2044, 09, 2243986), 
			('Profesional Universitario', 2044, 08, 2151378),
			('Restaurador', 2094, 09, 2243986), 
			('Restaurador', 2094, 08, 2151378),
			('Tecnico', 3100, 18, 2251917),
			('Tecnico', 3100, 17, 2049217), 
			('Tecnico Administrativo', 3124, 15, 1694203),
			('Tecnico Operativo',3132, 14, 1621055),
			('Auxiliar Administrativo', 4044, 22, 1534352),
			('Auxiliar Administrativo', 4044, 16, 1253616),
			('Auxiliar Administrativo', 4044, 14, 1164067),
			('Auxiliar Administrativo', 4044, 11, 1027665),
			('Secretario Ejecutivo', 4210, 22, 1534352),
			('Secretario Ejecutivo', 4210, 18, 1311843),
			('Secretario Ejecutivo', 4210, 20, 1387491),
			('Conductor Mecánico', 4103, 20, 1387491),
			('Conductor Mecánico', 4103, 17, 1280090),
			('Conductor Mecánico', 4103, 19, 1345682),
			('Auxiliar de Servicios Generales', 4064, 13, 1139113),
			('Auxiliar de Servicios Generales', 4064, 11, 1027665);


select * from Cargo;

-- Tipo de Vinculacion
insert into Vinculacion (Nombre_Vinculacion)
	values ('Carrera'),
			('Provisional'),
			('Libre Nombramiento y Remosion');


select * from Vinculacion;

-- Datos de las Resoluciones
insert into Resolucion (Numero, Fecha_Res, Tipo)
	values (270, '2011-09-01', 'Grupos'), 
		   (477, '2012-10-16', 'Grupos'), 
		   (469, '2013-09-11', 'Grupos'), 
		   (884, '2014-12-05', 'Grupos'), 
		   (355, '2012-08-30', 'Laboral'),
		   (531, '2012-11-15', 'Laboral'), 
		   (471, '2013-09-11', 'Laboral'), 
		   (472, '2014-08-08', 'Laboral'), 
		   (886, '2014-12-05', 'Laboral'), 
		   (106, '2015-03-16', 'Laboral');

select * from Resolucion;




