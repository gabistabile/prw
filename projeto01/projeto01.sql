-- drop database projeto01;

create database projeto01;

use projeto01;

create table usuario(
id_usuario int not null auto_increment,
nome_usuario varchar(100) not null,
email_usuario varchar(100) not null,
<<<<<<< HEAD
telefone_usuario varchar(100) not null,
=======
fone_usuario varchar(100) not null,
>>>>>>> 1e84fc987f73e8dd4498183025351b91c92f8f8a

primary key (id_usuario));

use projeto01;

<<<<<<< HEAD
insert into usuario (nome_usuario, email_usuario, telefone_usuario)
values ('Gabrielle','gabrielle.stabile@aluno.ifsp.edu.br','991542533');
=======
insert into usuario (nome_usuario, email_usuario, fone_usuario)
values ('Maria','maria1@gmail.com','99742-7154');
>>>>>>> 1e84fc987f73e8dd4498183025351b91c92f8f8a

select * from usuario;

-- truncate usuario;
