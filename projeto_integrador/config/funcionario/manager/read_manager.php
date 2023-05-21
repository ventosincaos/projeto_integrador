<?php

class readManagerFuncionario
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function readFuncionarioID($id_funcionario)
{
    $sql = 'SELECT nome, sobrenome, cpf, rg, orgao_emissor, data_nascimento, email, telefone, celular, endereco, data_admissao, data_demissao, id_cargo, descricao_func FROM funcionario WHERE id_funcionario = :id_funcionario';

    $statement = $this->pdo->prepare($sql);
    $statement->bindValue(':id_funcionario', $id_funcionario, PDO::PARAM_INT);
    $statement->execute();
    $readID = $statement->fetch(PDO::FETCH_ASSOC);
    return $readID;
}
}
