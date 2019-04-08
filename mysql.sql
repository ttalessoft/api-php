/** create database if not exists db_api character set utf8 collate utf8_general_ci; */
use db_api;
create table if not exists lojas(
	id int unsigned not null auto_increment,
    nome varchar(100) not null,
    telefone varchar(13) not null,
    endereco varchar(200) not null,
	primary key(id)
); 

create table if not exists produtos(
	id int unsigned not null auto_increment,
    loja_id int unsigned not null,
    nome varchar(100) not null,
    preco decimal not null,
    quantidade int unsigned not null,
    primary key(id),
    constraint fk_produtos_loja_id_loja_id
		foreign key(loja_id) references lojas(id)
);