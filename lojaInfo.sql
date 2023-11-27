create database teste;
use teste ;
create table clientes(
idClientes int primary key auto_increment,
nome varchar(100),
cpf varchar(100),
telefone varchar(100),
email varchar(100), 
endereco varchar(100)
);

create table colaborador(
idcolaborador int primary key auto_increment,
nome varchar(100),
cpf varchar(100),
telefone varchar(100),
email varchar(100), 
dependentesNumero varchar(100)
);

CREATE TABLE Fornecedores(
    id_Fornecedores INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255),
    cnpj VARCHAR(18),
    insc_estadual VARCHAR(20),
    contato VARCHAR(255),
    endereco TEXT
);

CREATE TABLE pedidos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fornecedor VARCHAR(255),
    produto VARCHAR(255),
    quantidadeEstoque INT,
    dataPedido DATE,
    dependentesNumero INT
);


CREATE TABLE  produtos(
    id_produtos INT AUTO_INCREMENT PRIMARY KEY,
    descricao VARCHAR(255) NOT NULL,
    precoCompra DECIMAL(10, 2) NOT NULL,
    precoVenda DECIMAL(10, 2) NOT NULL,
    qtdeEstoque INT NOT NULL
);

CREATE TABLE pagamentos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    forma_pagamento VARCHAR(255),
    prazo VARCHAR(255)
);


select * from Colaborador;
select * from clientes;
select * from pedidos;
select * from produtos;
select * from fornecedores;
select * from pagamentos;






