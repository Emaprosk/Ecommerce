create database TPFINAL;

drop table keeper;
drop table reserve;
drop table pet;


create table owner(
    idOwner int auto_increment,
    name varchar(50),
    lastName varchar(50),
    email varchar(50),
    password varchar(50),
    adress varchar(50),
    constraint pk_idOwner primary key(idOwner)
);

create table keeper(
    idKeeper int auto_increment,
    name varchar(50),
    lastName varchar(50),
    email varchar(50),
    password varchar(50),
    adress varchar(50),
    inicDays date,
    finishDays date,
    constraint pk_idKeeper primary key(idKeeper)
);

create table pet(
    idPet int auto_increment,
    name varchar(50),
    breed varchar(50),
    vaccinationPlan varchar(50),
    photo int,
    petsType varchar(50),
    idOwner int,
    constraint pk_idPet primary key (idPet),
    constraint fk_idOwner foreign key(idOwner) references owner(idOwner)
);

create table reserve(
    idReserve int auto_increment,
    startDate date,
    finishDate date,
    totalPrice double,
    idKeeper int,
    idPet int,
    constraint pk_idReserve primary key (idReserve),
    constraint fk_idKeeper foreign key(idKeeper)references keeper(idKeeper),
    constraint fk_idPet foreign key(idPet)references pet(idPet)
);

alter table reserve
add statusres boolean;

insert into keeper(idKeeper,name, lastName,email,password,adress)
values (0,'carlos', 'melchor','carlosmelchor@gmail.com', 1234, 'costa');

delete from keeper where idKeeper=2;

select * from owner;
select * from keeper;
select * from reserve;
select * from pet;

insert into pet(idpet,name,breed,vaccinationPlan,photo,idOwner)
values (0,"Pepe","Ave","no",null,1);

select idKeeper from keeper;