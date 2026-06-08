drop database autoService;
create database autoService;
use autoService;

create table pasajeros(
id int not null AUTO_INCREMENT,
nombre varchar(60),
apellido varchar(60),
dni int,
telefono varchar(15),
email varchar(80),
constraint idPasajero primary key (id)
)engine=INNODB;

create table conductores(
id int not null AUTO_INCREMENT,
nombre varchar(60),
dni int,
licencia int not null,
telefono varchar(15),
constraint idConductor primary key (id)
)engine=INNODB;

create table vehiculos(
id int not null AUTO_INCREMENT,
marca varchar(20),
modelo varchar(60),
patente varchar(7),
anio year,
telefono varchar(15),
idConductor int,
constraint idVehiculo primary key (id),
constraint conductorDuenio foreign key (idConductor) REFERENCES conductores(id)
)engine=INNODB;

create table reservas(
id int not null AUTO_INCREMENT,
fecha date,
hora time,
origen varchar(30),
destino varchar(30),
distanciaEst float,
pago DECIMAL(8,2),
estado enum('enCamino','demorada','cancelada','enDestino'),
constraint idReserva primary key (id),
idPasajero int,
idConductor int,
idVehiculo int,
constraint fkPasajero foreign key (idPasajero) REFERENCES pasajeros(id),
constraint fkConductor foreign key (idConductor) REFERENCES conductores(id),
constraint fkVehiculo foreign key (idVehiculo) REFERENCES vehiculos(id)
)engine=INNODB;

create table pagos(
id int not null AUTO_INCREMENT,
metodo enum('credito','debito','billeteraVirtual'),
datos varchar(60),
fecha varchar(7),
monto DECIMAL(8,2),
idReserva int,
constraint idPago primary key (id),
constraint fkReserva foreign key (idReserva) REFERENCES reservas(id)
)engine=INNODB;