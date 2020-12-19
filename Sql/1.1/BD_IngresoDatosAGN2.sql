use ArchivoGN;

-- Datos de FK resolucion y Funcion sin el grupo QUEDO PAG 13
insert into Resolucion_Funcion (id_Resolucion, id_Dependencia, id_Cargo, F_Principal)
	values (10,6,1, 'Dirigir, organizar, formular y adoptar políticas, planes, programas y proyectos de la Entidad, en cumplimiento de la función, misión y objetivos institucionales, establecidos por la Constitución Política, la Ley y el Gobierno Nacional.'),
		   (10, 6, 6,'Asesorar al Director General en lo referente a los aspectos jurídicos que le competen a la Entidad de manera integral y eficiente.'), 
		   (10, 6, 6, 'Asesorar a la Dirección General en el seguimiento a la ejecución de las políticas, planes, programas y demás acciones relacionadas con la gestión del Archivo General de la Nación.'), 
		   (10,6,6, 'Asesorar al Director General en la formulación de estrategias, planes y programas que contribuyan a la identificación, recuperación, protección y difusión del patrimonio documental del país y en el desarrollo de las diferentes funciones del Despacho.'), 
		   (10,6,6,'Asesorar a la Dirección General en el seguimiento a la ejecución de las políticas, planes, programas y demás acciones relacionadas con la gestión financiera del Archivo General de la Nación.'), 
		   (), 
		   (), (), (), (), (), (), (), (), (), (), (), (), (), (), (), (), (), (), (), (),
		   ();

-- Datos de FK resolucion y Funcion
insert into Resolucion_Funcion (id_Resolucion, id_Dependencia, id_Grupo, id_Cargo, F_Principal)
	values ( ), (), (), (), (), (), (), (), (), (), (), (), (), (), (), (), (), (), (), (), (), (), (), (), (), (),
		   ();

select * from Resolucion_Funcion;

