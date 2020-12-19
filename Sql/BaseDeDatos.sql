create database AGN3 DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
use AGN3;

create table Vinculacion(
id_Vinculacion INT auto_increment not null,
Nombre_Vinculacion VARCHAR (30) not null,
constraint pk_idVinculacion primary key (id_Vinculacion)
);

create table DependenciaGrupo(
id_Dependencia INT auto_increment not null,
Nombre_Dep VARCHAR (95) not null,
Nombre_Grupo VARCHAR (95),
DescriOrga VARCHAR (95) not null,
constraint pk_id_Dependencia primary key (id_Dependencia)
);

create table Cargo(
id_Cargo INT auto_increment not null,
Nombre_Cargo VARCHAR (95) not null,
Codigo INT (5) not null,
Grado INT (2) not null,
Sueldo INT (8) not null,
constraint pk_id_Cargo primary key (id_Cargo)
);

create table Resolucion(
id_Resolucion INT auto_increment not null,
Numero INT (5) not null,
Fecha_Res DATE not null,
Tipo Varchar(30) not null,
Tipofuncion BIT,
DesEmpleo longtext,
constraint pk_Resolucion primary key (id_Resolucion)
);

create table Funciones(
id_funcion INT auto_increment not null,
Funcion longtext not null,
id_Resolucion INT not null,
constraint pk_funcion primary key (id_funcion),
constraint fk_Resfun foreign key (id_Resolucion) references Resolucion (id_Resolucion)
);

create table Empleado(
id_Empleado INT auto_increment not null,
Nombre_Empleado VARCHAR (50) not null,
Apellido_Empleado VARCHAR (50) not null,
CedulaC INT(25) not null,
Estado BIT,
fecha_ingreso DATE not null,
constraint pk_id_Empleado primary key (id_Empleado)
);

create table Nombramiento(
id_Nombramiento INT auto_increment not null,
Num_Resolucion INT not null,
Fecha_Resol DATE not null,
Num_Acta INT,
Fecha_Acta DATE,
Fecha_Inicio DATE not null,
Fecha_Fin Date,
Translado BIT,
id_Empleado INT not null,
id_Vinculacion INT,
id_Cargo INT not null,
id_dependencia INT not null,
id_Resolucion INT,
constraint pk_id_Nombramiento primary key (id_Nombramiento),
constraint fk_Vinculacion foreign key (id_Vinculacion) references Vinculacion (id_Vinculacion),
constraint fk_Empleado foreign key (id_Empleado) references Empleado (id_Empleado),
constraint fk_Cargo foreign key (id_Cargo) references Cargo (id_Cargo),
constraint fk_dependencia foreign key (id_dependencia) references DependenciaGrupo (id_dependencia),
constraint fk_Resol foreign key (id_Resolucion) references Resolucion (id_Resolucion)
);

create table Administrador(
id_Admin INT auto_increment not null,
usuario varchar(30) not null,
contrasenia  varchar(30) not null,
constraint pk_id_Admin primary key (id_Admin)
);

Drop database agn3;