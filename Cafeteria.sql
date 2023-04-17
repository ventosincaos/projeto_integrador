-- Create table Funcionario
CREATE TABLE Funcionario (
    id_Matricula INT PRIMARY KEY,
    email VARCHAR(45),
    rg INT,
    senha VARCHAR(45),
    nome VARCHAR(90),
    cpf INT,
    data_emissao DATE,
    data_demissao DATE,
    orgao_emissor VARCHAR(45)
);

-- Create table espera_senha
CREATE TABLE espera_senha (
    id_Matricula INT,
    email VARCHAR(45),
    token VARCHAR(250),
    data_expiracao DATETIME,
    PRIMARY KEY (id_Matricula, email),
    FOREIGN KEY (id_Matricula) REFERENCES Funcionario(id_Matricula),
    FOREIGN KEY (email) REFERENCES Funcionario(email)
);

-- Create table cargo
CREATE TABLE cargo (
    idCargo INT PRIMARY KEY,
    salario DECIMAL(10,2),
    FOREIGN KEY (idCargo) REFERENCES Funcionario(idCargo)
);