-- Datos de las Funciones
insert into Funcion (id_ResFun, Funcion)
	values (1, '1.Dirigir el diseño de la política nacional de gestión documental y archivos, para facilitar la gestión administrativa del Estado y la conservación del patrimonio documental'),
			(1,'2.Dirigir procesos de investigación a partir de la información contenida en los distintos archivos de la Nación, sus fuentes primarias y el uso y consulta de los archivos con fines culturales, científicos, históricos o técnicos.'),
			(1,'3.Dirigir, coordinar y controlar la gestión de los archivos públicos, promoviendo el desarrollo y aplicación de nuevas tecnologías para su adecuado funcionamiento.'),
			(1,'4.Dirigir y  orientar las políticas de fortalecimiento de la cultura archivística y promover y definir los espacios de desarrollo en esta materia.'),
			(1,'5.Dirigir, orientar y coordinar las acciones referentes a la imposición de multas y sanciones de las entidades públicas y privadas que cumplen funciones públicas por incumplimiento de la ley 594 de 2000 y sus normas reglamentarias  vigentes.'),
			(1,'6.Aprobar la publicación de obras de interés archivístico, impresas y digitales que contribuyan a difundir los avances de la archivística, las actividades de la Entidad y su patrimonio documental o de otros archivos de interés cultural.'),
			(1,'7.Establecer las tarifas a cobrar por concepto de venta de bienes y servicios prestados por la Entidad'),
			(1,'8.Cumplir las normas legales y reglamentarias vigentes y ejecutar las disposiciones del Consejo Directivo.'),
			(1,'9.Ejercer la representación legal de la Entidad.'),
			(1,'10.Someter a consideración del Consejo Directivo los asuntos de su competencia.'),
			(1,'11.Dirigir, coordinar, vigilar y controlar la ejecución de las funciones o programas del Archivo General de la Nación Jorge Palacios Preciado y de su personal.'),
			(1,'12.Expedir los actos Administrativos y celebrar los contratos necesarios para la gestión administrativa, los convenios de cooperación financiera o técnica nacional o internacional, estableciendo relaciones y acuerdos de cooperación con instituciones educativas, culturales, de investigación y con archivos extranjeros.'),
			(1,'13.Promover y gestionar las relaciones y convenios interinstitucionales, alianzas estratégicas, para el fortalecimiento de las funciones archivísticas en general  y de cooperación nacional e internacional, en materias técnicas o financieras.'),
			(1,'14.Establecer relaciones o acuerdos de cooperación  con instituciones educativas, culturales, de investigación y con archivos extranjeros.'),
			(1,'15.Presentar un informa anual de resultados de la gestión institucional al Presidente de la República, por intermedio del Ministerio de Cultura. Así mismo, presentar informes semestrales de los resultados de la gestión institucional al Consejo Directivo.'),
			(1,'16.Ejercer la función de control disciplinario en segunda instancia, en los términos de la Ley 734 de 2002 o de las normas que la modifiquen.'),
			(1,'17.Crear, conformar, asignar funciones a los órganos de asesoría y coordinación, así como los grupos internos de trabajo necesarios para el cumplimiento de los objetivos y funciones del Archivo General de la Nación Jorge Palacios Preciado, mediante acto administrativo dentro del marco de su competencia.'),
			(1,'18.Garantizar en la Entidad la aplicación de la Ley 87 de 1993 y del Sistema Integrado de Gestión, sus normas reglamentarias y demás disposiciones que las modifiquen y adicionen.'),
			(1,'19.Establecer los parámetros y orientaciones a las dependencias de la Entidad, en la formulación, diseño y determinación de las políticas, orientaciones estratégicas, planes, programas y proyectos, promoviendo y apoyando la implementación de una cultura de la gestión orientada por resultados.'),
			(1,'20.Formular el anteproyecto de presupuesto de la Entidad para cada vigencia y los proyectos de modificación presupuestal, para presentarlos a consideración del Consejo Directivo y tramitarlos ante las autoridades competentes.'),
			(1,'21.Dirigir, coordinar y controlar la recuperación, preservación y custodia del acervo documental propio y de la Nación.'),
			(1,'22.Dirigir el Sistema Nacional de Archivos y la Red Nacional de Archivos.'),
			(1,'23.Cumplir con las demás que le señale la ley, los estatutos internos y las demás normas legales vigentes.');

insert into Funcion (id_ResFun, Funcion)
	values (2, '1.Asesorar a la Dirección General en las acciones referentes a la imposición de multas y sanciones a las entidades públicas y privadas que cumplen funciones públicas por incumplimiento de la Ley 594 de 2000 y sus normas reglamentarias vigentes.'),
			(2,'2.Emitir conceptos y aportar elementos de juicio para la toma de decisiones relacionadas con la celebración de los contratos necesarios para la gestión administrativa, los convenios de cooperación financiera o técnica nacional e internacional, y el establecimiento de relaciones y acuerdos de cooperación con instituciones educativas, culturales, de investigación u otras.'),
			(2,'3.Asistir al superior inmediato en el ejercicio de la función disciplinaria en concordancia con los procedimientos señalados en el Código único Disciplinario.'),
			(2,'4.Brindar apoyo en relación con los requerimientos efectuados por la Procuraduría General de la Nación en especial los relacionados con los procesos disciplinarios que  cursan en la Entidad.'),
			(2,'5.Implementar y actualizar la base de datos de los procesos disciplinarios adelantados estableciendo el estado de los mismos.'),
			(2,'6.Asesorar y aconsejar a la Dirección General en la coordinación y ejecución de la atención del ciudadano. '),
			(2,'7.Participar en representación del Archivo General de la Nación en las acciones judiciales y extrajudiciales, e informar a la Dirección General y la Secretaria General sobre el desarrollo de las mismas, cuando le sean asignados.'),
			(2,'8.Tramitar ante las instancias competentes la legalización de los predios en los cuales fue construida la sede del AGN.'),
			(2,'9.Cumplir con las demás funciones que le son asignadas por autoridad competente, de acuerdo con el área de desempeño.');

