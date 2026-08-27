create database chat;
USE chat;

create table users(
    id int not null auto_increment,
    username VARCHAR (30) not null,
    email VARCHAR (40) not null,
    pass VARCHAR (30) not null,
    constraint pk_user PRIMARY KEY (id)
)engine =innodb;

create table chat(
    id int not null auto_increment,
    filtro varchar (100) not null,
    reglas varchar (100) not null,
    tiempo time,
    roles enum ('moderador','usuario'),
    fk_salas int,
    CONSTRAINT pk_chat primary key (id),
    CONSTRAINT fk_salas FOREIGN KEY (idsalas) REFERENCES salas (id)
)engine=innodb;

create table salas(
    id int not null auto_increment,
    name VARCHAR (30) not null,
    type enum ('general','tecno','polit','juegos','depor','cocina','musica'),
    cantidad_personas int,
    fk_user int,
    fk_chat int,
CONSTRAINT pk_salas PRIMARY KEY (id),
CONSTRAINT fk_user FOREIGN KEY (iduser) REFERENCES user (id),
CONSTRAINT fk_chat FOREIGN KEY (idchat) REFERENCES chat (id)
)engine=innodb;

create table mensajes (
    id int not null auto_increment,
    tiempo time,
    contenido varchar (200) not null,
    fk_salas,
    fk_user,
    CONSTRAINT pk_mensajes PRIMARY KEY (id),
    CONSTRAINT fk_user FOREIGN KEY (iduser) REFERENCES user (id),
    CONSTRAINT fk_salas FOREIGN KEY (idsalas) REFERENCES salas (id)
)engine=innodb;


