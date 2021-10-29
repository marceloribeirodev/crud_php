-- Criando a base de dados crudPHP
create database crudPHP;

-- Iniciando os trabalho na base de dados crudPHP
use crudPHP;

-- Criação da tabela Pessoa
create table Pessoa(
	id int not null primary key auto_increment,
    nome varchar(150),
    telefone varchar(20),
    email varchar(100)
);

-- Descrevendo a tabela Pessoa
desc Pessoa;

-- Inserindo uma pessoa
insert into Pessoa (id, nome, telefone, email) values (default, 'Marcelo Jr.', '71988455679','marcelo@gmail.com');

-- Deletando uma pessoa
delete from Pessoa where id = 1;

-- Atualizando o email de uma pessoa
update Pessoa set email = 'marcelojr@gmail.com' where id = 1;

-- Consultando uma pessoa
select * from Pessoa where id = 1;