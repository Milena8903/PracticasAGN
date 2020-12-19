use AGN3;

/* ++++++++++pruebas de ingreso usuario y funciones ++++++++++++++++++*/             

/* empleado */
insert into empleado (Nombre_empleado, Apellido_Empleado, CedulaC, Estado, fecha_ingreso) values ('Ana Cecilia', 'Rincon Perez', 51818336,1,'1996-01-01');

/* resolucion 1*/
insert into resolucion (Numero, Fecha_Res, tipo, Tipofuncion, desempleo)values 
(0, '2014-12-15', 'Laboral',0, 'Profesional Especializado Código 2028 Grado 15 Secretaria General – Grupo de Sistemas');

/* funciones 1*/
insert into funciones (funcion, id_resolucion) values 
('1.	Apoyar al grupo de trabajo  en el soporte técnico de los sistemas de información y/o software de la Entidad para su óptima utilización.',1),
('2.	Apoyar técnicamente en la implementación y sostenibilidad de los planes de contingencia.',1),
('3.	Apoyar el seguimiento y atender los requerimientos de los usuarios ante los proveedores de software para asegurar el óptimo funcionamiento de los aplicativos cuando sea requerido.',1),
('4.	Apoyar técnicamente las solicitudes de soporte que realicen los funcionarios de la Entidad.',1),
('5.	Apoyar las labores de soporte técnico de hardware y software con el fin de garantizar el óptimo funcionamiento de los equipos y el software instalado.  ',1),
('6.	Realizar las copias de seguridad de los sistemas de información que se encuentren a su cargo, garantizando la seguridad de la información generada.',1),
('7.	Aplicar las disposiciones relacionadas con el sistema de gestión de seguridad y salud en el trabajo. ',1),
('8.	Cumplir con las políticas de seguridad de la información de la Entidad de conformidad con la normatividad vigente.',1),
('9.	Aplicar las disposiciones institucionales dirigidas a mitigar el impacto ambiental.',1),
('10.	Realizar las actividades pertinentes para el desarrollo de los procedimientos de la dependencia de acuerdo al nivel y naturaleza del cargo.',1),
('11.	Responder por el cuidado y conservación de los documentos, equipos, bienes muebles y enseres que por inventario le son entregados para el cumplimiento de sus funciones.',1),
('12.	Manejar adecuadamente la documentación que se produzca en la dependencia de acuerdo con la tabla de retención documental aprobada.',1),
('13.	Cumplir con las funciones que le son asignadas por autoridad competente, de acuerdo con el área de desempeño.',1);


/* nombramiento 1*/
insert into nombramiento (Num_Acta,Fecha_Acta,Fecha_Inicio,Fecha_Fin,
Translado,id_Empleado,id_Vinculacion,id_Cargo,id_dependencia,id_Resolucion)
values (0, '2015', '2014-12-15', '0000-00-00', 1, 1,1,10,34,1);

/* resolucion 2*/
insert into resolucion (Numero, Fecha_Res, tipo, Tipofuncion, desempleo)values 
(584, '2013-10-11', 'Laboral',0, 'Profesional Especializado Código 2028 Grado 15 Subdirección de Asistencia Técnica y Proyectos Archivísticos');

