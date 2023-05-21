<?php
class UpdateManager
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getCargoId($nome_cargo)
    {
        try {
            $sql = 'SELECT id_cargo FROM cargo WHERE nome_cargo = :nome_cargo';
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':nome_cargo', $nome_cargo);
            $stmt->execute();

            $cargo = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($cargo) {
                return $cargo['id_cargo'];
            } else {
                return null;
            }
        } catch (PDOException $e) {
            echo 'Erro: ' . $e->getMessage();
        }
    }

    public function updateFuncionario($id, $nome, $sobrenome, $cpf, $rg, $orgao_emissor, $email, $telefone, $endereco, $data_admissao, $data_demissao, $nome_cargo, $descricao_func)
    {
        try {
            $cargoId = $this->getCargoId($nome_cargo);

            if ($cargoId) {
                $sql = 'UPDATE funcionario ' .
                    'SET nome = :nome,' .
                    ' sobrenome = :sobrenome,' .
                    ' cpf = :cpf,' .
                    ' rg = :rg,' .
                    ' orgao_emissor = :orgao_emissor,' .
                    ' email = :email,' .
                    ' telefone = :telefone,' .
                    ' endereco = :endereco,' .
                    ' data_admissao = :data_admissao,' .
                    ' data_demissao = :data_demissao,' .
                    ' id_cargo = :cargoId,' .
                    ' nome_cargo = :nome_cargo,' .
                    ' descricao_func = :descricao_func ' .
                    'WHERE id_funcionario = :id';

                $stmt = $this->pdo->prepare($sql);
                $stmt->bindParam(':nome', $nome);
                $stmt->bindParam(':sobrenome', $sobrenome);
                $stmt->bindParam(':cpf', $cpf);
                $stmt->bindParam(':rg', $rg);
                $stmt->bindParam(':orgao_emissor', $orgao_emissor);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':telefone', $telefone);
                $stmt->bindParam(':endereco', $endereco);
                $stmt->bindParam(':data_admissao', $data_admissao);
                $stmt->bindParam(':data_demissao', $data_demissao);
                $stmt->bindParam(':cargoId', $cargoId);
                $stmt->bindParam(':nome_cargo', $nome_cargo);
                $stmt->bindParam(':descricao_func', $descricao_func);
                $stmt->bindParam(':id', $id);
                $stmt->execute();

                if ($stmt->rowCount() > 0) {
                    echo "<p>Registro atualizado com sucesso</p>";
                    header('Location: form-crd.php');
                } else {
                    echo 'Erro ao atualizar registro';
                }
            } else {
                echo 'Cargo não encontrado';
            }
        } catch (PDOException $e) {
            echo 'Erro: ' . $e->getMessage();
        }
    }
}
?>
