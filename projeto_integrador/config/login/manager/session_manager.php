<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/projeto_integrador/config/login/login_process.php'; // Arquivo que contém a conexão com o banco de dados


class SessionManager
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    // Função para verificar se o usuário está logado e tem o nível de acesso adequado
    function verificarSessao()
    {
        if (!isset($_SESSION['id_funcionario'])) {
            header('Location: ../../pages/login/login.php');
            exit();
        }

        // Recupera o ID do funcionário da sessão
        $idFuncionario = $_SESSION['id_funcionario'];

        // Verifica se o funcionário existe no banco de dados
        $cargo = $this->obterNivelAcessoDoFuncionario($idFuncionario);
        if (!$cargo) {
            header('Location: ../../pages/login/login.php');
            exit();
        }

        $_SESSION['id_cargo'] = $cargo;
    }

    // Função para obter o cargo do funcionário a partir do banco de dados
    private function obterNivelAcessoDoFuncionario($idFuncionario)
    {
        $sql = "SELECT id_cargo FROM funcionario WHERE id_funcionario = :id_funcionario";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id_funcionario', $idFuncionario);
        $stmt->execute();
        $cargo = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($cargo) {
            return $cargo['id_cargo'];
        } else {
            return null;
        }
    }
}
