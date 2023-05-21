<?php

require_once '../../../projeto_integrador/config/DatabaseConnector.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/projeto_integrador/config/session_process.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/projeto_integrador/config/funcionario/manager/table_manager.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/projeto_integrador/config/funcionario/manager/update_manager.php';


$dbname = "sysffee";
$host = "localhost:3306";
$user = "root";
$senha = "Rosa0107@Diaz";

$conn = new DatabaseConnector($dbname, $host, $user, $senha);
$pdo = $conn->getConnection();

$tableManager = new tableManager($pdo);
$tableManager->searchAllFuncionario();
$updateManager = new updateManager($pdo);
// Resto do código...


// Exemplo de uso:
// $loginManager->login($idFuncionario, $senha);
// $logoutManager->logout();
// $sessionManager->verificarSessao();