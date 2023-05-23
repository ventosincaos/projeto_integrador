<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/projeto/config/login/login_manager.php'; // Arquivo que contém a conexão com o banco de dados

class SessionManager
{
    private $loginBackend;

    public function __construct($conn)
    {
        $this->loginBackend = new LoginBackend($conn);
    }

    // Função para verificar se o usuário está logado e tem o nível de acesso adequado
    public function verificarSessao()
    {
        if (!isset($_SESSION['user_login'])) {
            header('Location: ../../paginas/login.php');
            exit();
        }

        // Recupera o ID do login da sessão
        $user_login = $_SESSION['user_login'];

        // Verifica se o login existe no banco de dados
        $funcao_usuario = $this->loginBackend->obterIdCargo($user_login);
        if (!$funcao_usuario) {
            header('Location: ../../paginas/login.php');
            exit();
        }

        $_SESSION['funcao_usuario'] = $funcao_usuario;
    }
}

// Verificar se o usuário está logado
if (!isset($_SESSION["user_login"])) {
    // O usuário não está logado, redirecionar para a página de login
    header("Location: ../../paginas/login.php");
    exit();
}

// Criar uma instância da classe SessionManager passando a conexão como parâmetro
$sessionManager = new SessionManager($conn);

// Executar a verificação de sessão
$sessionManager->verificarSessao();