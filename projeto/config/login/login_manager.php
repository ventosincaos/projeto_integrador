<?php
session_start();

include $_SERVER['DOCUMENT_ROOT'] . '/projeto/config/conn.php';

class LoginBackend {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function login($user_login, $senha_login) {
        $sql = "SELECT user_usuario, funcao_usuario FROM usuarios 
        WHERE user_usuario = :user_usuario AND senha_usuario = :senha_usuario";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':user_usuario', $user_login);
        $stmt->bindParam(':senha_usuario', $senha_login);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            $_SESSION["user_login"] = $user_login;
            $_SESSION["funcao_usuario"] = $result["funcao_usuario"];
            return true;
        } else {
            return false;
        }
    }

    public function obterIdCargo($user_login) {
        $sql = "SELECT funcao_usuario FROM usuarios WHERE user_usuario = :user_usuario";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':user_usuario', $user_login);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            return $result["funcao_usuario"];
        } else {
            return null;
        }
    }
}

// Verificar se o formulário de login foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obter os valores do formulário
    $user_login = $_POST["user_login"];
    $senha_login = $_POST["senha_login"];

    // Criar uma instância da classe LoginBackend passando a conexão como parâmetro
    $loginBackend = new LoginBackend($conn);

    // Executar o login
    if ($loginBackend->login($user_login, $senha_login)) {
        // Credenciais válidas, redirecionar para a página do dashboard ou outra página desejada
        header("Location: ../../paginas/index/index.php"); // Substitua "dashboard.php" pelo caminho da página desejada
        exit();
    } else {
        // Credenciais inválidas, redirecionar para a página de login com uma mensagem de erro
        header("Location: ../../paginas/login.php?erro");
        exit();
    }
}