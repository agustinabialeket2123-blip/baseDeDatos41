<?php $conexion = new mysqli( "localhost", "root",""); ?>

$sql="CREATE DATABASE IF NOT EXISTS chat";
$conexion->query($sql);
$conexion->select_db("chat");

$sql="
CREATE TABLE user(
id INT AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(25),
birth DATE,
email VARCHAR(80),
pass VARCHAR(80),
role enum("User", "Moderator", "Developer", "Banned"),
constraint userID primary key (id)
);
CREATE TABLE rooms(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name varchar(15),
    type enum("General","Technology","Gaming","Music","Sports","Cooking"),
    limit int,
    people int,
    available bool,
    constraint roomID primary key (id)
);
CREATE TABLE session(
    id INT AUTO_INCREMENT PRIMARY KEY,
    filter varchar(100),
    cooldown int,
    idrooms int,
    constraint sessionid primary key (id),
    constraint pk idrooms foreign key (idrooms) references rooms(id)
)
";
