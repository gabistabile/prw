-- drop database projeto01;

create database projeto02;

use projeto02;

create table usuario(
id_usuario int not null auto_increment,
nome_usuario varchar(100) not null,
email_usuario varchar(100) not null,
telefone_usuario varchar(100) not null,
fone_usuario varchar(100) not null,
foto_blob      blob,
foto_nome varchar(100),

primary key (id_usuario));

use projeto02;

insert into usuario (nome_usuario, email_usuario, telefone_usuario)
values ('Gabrielle','gabrielle.stabile@aluno.ifsp.edu.br','991542533');
insert into usuario (nome_usuario, email_usuario, fone_usuario)
values ('Maria','maria1@gmail.com','99742-7154');

select * from usuario;

-- truncate usuario;