/* funciones 2 */
insert into funciones (funcion, id_resolucion) values 
('1.	Apoyar a la Subdirección en la formulación y aplicación de políticas, normas, planes, programas y procedimientos para el desarrollo de proyectos relacionados con el portafolio de servicios de la entidad.',2),
('2.	Diseñar los procedimientos, manuales, instructivos, formatos y demás documentos exigidos en el desarrollo de los procesos archivísticos requeridos de acuerdo con las obligaciones contractuales o compromisos contraídos por el AGN.',2),
('3.	Verificar el cumplimiento de los compromisos adquiridos, en reuniones de Comité de Supervisión, Reuniones de Comité Técnico o Reuniones de trabajo que se programen con los clientes para el oportuno cumplimiento de las actividades y obligaciones del AGN en desarrollo de los  proyectos de la Subdirección que le sean asignados.',2),
('4.	Hacer seguimiento a  los procesos técnicos archivísticos que se desarrollan en cumplimiento de los Contratos suscritos con entidades públicas o privadas de conformidad con los procedimientos establecidos para su correspondiente aval de acuerdo con las obligaciones contraídas por el AGN.',2),
('5.	Elaborar informe mensual de gestión y cumplimiento del plan de ejecución, de los proyectos asignados, y tomar las medidas preventivas o correctivas requeridas  para asegurar la cantidad y calidad de los productos ofrecidos.',2),
('6.	Hacer el seguimiento financiero y contable de los proyectos asignados y preparar con la periodicidad indicada en los procedimientos, el informe con sus respectivos soportes. ',2),
('7.	Realizar levantamiento y análisis de la información para la elaboración de propuestas técnicas y ofertas económicas que le sean asignadas de conformidad con los procedimientos establecidos.',2),
('8.	Elaborar y ajustar los procesos del SIG relacionados con la Subdirección, incorporando en ellos el componente de control interno. ',2),
('9.	Aplicar las disposiciones relacionadas con el sistema de gestión de seguridad y salud en el trabajo. ',2),
('10.	Cumplir con las políticas de seguridad de la información de la Entidad de conformidad con la normatividad vigente.',2),
('11.	Aplicar las disposiciones institucionales dirigidas a mitigar el impacto ambiental.',2),
('12.	Realizar las actividades pertinentes para el desarrollo de los procedimientos de la dependencia de acuerdo al nivel y naturaleza del cargo.',2),
('13.	Responder por el cuidado y conservación de los documentos, equipos, bienes muebles y enseres que por inventario le son entregados para el cumplimiento de sus funciones.',2),
('14.	Manejar adecuadamente la documentación que se produzca en la dependencia de acuerdo con la tabla de retención documental aprobada.',2),
('15.	Cumplir con las demás funciones que le son asignadas por la autoridad competente, de acuerdo con el nivel, la naturaleza y el área de desempeño del cargo.',2);


/* nombramiento 2*/
insert into nombramiento (Num_Acta,Fecha_Acta,Fecha_Inicio,Fecha_Fin,
Translado,id_Empleado,id_Vinculacion,id_Cargo,id_dependencia,id_Resolucion)
values (86, '2013', '2013-10-11', '2014-09-21', 1, 1,1,10,47,2);


/* resolucion 3*/
insert into resolucion (Numero, Fecha_Res, tipo,Tipofuncion, desempleo)values 
(618, '2012-12-11', 'Laboral', 0,'Profesional Universitario Código 2044 Grado 11 Subdirección de Tecnologías de la Información Archivística y Documento Electrónico – Grupo de Gestión de Documentos y Archivos Electrónicos');

/* funciones 3*/
insert into funciones (funcion, id_resolucion) values 
('1.	Participar en la formulación del diseño y puesta en marcha de los lineamientos para a la preservación a largo plazo de los documentos electrónicos de archivo en todas las entidades del Estado y en general en las instituciones que hacen parte del Sistema Nacional de Archivos.',3),
('2.	Realizar estudios e investigaciones en materia de documentos electrónicos de archivo y conceptuar sobre las mejores prácticas y tecnologías aplicadas para la gestión de documentos electrónicos de archivo. ',3),
('3.	Realizar estudios, análisis y evaluaciones de factibilidad técnica y operativa de los sistemas de información computarizada que requiera la Entidad para el cumplimiento de su función, y garantizar el uso adecuado de éstos.',3),
('4.	Proyectar, desarrollar y recomendar las medidas técnicas y funcionales de los sistemas de gestión de documentos electrónicos de archivo y en general de los sistemas de gestión documental y gestión de archivos; conducentes a garantizar la divulgación y cumplimiento en las diferentes entidades del Estado.',3),
('5.	Investigando y brindar asistencia técnica en proyectos de tecnologías de información y las comunicaciones en administración de archivos y gestión documental en la administración pública en el marco de las iniciativas  del programa Gobierno en Línea, que conduzcan a armonizar las políticas en ambos campos de acción de la administración pública.',3),
('6.	Preparar y presentar proyectos de normas o lineamientos relativos al desarrollo de la gestión documental en el Programa Gobierno en Línea en los diferentes niveles de la administración Pública.',3),
('7.	Formular los lineamientos para la implementación de manuales y estándares de cumplimiento nacional en el Archivo General de la Nación.',3),
('8.	Proponer lineamientos para el desarrollo de servicios basados en web para los usuarios e investigadores del Archivo General de la Nación y en general para toda la ciudadanía.',3),
('9.	Desarrollar una propuesta de servicios básicos basados en web 2.0 para el AGN.',3),
('10.	Brindar asesoría a los proyectos, programas y actividades en materia de fortalecimiento tecnológico interno y externo del AGN relacionados con el plan de acción de la entidad y apoyar las capacitaciones del SNA en cualquier parte del territorio nacional, en materia de sus competencias.',3),
('11.	Proyectar proyectos de actos administrativos relacionados con los cometidos institucionales del Archivo General de la Nación y el Programa de tecnologías de información y comunicaciones que imparta el gobierno nacional.',3),
('12.	Definir los lineamientos para el diseño de micro sitios necesarios para el cumplimiento de las funciones del AGN y el SNA, en el marco de la normatividad definida por el programa Gobierno en Línea.',3),
('13.	Responder por el cuidado y conservación de los documentos, equipos, bienes muebles y enseres que por inventario le sean entregados para el cumplimiento de sus funciones.',3),
('14.	Manejar adecuadamente la documentación que se produzca en la dependencia de acuerdo con la tabla de retención documental aprobada.',3),
('15.	Las demás funciones asignadas que correspondan a la naturaleza del cargo y a la normatividad legal vigente.',3);


