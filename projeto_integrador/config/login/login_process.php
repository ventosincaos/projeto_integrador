<?php

require_once '../../../projeto_integrador/config/DatabaseConnector.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/projeto_integrador/config/login/manager/login_manager.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/projeto_integrador/config/login/manager/logout_manager.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/projeto_integrador/config/login/manager/session_manager.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/projeto_integrador/config/session_process.php';

session_start();

$dbname = "sysffee";
$host = "localhost:3306";
$user = "root";
$senha = "Rosa0107@Diaz";

$conn = new DatabaseConnector($dbname, $host, $user, $senha);
$pdo = $conn->getConnection();

$loginManager = new loginManager($pdo);
$logoutManager = new LogoutManager();
$sessionManager = new SessionManager($pdo);
$loginManager->login();
$loginError = $loginManager->getLoginError();
// Resto do código...


// Exemplo de uso:
// $loginManager->login($idFuncionario, $senha);
// $logoutManager->logout();
// $sessionManager->verificarSessao();