insert into Funcion (id_ResFun, Funcion)
	values (3, '1.Asesorar a la Dirección General en las acciones referentes a la imposición de multas y sanciones a las entidades públicas y privadas que cumplen funciones públicas por incumplimiento de la Ley 594 de 2000 y sus normas reglamentarias vigentes.'),
			(3,'2.Coordinar con las demás dependencias los procesos de elaboración, actualización, análisis y seguimiento de propuestas de gestión y servicios de la Dirección General.'),
			(3,'3.Formular en coordinación con las dependencias involucradas, los estudios solicitados por la Dirección General, con el fin de fortalecer las diferentes áreas en los aspectos administrativos, financieros y técnicos.'),
			(3,'4.Asesorar e implementar mecanismos que permitan evaluar y hacer seguimiento al cumplimiento de los objetivos y metas de los diferentes proyectos, planes estratégicos y operativos que adelante la Dirección General.'),
			(3,'5.Asesorar y apoyar a la Dirección General en la toma de decisiones y formulación de políticas dirigidas al logro de la misión y visión institucional en el marco del plan de desarrollo, en las diferentes áreas temáticas.'),
			(3,'6.Asesorar a la Dirección General en el direccionamiento estratégico y administrativo de las dependencias'),
			(3,'7.Asesorar a la Dirección General en el seguimiento a los proyectos y programas, velando siempre porque las tareas se realicen eficientemente de acuerdo con los cronogramas establecidos.'),
			(3,'8.Participar en las reuniones encomendadas por la Dirección General, en la presentación de informes y ejercer seguimiento al cumplimiento de las decisiones adoptadas.'),
			(3,'9.Asesorar y participar en las investigaciones y estudios confiados por la Dirección General en las diferentes áreas temáticas.'),
			(3,'10.Asesorar en el desarrollo e implementación de controles en la gestión de las dependencias.'),
			(3,'11.Asistir a reuniones, juntas, comités de carácter oficial que por delegación expresa se le asigne.'),
			(3,'12.Absolver consultas y emitir conceptos sobre los asuntos encomendados'),
			(3,'13.Coordinar la divulgación de las políticas, programas y actividades de la Dirección General, con el fin de que la ciudadanía conozca y evalúe su gestión.'),
			(3,'14.Cumplir con las demás funciones que le son asignadas por autoridad competente, de acuerdo con el área de desempeño.');

insert into Funcion (id_ResFun, Funcion)
	values (4,'1.Asesorar y proponer a la Dirección General del AGN los planes, programas  interinstitucionales y las alianzas estratégicas para la protección del patrimonio documental y de cooperación nacional o internacional, en materias técnicas o financieras.'),
		   (4,'2.Asesorar y proponer a la Dirección General relaciones y acuerdos de cooperación con archivos extranjeros que permitan aunar esfuerzos para recuperar el patrimonio documental del país y difundir su contenido.'),
		   (4,'3.Asistir a la Dirección General en la organización de seminarios, congresos, cursos, talleres, exposiciones y pasantías conducentes al mejor desarrollo de la actividad archivística.'),
		   (4,'4.Asistir a la Dirección General en el manejo de la agenda del Despacho y de las relaciones con las diferentes entidades que tienen relación con la misión del AGN, y llevar las actas o ayudas de memoria de las reuniones a las que sea convocado.'),
		   (4,'5.Asistir a la Dirección General en la proyección y revisión de los  actos administrativos y efectuar recomendaciones para la gestión administrativa, los convenios de cooperación financiera o técnica nacional e internacional, y las relaciones y acuerdos de cooperación con instituciones educativas, culturales, de investigación y con archivos extranjeros.'),
		   (4,'6.Asistir a la Dirección General en la determinación de las políticas, orientaciones estratégicas, planes, programas y proyectos, promoviendo y apoyando la implementación de una cultura de la gestión orientada por resultados.'),
		   (4,'7.Coordinar la publicación de obras de interés archivístico, histórico y cultural así como su difusión.'),
		   (4,'8.Proponer, estudiar, y asesorar a la Dirección General sobre la modernización de la infraestructura del AGN que permita mejorar los procesos de recuperación del patrimonio documental del país.'),
		   (4,'9.Coordinar los proyectos de cooperación internacional del Programa ADAI, y las relaciones con la Asociación Latinoamericana de Archivos y el Consejo Internacional de Archivos.'),
		   (4,'10.Coordinar las relaciones de cooperación con las entidades nacionales e internacionales.'),
		   (4,'11.Asistir a la Dirección General en el seguimiento a los planes de acción y el presupuesto de las dependencias de la entidad y en la adecuada planeación de las actividades de la entidad.'),
		   (4,'12.Cumplir con las demás funciones que le son asignadas por autoridad competente, de acuerdo con el área de desempeño.');

