<?php

class tableManagerFuncionario
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function searchAllFuncionario()
    {
        if ($this->pdo) {
            $res = array();
            $cmd = $this->pdo->query("SELECT * FROM funcionario ORDER BY nome");
            $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
            return $res;
        } else {
            echo "Erro na conexão com o banco de dados";
        }
    }
}
