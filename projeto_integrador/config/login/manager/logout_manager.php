<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/projeto_integrador/config/login/login_process.php'; // Arquivo que contém a conexão com o banco de dados

class LogoutManager {

    // Função para fazer logout
    function logout()
    {
        session_destroy();
        header('Location: ../login/login.php');
        exit();
    }
}