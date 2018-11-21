create database sgpc;

use sgpc;



create table if not exists usuarios(
	id int primary key auto_increment,
    nome varchar (100) not null,
    email varchar (100) not null,
    login varchar (50) not null unique,
    rua varchar (100),
    senha varchar(50) not null,
    numero int,
    bairro varchar (150),
    cidade varchar (150),
    referencia varchar (255),
    complemento varchar (100),
    departamento enum('FISCAL','CONTABIL','PESSOAL(RH)')		
);

select * from usuarios;


