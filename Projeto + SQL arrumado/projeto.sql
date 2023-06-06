CREATE SCHEMA `projeto` ;

use projeto;


CREATE TABLE cargos(
	idcargo VARCHAR(255) PRIMARY KEY
);

CREATE TABLE funcionario(
id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(150),
sobrenome VARCHAR(150),
cpf VARCHAR(11),
emissor VARCHAR(20),
data_nascimento DATE,
telefone VARCHAR(20),
email VARCHAR(150),
admissao DATE,
senha VARCHAR(255),
observacao VARCHAR(8000),
FOREIGN KEY(cargo) references cargos(idcargo)
);

SET SQL_SAFE_UPDATES = 0;

SET foreign_key_checks = 0;

INSERT INTO funcionario (nome, sobrenome, cpf, emissor, data_nascimento, telefone, email, admissao, cargo, senha, observacao) 
VALUES('Maria', 'Ferreira', '03529512141', 'SSP', '1998-12-21', '(61)983951104', 'pipoquinha@gmail.com', '2023-02-12', 'Administrador', '123456', 'observação 1');

INSERT INTO funcionario (nome, sobrenome, cpf, emissor, data_nascimento, telefone, email, admissao, demissao, cargo,  senha, observacao) 
VALUES('joaquim', 'Ferreira','03529512141', 'SSP','1998-12-21', '(62)983951004', 'pipoquinha1@gmail.com', '2023-02-12', 'Geral', '123456', 'observação 2');

INSERT INTO funcionario (nome, sobrenome, cpf, emissor, data_nascimento, telefone, email, admissao, demissao, cargo,  senha, observacao) 
VALUES('Tereza', 'Ferreira','03529512141', 'SSP','1998-12-21', '(84)984451004', 'pipoquinha2@gmail.com','2023-02-12', 'Geral', '123456', 'observação 3');


SELECT * FROM funcionario;