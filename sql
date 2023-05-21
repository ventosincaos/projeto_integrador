-- Criação do esquema
CREATE SCHEMA `sysffee` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE sysffee;

-- Tabela cargo
CREATE TABLE cargo (
  id_cargo INT PRIMARY KEY NOT NULL,
  nome_cargo VARCHAR(255) NOT NULL,
  salario DECIMAL(8,2) NOT NULL,
  descricao_cargo VARCHAR(255) NULL
);

-- Adicionar índice na coluna id_cargo da tabela cargo
ALTER TABLE cargo ADD INDEX idx_id_cargo (id_cargo);
ALTER TABLE cargo ADD INDEX idx_nome_cargo (nome_cargo);

-- Tabela funcionario
CREATE TABLE funcionario (
  id_funcionario CHAR(12) NOT NULL,
  senha VARCHAR(255) NOT NULL,
  nome VARCHAR(255) NOT NULL COMMENT 'nome',
  sobrenome VARCHAR(255) NOT NULL COMMENT 'sobrenome',
  cpf VARCHAR(14) NOT NULL,
  rg VARCHAR(12) NOT NULL,
  orgao_emissor VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  endereco VARCHAR(255) NOT NULL,
  telefone VARCHAR(20) NULL,
  celular VARCHAR(20) NOT NULL,
  data_admissao DATE NOT NULL,
  data_demissao DATE NULL,
  id_cargo INT NOT NULL,
  nome_cargo VARCHAR(255) NOT NULL,
  token VARCHAR(35) NULL,
  descricao_func VARCHAR(45) NOT NULL,
  UNIQUE (cpf),
  UNIQUE (email),
  FOREIGN KEY (id_cargo) REFERENCES cargo(id_cargo),
  FOREIGN KEY (nome_cargo) REFERENCES cargo(nome_cargo)
);