use AGN3;

/*Tablas */
select * from Vinculacion;
select * from DependenciaGrupo;
select * from Cargo;
select * from Resolucion;
select * from Funciones;
select * from Empleado;
select * from Nombramiento;

/* ********************************************************************************************************** */

/* Primera parte certificaicon */
select Nombre_Empleado,apellido_empleado, CedulaC, Fecha_ingreso, Nombre_Vinculacion, Nombre_Cargo, Codigo,
Grado, Nombre_Grupo, Nombre_Dep, fecha_inicio 

from empleado inner join nombramiento on empleado.id_Empleado=nombramiento.id_Empleado 
			  inner join vinculacion on nombramiento.id_Vinculacion=vinculacion.id_Vinculacion 
			  inner join cargo on nombramiento.id_Cargo=cargo.id_Cargo 
			  inner join dependenciagrupo on nombramiento.id_Dependencia=dependenciagrupo.id_Dependencia 
where CedulaC=51818336 order by fecha_inicio desc;

CREATE VIEW presentacion
as select  Nombre_Empleado,apellido_empleado, CedulaC, Fecha_ingreso, Nombre_Vinculacion, Nombre_Cargo, Codigo,
Grado, Nombre_Grupo, Nombre_Dep, fecha_inicio 

from empleado inner join nombramiento on empleado.id_Empleado=nombramiento.id_Empleado 
			  inner join vinculacion on nombramiento.id_Vinculacion=vinculacion.id_Vinculacion 
			  inner join cargo on nombramiento.id_Cargo=cargo.id_Cargo 
			  inner join dependenciagrupo on nombramiento.id_Dependencia=dependenciagrupo.id_Dependencia; 

select * from presentacion; 


/* cuadro certificacion funciones propias */
select Nombre_Dep, Nombre_Grupo,nombre_cargo, Codigo, Grado, Fecha_Inicio, Fecha_Fin 
from empleado inner join nombramiento on empleado.id_Empleado=nombramiento.id_Empleado  
			  inner join cargo on nombramiento.id_Cargo=cargo.id_Cargo 
			  inner join dependenciagrupo on nombramiento.id_Dependencia=dependenciagrupo.id_Dependencia 
			  inner join resolucion on nombramiento.id_resolucion=resolucion.id_Resolucion 
where CedulaC=51818336 and Tipofuncion = 0 order by Fecha_Inicio asc;


/* labor actual  */
select nombre_cargo, Codigo, Grado, Nombre_Dep, Nombre_Grupo, Fecha_Inicio, numero,fecha_res,
num_acta,fecha_inicio, fecha_fin
from empleado inner join nombramiento on empleado.id_Empleado=nombramiento.id_Empleado  
			  inner join cargo on nombramiento.id_Cargo=cargo.id_Cargo 
			  inner join dependenciagrupo on nombramiento.id_Dependencia=dependenciagrupo.id_Dependencia 
			  inner join resolucion on nombramiento.id_resolucion=resolucion.id_resolucion
where CedulaC=51818336 order by fecha_inicio desc;


/* consulta resoluciones del empleado */
select nombramiento.id_resolucion
from empleado inner join nombramiento on empleado.id_Empleado=nombramiento.id_Empleado  
			  inner join resolucion on nombramiento.id_resolucion=resolucion.id_resolucion 
where CedulaC=51818336 order by Resolucion.fecha_res desc;

/* salario  */
SELECT Nombre_Empleado, apellido_empleado,  Nombre_Cargo, Codigo, Grado,Nombre_Dep, Nombre_Grupo, 
Fecha_ingreso, Sueldo 
from empleado inner join nombramiento on empleado.id_Empleado=nombramiento.id_Empleado 
			  inner join vinculacion on nombramiento.id_Vinculacion=vinculacion.id_Vinculacion 
			  inner join cargo on nombramiento.id_Cargo=cargo.id_Cargo 
			  inner join dependenciagrupo on nombramiento.id_Dependencia=dependenciagrupo.id_Dependencia 
where CedulaC = 51818336 order by fecha_inicio desc;

/* mostrar funcionario */
SELECT Nombre_Empleado, apellido_empleado, Nombre_Cargo, Codigo, Grado, Fecha_Fin, Sueldo
from empleado inner join nombramiento on empleado.id_Empleado=nombramiento.id_Empleado 
              inner join vinculacion on nombramiento.id_Vinculacion=vinculacion.id_Vinculacion 
              inner join cargo on nombramiento.id_Cargo=cargo.id_Cargo 
              inner join dependenciagrupo on nombramiento.id_Dependencia=dependenciagrupo.id_Dependencia
where Fecha_Fin = '0000-00-00' or Fecha_Fin is null;

CREATE VIEW mostrar
as select Nombre_Empleado, apellido_empleado, Nombre_Cargo, Codigo, Grado, Fecha_Fin, Sueldo
from empleado inner join nombramiento on empleado.id_Empleado=nombramiento.id_Empleado 
              inner join vinculacion on nombramiento.id_Vinculacion=vinculacion.id_Vinculacion 
              inner join cargo on nombramiento.id_Cargo=cargo.id_Cargo 
              inner join dependenciagrupo on nombramiento.id_Dependencia=dependenciagrupo.id_Dependencia;

select * from mostrar;
call mostrar;