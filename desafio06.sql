create database desafio06_bd;

use desafio06_bd;
 
 create table alunos(
	nome varchar(30),
	CPF varchar(14),
	nascimento date,
	genero char(1)
);

create table disciplina(
  nome varchar(30),
  codigo varchar(20),
  descricao varchar(100)
 );
 
create table professor(
	nome varchar(30),
	CPF varchar(14),
	nascimento date,
	genero char(1),
	formacao varchar(40)
 );	

describe alunos;











