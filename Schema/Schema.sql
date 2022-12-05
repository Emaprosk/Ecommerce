-- Active: 1670050145593@@127.0.0.1@3308@ecommerce
create database ecommerce;

create table user(
    idUser int auto_increment,
    name varchar(30),
    email varchar(30),
    password varchar(30),
    constraint pk_idUser primary key(idUser)
);

create table articulo(
    idArticulo int auto_increment,
	title varchar(20),
    description varchar(50),
    image longblob
);

select * from user;

select * from articulo;

drop table articulo;