<?php
require_once '../../../projeto_integrador/config/DatabaseConnector.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/projeto_integrador/config/login/manager/logout_manager.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/projeto_integrador/config/login/manager/session_manager.php';

$dbname = "sysffee";
$host = "localhost:3306";
$user = "root";
$senha = "Rosa0107@Diaz";

$conn = new DatabaseConnector($dbname, $host, $user, $senha);
$pdo = $conn->getConnection();

$logoutManager = new LogoutManager();
$sessionManager = new SessionManager($pdo);
$sessionManager->verificarSessao();
