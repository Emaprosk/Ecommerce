-- Active: 1666390361329@@localhost@3305
create database ecommerce;

create table user(
    idUser int auto_increment,
    name varchar(30),
    email varchar(30),
    password varchar(30),
    constraint pk_idUser primary key(idUser)
);

create table articulo(
	title varchar(20),
    description varchar(50)
);

select * from user;

select * from articulo;

drop table articulo;