create database bd_regis_aulas;
use bd_regis_aulas;

create table aula(
	cod_aula int not null auto_increment,
    tarefa varchar(45),
    tipo varchar(30),
    status varchar(30),
    descricao varchar(60),
    primary key(cod_aula)
);
select * from aula;
alter table aula change column titulo tarefa varchar(40);

