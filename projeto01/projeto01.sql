-- drop database projeto01;

create database projeto01;

use projeto01;

create table usuario(
id_usuario int not null auto_increment,
nome_usuario varchar(100) not null,
email_usuario varchar(100) not null,
telefone_usuario varchar(100) not null,

primary key (id_usuario));

use projeto01;

insert into usuario (nome_usuario, email_usuario, telefone_usuario)
values ('Gabrielle','gabrielle.stabile@aluno.ifsp.edu.br','991542533');

select * from usuario;

-- truncate usuario;
