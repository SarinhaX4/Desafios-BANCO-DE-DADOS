create database desafio08_bd;

use desafio08_bd;

create table clientes(
	identificador int not null auto_increment,
	nome varchar(30),
    CPF varchar(14),
    d_nascimento date,
    genero enum('F','M','O'),
    primary key(identificador)
);

create table produto(
	identificador int not null auto_increment,
	tipo varchar(20),
    entrada date,
    primary key(identificador)
);

alter table clientes add produto_escolhido int;
alter table clientes add foreign key (produto_escolhido) references produto(identificador);
