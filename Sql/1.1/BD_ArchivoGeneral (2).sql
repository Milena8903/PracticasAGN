create database ArchivoGN;
use ArchivoGN;

create table Dependencia(
id_Dependencia INT auto_increment not null,
Nombre_Dep VARCHAR (95) not null,
constraint pk_id_Dependencia primary key (id_Dependencia)
);

create table Grupo(
id_Grupo INT auto_increment not null,
Nombre_Grupo VARCHAR (95) not null,
id_Dependencia INT,
constraint pk_id_Grupo primary key (id_Grupo),
constraint fk_idDep foreign key (id_Dependencia) references Dependencia (id_Dependencia)
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
Tipo Varchar(10) not null,
constraint pk_Resolucion primary key (id_Resolucion)
);

create table Resolucion_Funcion(
id_ResFun INT auto_increment not null,
id_Resolucion INT,
id_Dependencia INT,
id_Grupo INT,
id_Cargo INT,
F_Principal longtext,
constraint pk_id_ResFun primary key (id_ResFun),
constraint fk_idResolucion foreign key (id_Resolucion) references Resolucion (id_Resolucion),
constraint fk_idDepen foreign key (id_Dependencia) references Dependencia (id_Dependencia),
constraint fk_idGrupo foreign key (id_Grupo) references Grupo (id_Grupo),
constraint fk_idCargo foreign key (id_Cargo) references Cargo (id_Cargo)
);

create table Funcion(
id_Funcion INT auto_increment not null,
id_ResFun INT,
Funcion longtext not null,
constraint pk_id_Funcion primary key (id_Funcion),
constraint fk_idResFun foreign key (id_ResFun) references Resolucion_Funcion (id_ResFun)
);


create table Vinculacion(
id_Vinculacion INT auto_increment not null,
Nombre_Vinculacion VARCHAR (30) not null,
constraint pk_idVinculacion primary key (id_Vinculacion)
);

create table Empleado(
id_Empleado INT auto_increment not null,
Nombre_Empleado VARCHAR (50) not null,
Apellido_Empleado VARCHAR (50) not null,
CedulaC INT(25) not null,
Estado BIT,
constraint pk_id_Empleado primary key (id_Empleado)
);

create table Nombramiento(
id_Nombramiento INT auto_increment not null,
Num_Resolucion INT not null,
Fecha_Resolucion DATE not null,
Num_Acta INT,
Fecha_Acta INT,
Fecha_Inicio DATE not null,
Fecha_Fin Date,
Translado BIT,
id_Empleado INT not null,
id_Vinculacion INT,
id_Cargo INT not null,
id_Grupo INT not null,
constraint pk_id_Nombramiento primary key (id_Nombramiento),
constraint fk_Vinculacion foreign key (id_Vinculacion) references Vinculacion (id_Vinculacion),
constraint fk_Empleado foreign key (id_Empleado) references Empleado (id_Empleado),
constraint fk_Cargo foreign key (id_Cargo) references Cargo (id_Cargo),
constraint fk_Grupo foreign key (id_Grupo) references Grupo (id_Grupo)
);

DROP DATABASE ArchivoGN;