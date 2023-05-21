<?php
class updateManager
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function updateFuncionario($id, $nome, $sobrenome, $cpf, $rg, $orgao_emissor, $data_nascimento, $email, $telefone, $celular, $endereco, $data_admissao, $data_demissao, $id_cargo, $descricao_func)
    {

        try {
            $sql = 'UPDATE funcionario ' .
                'SET nome = :nome,' .
                ' sobrenome = :sobrenome,' .
                ' cpf = :cpf,' .
                ' rg = :rg,' .
                ' orgao_emissor = :orgao_emissor,' .
                ' data_nascimento = :data_nascimento,' .
                ' email = :email,' .
                ' telefone = :telefone,' .
                ' celular = :celular,' .
                ' endereco = :endereco,' .
                ' data_admissao = :data_admissao,' .
                ' data_demissao = :data_demissao,' .
                ' id_cargo = :id_cargo,' .
                ' descricao_func = :descricao_func ' .
                'WHERE id_funcionario = :id';

            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':sobrenome', $sobrenome);
            $stmt->bindParam(':cpf', $cpf);
            $stmt->bindParam(':rg', $rg);
            $stmt->bindParam(':orgao_emissor', $orgao_emissor);
            $stmt->bindParam(':data_nascimento', $data_nascimento);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':telefone', $telefone);
            $stmt->bindParam(':celular', $celular);
            $stmt->bindParam(':endereco', $endereco);
            $stmt->bindParam(':data_admissao', $data_admissao);
            $stmt->bindParam(':data_demissao', $data_demissao);
            $stmt->bindParam(':id_cargo', $id_cargo);
            $stmt->bindParam(':descricao_func', $descricao_func);
            $stmt->bindParam(':id_funcionario', $id);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                echo "<p>Registro atualizado com sucesso</p>";
                header('Location: ../index/index.php');
            } else {
                echo 'Erro ao atualizar registro';
            }
        } catch (PDOException $e) {
            echo 'Erro: ' . $e->getMessage();
        }
    }
}
?>