insert into Funcion (id_ResFun, Funcion)
	values (5,'1.Asesorar y aconsejar a la alta dirección en la formulación, coordinación y ejecución de las políticas y planes financieros de la Entidad.'),
			(5,'2.Asesorar y aconsejar a la Alta Dirección a partir de los resultados del análisis del riesgo financiero que realice.'),
			(5,'3.Proponer y realizar estudios de costos para establecer puntos de referencia de costos/tarifas de los servicios ofrecidos por la Entidad.'),
			(5,'4.Absolver consultas, prestar asistencia técnica y aportar elementos de juicio para la toma de decisiones relacionadas con la adopción, ejecución y control de los programas propios de la entidad.'),
			(5,'5.Asesorar a la Alta Dirección en el seguimiento de la ejecución del presupuesto de inversión y funcionamiento de la vigencia fiscal.'),
			(5,'6.Acompañar a la Alta Dirección en las modificaciones y seguimiento a los proyectos de inversión inscritos en el Departamento Nacional de Planeación.'),
			(5,'7.Proponer y realizar estudios e investigaciones relacionadas que le sean solicitados por la Dirección General.'),
			(5,'8.Proponer y realizar estudios e investigaciones relacionadas con el tema de costos, para la revisión y análisis de la Dirección General y el área técnica competente a fin de establecer márgenes de utilidad.'),
			(5,'9.Asistir y participar en las reuniones de seguimiento a la ejecución de inversiones, del plan financiero y del proyecto de presupuesto del Archivo General de la Nación Jorge Palacios Preciado, consejos o comités de carácter oficial, cuando sea convocado o delegado.'),
			(5,'10.Preparar y presentar informes de proyectos de inversión; y otras fuentes, a partir de los reportes de avances del plan de acción de las áreas, incluyendo los datos cuantitativos y cualitativos.'),
			(5,'11.Preparar y presentar informes sobre estados contables, ingresos y facturación de la Entidad.'),
			(5,'12.Preparar y presentar las estadísticas de la gestión financiera, administrativa y misional.'),
			(5,'13.Asistir y aconsejar a la Dirección General en la preparación de audiencias de rendición de cuentas.'),
			(5,'14.Proponer y realizar estudios e investigaciones relacionadas con temas financieros y los propósitos y objetivos de la entidad que le sean confiados por la administración.'),
			(5,'15.Cumplir con las demás funciones que le son asignadas por autoridad competente, de acuerdo con el área de desempeño.');
			
SELECT Numero, Funcion
FROM Resolucion R INNER JOIN Resolucion_Funcion RF ON (R.id_Resolucion = RF.id_Resolucion) 
				  INNER JOIN Funcion F ON (RF.id_ResFun = F.id_ResFun);