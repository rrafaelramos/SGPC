create database sgpc;

use sgpc;



create table if not exists funcionarios(
	id int primary key auto_increment,
    nome varchar (100) not null,
    email varchar (100) not null unique,
    login varchar (50) not null unique,
    rua varchar (100),
    numero int,
    bairro varchar (150),
    cidade varchar (150),
    referencia varchar (255),
    complemento varchar (100),
    departamento enum('FISCAL','CONTABIL','PESSOAL(RH)'),
    token varchar (255)
);





