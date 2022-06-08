create database projetofluxo;

use projetofluxo;

create table fluxo_caixa
(
	id_fluxo_caixa			INTEGER			not null auto_increment,
    data		            date			not null,
    tipo		            varchar(10)		not null,
    valor		            decimal(10,2)	not null,
    historico	            varchar(150)	not null,
    cheque		            varchar(3)		not null,
    primary key (id_fluxo_caixa)
);