/* nombramiento 3*/
insert into nombramiento (Num_Acta,Fecha_Acta,Fecha_Inicio,Fecha_Fin,
Translado,id_Empleado,id_Vinculacion,id_Cargo,id_dependencia,id_Resolucion)
values (129, '2012', '2012-12-11', '2013-10-10', 1, 1,1,14,40,3);

/* resolucion 4*/
insert into resolucion (Numero, Fecha_Res, tipo,Tipofuncion, desempleo)values 
(055, '2006-03-31', 'Laboral', 0,'Profesional Universitario Código 3020 Grado 10 División de Reprografía y Automatización - Grupo de Sistemas');

/* funciones 4*/
insert into funciones (funcion, id_resolucion) values 
('1.	Mantener actualizado el plan informático de la entidad de conformidad con el plan institucional para atender las necesidades de las dependencias de la entidad.',4),
('2.	Hacer laos análisis y diseños de sistemas de información y bases de datos de acuerdo a las necesidades de las dependencias de la entidad.',4),
('3.	Dar soporte técnico a las dependencias sobre manejo de software ofimática y aplicativo para su óptima utilización.',4),
('4.	Dar soporte técnico en la utilización de los equipos de informática para su correcta utilización.',4),
('5.	Realizar el mantenimiento del software aplicativo para mantener su funcionalidad.',4),
('6.	Adelantar los estudios técnicos y económicos para la adopción de nuevas tecnologías informáticas que optimicen la gestión de la entidad.',4),
('7.	Desarrollar planes de contingencia y mediadas de seguridad con el fin de evitar pérdidas de información y daños en los aplicativos y equipos.',4),
('8.	Prestar asistencia informática al Sistema Nacional de Archivos para contribuir a su modernización.',4),
('9.	Coordinar el soporte técnico de proveedores de software y de equipos para asegurar el cumplimiento de garantías y el óptimo funcionamiento de aplicativos y equipos.',4),
('10.	Transferir el conocimiento adquirido a través de la participación en programas de estudio, investigación, capacitación y preparación de material para difusión.',4);


/* nombramiento 4 */
insert into nombramiento (Num_Acta,Fecha_Acta,Fecha_Inicio,Fecha_Fin,
Translado,id_Empleado,id_Vinculacion,id_Cargo,id_dependencia,id_Resolucion)
values (210, '2010', '2006-04-01', '2010-07-19', 1, 1,1,35,13,4);

/* resolucion 5*/
insert into resolucion (Numero, Fecha_Res, tipo,Tipofuncion, desempleo)values 
(082, '2004-05-05', 'Laboral', 0,'Profesional Universitario 3020 Grado 10 División Administrativa y Financiera – Grupo de Presupuesto');

/* funciones 5*/
insert into funciones (funcion, id_resolucion) values 
('1.	Diseñar y realizar los informes internos y externos necesarios, en la aplicación del Modulo  de Novasoft y en Hojas Electrónicas.',5),
('2.	Realizar los ajustes necesarios en la parte de sistemas, cuando se presenten cambios en la normatividad presupuestal para el normal funcionamiento de la aplicación',5),
('3.	Mantener actualizada la aplicación SIDEF, de la Contraloría General de la República.',5),
('4.	Ingresar en la aplicación SIDEF, la información presupuestal de gastos e ingresos como lo requiere la  Contraloría General de la República.',5),
('5.	Elaborar las actas de la cancelación de reservas presupuestales.',5),
('6.	Elaborar los respectivos inventarios de la documentación que produce durante su gestión.',5),
('7.	Responder por el cuidado y conservación  de los documentos, equipos, bienes inmuebles y enseres por inventario le sean entregados para el cumplimiento de sus funciones.',5),
('8.	Dar cumplimiento a las normas de Salud Ocupacional y seguir las directrices del Comité Paritario de Salud Ocupacional y la Coordinación del programa.',5),
('9.	Las demás que le sean asignadas por el superior inmediato, de acuerdo con el nivel y la naturaleza del cargo.',5);

