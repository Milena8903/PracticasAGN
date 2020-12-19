use AGN3;

/* empleado 1 */
insert into empleado (Nombre_empleado, Apellido_Empleado, CedulaC, Estado, fecha_ingreso) 
	values ('Ana Cecilia', 'Rincon Perez', 51818336,1,'1996-01-01');

/* empleado 2*/
insert into empleado (Nombre_empleado, Apellido_Empleado, CedulaC, Estado, fecha_ingreso) 
	values ('Jose Luis', 'Alarcon Velandia', 80037089 ,1,'2013-03-01');

/* empleado 3*/
insert into empleado (Nombre_empleado, Apellido_Empleado, CedulaC, Estado, fecha_ingreso) 
	values ('Zully Dayana', 'Agudelo Velasquez', 52952181 ,1,'2013-11-07');

select * from empleado;
select * from vinculacion;


/* Administrador */
insert into Administrador (usuario, contrasenia) 
	values ('Admin', 'Administrador');