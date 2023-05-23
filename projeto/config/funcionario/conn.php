<?php
$bancoDeDados = "teste_empresa";
$localhost = "localhost:3306";
$usuario = "root";
$senha = "Rosa0107@Diaz";

try {
    $conn = new PDO("mysql:host=$localhost;dbname=$bancoDeDados;charset=utf8mb4", $usuario, $senha);
    // Configurar o modo de erro do PDO para exceções
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "conexão aqui ";
} catch (PDOException $e) {
    echo "Erro na conexão com o banco de dados: " . $e->getMessage();
}
?>
