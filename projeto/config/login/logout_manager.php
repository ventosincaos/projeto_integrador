<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/projeto/config/login/login_manager.php'; // Arquivo que contém a conexão com o banco de dados

class LogoutManager {

    // Função para fazer logout
    function logout()
    {
        session_destroy();
        header('Location: ../login/login.php');
        exit();
    }
}

$logoutManager = new LogoutManager();

if (isset($_GET['logout'])) {
    $logoutManager->logout();
}

?>