/* nombramiento  5*/
insert into nombramiento (Num_Acta,Fecha_Acta,Fecha_Inicio,Fecha_Fin,
Translado,id_Empleado,id_Vinculacion,id_Cargo,id_dependencia,id_Resolucion)
values (552, '2004', '2004-05-05', '2006-03-31', 1, 1,1,35,19,5);


/* resolucion 6*/
insert into resolucion (Numero, Fecha_Res, tipo,Tipofuncion, desempleo)values 
(027, '2009-02-09', 'Laboral', 1,'Profesional Universitario 3020 Grado 10 Coordinadora del Grupo de Sistemas ');

/* funciones 6*/
insert into funciones (funcion, id_resolucion) values 
('1.	Elaborar y mantener actualizado el plan estratégicos de sistemas de información del AGN.',6),
('2.	Brindar asesoría a los funcionarios del AGN, de otras Entidades y entes territoriales, acerca de la adopción de nuevas tecnologías en materia informática, de acuerdo con las funciones misionales, líneas de acción y políticas de la institución.',6),
('3.	Diseñar y proponer estrategias informáticas que permitan optimizar el desempeño de las labores realizadas en las diferentes dependencias del AGN.',6),
('4.	Brindar soporte y atención a las solicitudes de los funcionarios del AGN, que en materia de informática y estructura tecnológica, requieran par le desarrollo su misión.',6),
('5.	Adelantar investigaciones para la adopción de nuevas tecnologías que permitan la modernización de la gestión del Archivo General de la Nación.',6),
('6.	Emisión de políticas encaminadas a optimizar el uso de la plataforma tecnológica con que cuenta el AGN.',6),
('7.	Coordinar junto con las divisiones del AGN los planes de mejoramiento y adquisición de tecnología.',6),
('8.	Participar en la formulación y planeación de convenios interinstitucionales en lo que se requiera la participación en el grupo de sistemas.',6);

/* nombramiento 6*/
insert into nombramiento (Num_Acta,Fecha_Acta,Fecha_Inicio,Fecha_Fin,
Translado,id_Empleado,id_Vinculacion,id_Cargo,id_dependencia,id_Resolucion)
values (0, '2009', '2009-02-09', '2009-12-23', 1, 1,1,35,4,6);


/* resolucion 7*/
insert into resolucion (Numero, Fecha_Res, tipo,Tipofuncion, desempleo)values 
(067, '2009-03-30', 'Laboral', 1,'Profesional Universitario 3020 Grado 10 Jefe de División de Reprografía y Automatización ');

/* funciones 7*/
insert into funciones (funcion, id_resolucion) values 
('1.	Administrar los procesos de Reprografía y Automatización del patrimonio documental de acuerdo a normatividad legal vigente.',7),
('2.	Presentar al Sistema Nacional de Archivos propuestas para la adopción de técnicas reprográficas modernas, para difundir y propiciar la aplicación de éstas en los archivos del orden nacional, departamental y municipal.',7),
('3.	Diseñar proyectos para la adquisición y aplicación de nuevas tecnologías de sistemas en automatización de archivos para agilizar los procesos de reprografía.',7),
('4.	Proponer a la Dirección General el programa de microfilmación y digitalización de los fondos documentales del Archivo General de la Nación para determinar los recursos materiales y físicos necesarios. ',7),
('5.	Administrar los procesos de microfilmación, automatización de archivos, producción de audiovisuales y prestación de los servicios reprográficos, de acuerdo a la normatividad vigente establecida en el Reglamento General de Archivos para preservar la memoria institucional de la Nación.',7),
('6.	Coordinar la microfilmación de archivos históricos regionales que se realicen con el apoyo del AGN.',7);


/* nombramiento 7*/
insert into nombramiento (Num_Acta,Fecha_Acta,Fecha_Inicio,Fecha_Fin,
Translado,id_Empleado,id_Vinculacion,id_Cargo,id_dependencia,id_Resolucion)
values (0, '2009', '2009-03-30', '2009-04-15', 1, 1,1,35,13,7);

