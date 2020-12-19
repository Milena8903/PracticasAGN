use AGN3;

insert into resolucion (Numero, Fecha_Res, tipo, Tipofuncion, desempleo)
values
/* resolucion 1*/ 
(106, '2015-03-16', 'Laboral',0, 'Profesional Especializado Código 2028 Grado 15 
								Secretaria General 
								– Grupo de Sistemas'),
/* resolucion 2*/
(106, '2015-03-16', 'Laboral',0, 'Profesional Especializado Código 2028 Grado 15 
								  Subdirección de Asistencia Técnica y Proyectos Archivísticos'),
/* resolucion 3*/
(106, '2015-03-16', 'Laboral', 0,'Profesional Universitario Código 2044 Grado 11 
								  Subdirección de Tecnologías de la Información Archivística y Documento Electrónico 
								– Grupo de Gestión de Documentos y Archivos Electrónicos'),
/* resolucion 4*/
(106, '2015-03-16', 'Laboral', 0,'Profesional Universitario Código 3020 Grado 10 
								  División de Reprografía y Automatización 
								 – Grupo de Sistemas'),
/* resolucion 5*/
(106, '2015-03-16', 'Laboral', 0,'Profesional Universitario 3020 Grado 10 
								  División Administrativa y Financiera 
								– Grupo de Presupuesto'),
/* resolucion 6*/
(106, '2015-03-16', 'Grupo', 1,'Profesional Universitario 3020 Grado 10 
								Coordinadora del Grupo de Sistemas '),
/* resolucion 7*/
(106, '2015-03-16', 'Grupo', 1,'Profesional Universitario 3020 Grado 10 
								Jefe de División de Reprografía y Automatización ');

select * from resolucion;

insert into resolucion (Numero, Fecha_Res, tipo, Tipofuncion, desempleo)
values
/* resolucion 1 - 8*/ 
(106, '2015-03-16', 'Laboral',0, 'Profesional Universitario Código 2044 Grado 11 
								Subdirección del Sistema Nacional de Archivos
								– Grupo de Archivos Etnicos y Derechos Humanos'),
/* resolucion 2 - 9*/ 
(20, '2013-09-11', 'Grupo',1, 'Profesional Universitario Código 2044 Grado 11 
								Coordinador del Grupo de Archivos Etnicos y Derechos Humanos');

select * from resolucion;

insert into resolucion (Numero, Fecha_Res, tipo, Tipofuncion, desempleo)
values
/* resolucion 1 - 10*/ 
(106, '2015-03-16', 'Laboral',0, 'Auxiliar Administrativo Código 4044 Grado 11 
								  Secretaria General 
								 – Grupo Compras y Adquisiciones');